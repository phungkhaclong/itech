<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Registration;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $registrations = Registration::all();
        return view('admin/registrations/index', compact('registrations'));
    }

    public function destroy($id){
        try {
            $news = Registration::find($id);
            $news->delete();
            return \redirect('/admin/registrations')->with("success", "Xoá đăng ký thành công");
        } catch (\Throwable $th) {
            return \redirect('/admin/registrations')->with("error", "Xoá đăng ký không thành công");
        }
    }
}
  