<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Hash;
use DB;
use App\User;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $q = $request->input('q');
        $users = User::search($q)->paginate(5);
        return view('admin/students/index', compact("users", "q"));
    }

    public function create() 
    {
        return view('admin/students/create');
    }

    public function store(Request $request)
    {
        $rules = [
            'student_id' => 'required:unique:users',
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'email|unique:users',
            'phone' => [
                'unique:users', 
                'regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/i'
            ],
        ];
        $messages = [
    		'student_id.required' => 'Yêu cầu nhập họ tên',
    		'student_id.unique' => 'Mã sinh viên đã tồn tại',
    		'name.required' => 'Yêu cầu nhập họ tên',
            'birthday.required' => 'Yêu cầu nhập ngày sinh',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Địa chỉ email đã tồn tại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.regex' => "Số điện thoại không hợp lệ",
    	];
        $validator = validator()->make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            User::create([
                'student_id' => $request->input('student_id'),
                'name' => $request->input('name'),
                'username' => $request->input('student_id'),
                'gender' => $request->input('gender'),
                'birthday' => $request->input('birthday'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('student_id')),
            ]);
            return redirect('/admin/students')->with('success', "Thêm học viên thành công");    
        }
        return redirect('/admin/students')->with('error', "Thêm học viên không thành công");
    }

    public function edit($id)
    {
        $user = User::where("student_id", $id)->first();
        return view('admin/students/edit', compact('user'));
    }

    public function update(Request $request, $studentId)
    {
        $user = User::where("student_id", $studentId)->first();
        $rules = [
            'name' => 'required',
            'birthday' => 'required',
            'email' => "email|unique:users,email,$user->student_id,student_id",
            'phone' => [
                "unique:users,email,$user->student_id,student_id", 
                "regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/"
            ],
        ];
        $messages = [
    		'name.required' => 'Yêu cầu nhập họ tên',
            'birthday.required' => 'Yêu cầu nhập ngày sinh',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Địa chỉ email đã tồn tại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.regex' => "Số điện thoại không hợp lệ",
    	];
        $validator = validator()->make($request->all(), $rules, $messages);
        if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            $user->update($request->all());
            return redirect("/admin/students")->with("success", "Cập nhật thông tin thành công");
        }
        return redirect("/admin/students")->with("error", "Cập nhật thông tin không thành công");
    }

    public function destroy($studentId)
    {
        try {
            User::find($studentId)->delete();
            return redirect('/admin/students')->with('success', "Xoá thành công");
        } catch (\Throwable $th) {
            return redirect('/admin/students')->with('error', "Xoá không thành công");
        }
    }
}
