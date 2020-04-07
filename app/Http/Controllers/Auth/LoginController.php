<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest')->except('logout');
    }

    public function getAdminLogin() {
        return view('auth/adminLogin');
    }

    public function getUserLogin() {
        return view('auth/login');
    }

    public function adminLogin(Request $request)
    {   
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
   
        if(Auth::guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ])) {
            return redirect()->intended('/admin/students');
        }
        return back()->withInput($request->only('username'))->with('error', "Tài khoản hoặc mật khẩu không đúng");
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ])) {
            return redirect()->intended('/');
        }
        return back()->withInput($request->only('username'));
    }
}
