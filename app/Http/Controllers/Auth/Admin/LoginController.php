<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function indexAction(){
        return view('admin/accounts/login');
    }

    public function loginAction(Request $request){
        // $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password' => 'required|min:6'
        // ]);

       
    $credentials = $request->only('email','password');

    $remember_me = $request->has('remember') ? true : false;

    if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
        // $user = Auth::guard('admin')->user()->id;
        // $user = Admin::find($user);
        // Auth::guard('admin')->login($user);
        return redirect()->route('admin.dashboard');
    }  

    // dd(Auth::guard('admin')->check());

    return redirect()->route('login.loginAction')->with('error', 'Email or Password is incorrect!');
}
}
