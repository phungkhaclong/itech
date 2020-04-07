<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Hash;
use DB;
use App\Subject;
use App\SubjectClass;
use App\Result;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $subjects = Subject::all();
        return view('admin/subjects/index', [
            'subjects' => $subjects
        ]);
    }

    public function create() 
    {
        return view('admin/subjects/create');
    }

    public function store(Request $request)
    {
        $rules = [
            'subject_id' => 'required|unique:subjects',
            'name' => 'required',
        ];
        $messages = [
            'subject_id.required' => 'Yêu cầu nhập mã môn học',
            'subject_id.unique' => 'Mã môn học đã tồn tại',
            'name.required' => 'Yêu cầu nhập tên môn học',
        ];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Subject::create([
                'subject_id' => $request->input('subject_id'),
                'name' => $request->input('name'),
            ]);
            return redirect('/admin/subjects')->with('success', "Thêm môn học thành công");    
        }
        return redirect('/admin/subjects')->with('error', "Thêm môn học không thành công");
    }

    public function edit($id)
    {
        $subject = Subject::where("subject_id", $id)->first();
        return view('admin/subjects/edit', [
            'subject' => $subject
        ]);
    }

    public function update(Request $request, $subjectId)
    {
        $rules = [
            'name' => 'required'
        ];
        $messages = [
            'name.required' => 'Yêu cầu nhập tên môn học',
        ];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Subject::where("subject_id", $subjectId)->update([
                'name' => $request->input('name'),
            ]);
            return redirect('/admin/subjects')->with('success',"Cập nhật thành công");
        }
        return redirect('/admin/subjects')->with('error', "Cập nhật không thành công");
    }

    public function destroy($subjectId)
    {
        try {
            Result::where("subject_id", $subjectId)->delete();
            SubjectClass::where("subject_id", $subjectId)->delete();
            Subject::find($subjectId)->delete();
            return redirect('/admin/subjects')->with('success', "Xoá thành công");
        } catch (\Throwable $th){
            dd($th);
            return redirect('/admin/subjects')->with('error', "Xoá không thành công");
        }
    }
}
