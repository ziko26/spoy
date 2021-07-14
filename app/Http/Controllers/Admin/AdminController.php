<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){
        return view('admin.dashboard');
    }

    public function showLogin(){
        return view('admin.auth.login');

    }

    protected function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect() -> route('admin.dashboard');
        }
      
        return redirect()->back()->withInput()->with(['error' => 'Email or password inccorect']);
    }


    public function adminLogout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('show.admin.login');
    }
}
