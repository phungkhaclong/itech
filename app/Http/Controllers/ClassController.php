<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Classes;
use App\Majors;
use App\User;
use App\StudentClass;
use App\SubjectClass;
use App\Subject;
use App\Result;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $classes = Classes::all();  
        $subjects = SubjectClass::all();
        return view('admin/classes/index', [
            'classes' => $classes,
            'subjects' => $subjects
        ]);
    }

    public function create()
    {
        $majors = Majors::all();
        return view('admin/classes/create', [
            'majors' => $majors
        ]);
    }

    public function getAddStudent($classId){
        $studentIds = StudentClass::select("student_id")->get();
        $students = User::whereNotIn("student_id", $studentIds)->paginate(10);
        $class = Classes::where("class_id", $classId)->first();
        return view("admin/classes/addStudent", [
            'students' => $students,
            'class' => $class
        ]);
    }

    public function postAddStudent(Request $request, $classId){
        StudentClass::create([
            'class_id' => $request->input("class_id"),
            'student_id' => $request->input('student_id')
        ]);
        return redirect("/admin/classes/$classId/addStudent")->with("success", "Thêm thành công");
    }

    public function show($classId){
        $students = User::join("student_classes", "users.student_id", "=", "student_classes.student_id")
            ->where("student_classes.class_id", $classId)
            ->select("users.student_id", "users.name", "gender", "birthday", "address", "phone")
            ->get();
        $class = Classes::where("class_id", $classId)->first();

        $subjectList = Subject::all();
        $subjects = SubjectClass::all();
        foreach ($subjects as $subject) {
          $subjectInfo = Subject::where('subject_id', $subject->subject_id)->first();
          $subject->subjectInfo = $subjectInfo;
        }
        return view("admin/classes/show", [
            'students' => $students,
            'class' => $class,
            'subjects' => $subjects,
            'subjectList' => $subjectList
        ]);
    }

    public function addSubject(Request $request, $classId)
    {
        $rules = [
            'subject_id' => 'unique:subject_classes'
        ];
        $messages = [
            'subject_id.unique' => 'Lớp đã dạy môn học này'
        ];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
          return redirect()->back()->with("error", "Thêm không thành công")->withInput();
        } else {
            SubjectClass::create([
                'class_id' => $classId,
                'subject_id' => $request->input('subject_id')
            ]);
            return redirect("/admin/classes/$classId")->with("success", "Thêm thành công");
        }
        return redirect("/admin/classes/$classId")->with("error", "Thêm không thành công");

     }

    public function store(Request $request)
    {
        $rules = [
            'class_id' => 'required|unique:classes|regex:/^[a-z0-9-]+$/i',
            'name' => 'required',
            'year' => 'required|integer|min:1900|max:2200|regex:/^[0-9-]+$/i',
            'majors_id' => 'required'
        ];
        $messages = [
            'class_id.unique' => "Mã lớp đã tồn tại",
            'class_id.regex' => "Mã khóa học chỉ được chứ những kí tự a-z, 0-9 và 
            '-'",
            'class_id.required' => "Yêu cầu nhập mã lớp",
            'name.required' => 'Tên không được để trống',
            'year.required' => 'Năm học không được để trống',
            'year.min' => 'Năm học không hợp lệ',
            'year.max' => 'Năm học không hợp lệ',
            'year.integer' => 'Năm học phải là số',
            'year.regex' => 'Năm học phải là số',
            'majors_id.required' => 'Mã khóa học không được',
        ];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Classes::create([
                'class_id' => $request->input('class_id'),
                'name' => $request->input('name'),
                'year' => $request->input('year'),
                'majors_id' => $request->input('majors_id')
            ]);
            return redirect('/admin/classes')->with('success',"Thêm lớp thành công");
        }
        return redirect('/admin/classes')->with('error', "Thêm thất bại");
    }
    

    public function edit($id)
    {
        $class = Classes::where("class_id", $id)->first();
        $majors = Majors::all();
        return view('admin/classes/edit', [
            'class' => $class,
            'majors' => $majors
        ]);
    }

    public function update(Request $request, $classId)
    {
        $rules = [
            'name' => 'required',
            'year' => 'required|integer|min:1900|max:2200|regex:/^[0-9-]+$/i',
            'majors_id' => 'required'
        ];
        $messages = [
            'name.required' => 'Yêu cầu nhập tên lớp',
            'year.required' => 'Năm học không được để trống',
            'year.integer' => 'Năm học phải là số',
            'year.min' => 'Năm học không hợp lệ',
            'year.max' => 'Năm học không hợp lệ',
            'majors_id.required' => 'Mã khóa học không được',
        ];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Classes::where("class_id", $classId)->update([
                'name' => $request->input('name'),
                'year' => $request->input('year'),
                'majors_id' => $request->input('majors_id')
            ]);
            return redirect('/admin/classes')->with('success',"Cập nhật lớp thành công");
        }
        return redirect('/admin/classes')->with('error', "Cập nhật lớp không thành công");
    }

    public function destroy($classId)
    {
        try {
            StudentClass::where('class_id', $classId)->delete();
            SubjectClass::where('class_id', $classId)->delete();
            Result::where('class_id', $classId)->delete();
            Classes::find($classId)->delete();
            return redirect('/admin/classes')->with('success' , "Xoá lớp học thành công");
        }
        catch(\Thorowable $t){
            return redirect('/admin/clases')->with('error',"Xoá lớp không thành công");
        }
    }

    public function postDeleteStudent($classId, $studentId){
        StudentClass::where('student_id', $studentId)->first()->delete();
        return redirect("/admin/classes/$classId")->with('success', "Xoá sinh viên khỏi lớp thành công");
    }
}
