<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Software;

class SoftwareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'url' => 'required'
        ];
        $messages = [
            'name.required' => 'Yêu cầu nhập tên phần mềm',
            'url.required' => 'Yêu cầu nhập đường dẫn'
        ];
        $validator = \validator()->make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return redirect()->back()->with("error", "Thêm không thành công, kiểm tra lại thông tin nhập")->withInput();
        } else {
            Software::create($request->all());
            return redirect()->back()->with('success', 'Thêm thành công');
        }
        return redirect()->back()->with('error', 'Thêm không thành công');
    }

    public function destroy($id)
    {
        try {
            Software::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Xoá thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xoá không thành công');
        }
    }
}
