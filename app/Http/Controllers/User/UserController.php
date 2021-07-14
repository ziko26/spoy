<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Models\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ActivationAccount;

class UserController extends Controller
{

    public function showLogin(){

        return view('user.auth.login');

    }

    protected function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect() -> route('user.dashboard');
        }
      
        return redirect()->back()->withInput()->with(['error' => 'Email or password inccorect'])->withInput();
    }

    public function showRegister(){
        return view('user.auth.register')->with([
            'cities' => City::all()
        ]);

    }


    protected function register(RegisterRequest $request){
        $code = Str::random(128);
        try{
            User::create([
                'fullName' => $request->fullName,
                'phone' => $request->phone,
                'comany_name' => $request->comany_name,
                'city_id' => $request->city_id,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'code' => $code
                
            ]);
            Mail::to($request->email)->send(new ActivationAccount($code));
    
            return redirect()->route('user.dashboard')->with(['success' => 'Your Account was created succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('show.user.login')->withInput()->with(['erorr' => 'Something went worng! pleas try again']);
        }


    }

    public function userLogout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('show.user.login');
    }
}
