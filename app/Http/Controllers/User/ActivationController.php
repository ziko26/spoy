<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationAccount;
use Illuminate\Support\Str;

class ActivationController extends Controller
{

     //activate the user account
     public function activateUserAccount($code){
        try{
        $user = User::whereCode($code)->first();
        $user->code = null;
        $user->update([ 
            "active" => 1,
            "email_verified_at" => now()

        ]);
        return redirect()->back()->with(['success' => 'We activate your accouont succesfly']);
        }catch(\Exception $ex){
            return redirect()->route('user.dashboard')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    }

     //send email to activate the user account
     public function resendActivationCode($email){
        try{

        $user = User::whereEmail($email)->first();
        Mail::to($user)->send(new ActivationAccount($user->code));
        return redirect()->back()->with(['success' => 'We sent an email to your email inbox']);
        
        }catch(\Exception $ex){
            return redirect()->route('user.dashboard')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    }
}
