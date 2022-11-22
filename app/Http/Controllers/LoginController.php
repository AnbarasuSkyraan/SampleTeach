<?php

namespace App\Http\Controllers;
use App\Http\Requests\Admin\LoginRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;



class LoginController extends Controller
{   
    public function login(Request $request)
    {
        return view('Admin.Authendication.login');
    }
    public function loginpost(Request $request)
    {
        $dataAttempt = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        dd(Auth::attempt($dataAttempt));
    }
}
