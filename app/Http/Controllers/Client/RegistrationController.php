<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => [
                "regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/"
            ]
        ];
        $messages = [
            'name.required' => 'Yêu cầu nhập họ tên',
            'email.required' => 'Yêu cầu nhập địa chỉ email',
            'email.email' => 'Email không đúng định dạng',
            'phone.regex' => 'Số điện thoại không hợp lệ',
        ];
        $validator = validator()->make($request->all(), $rules, $messages); 
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Thông tin nhập không hợp lệ')->withInput();
        } else {
            Registration::create($request->all());
            return redirect()->back()->with('success', 'Cảm ơn đã đăng ký. Chúng tôi sẽ liên hệ lại với bạn');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra');
    }
}
