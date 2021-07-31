<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\City;
use App\User;

class UsersController extends Controller
{

    public function index(){
       $users = User::orderBy('created_at', 'desc')->get();
       return view('admin.users.index')->with([
           'users' => $users,
       ]);
    }
    public function create(){
        return view('admin.users.create')->with([
            'cities' => City::all()
        ]);
    }
    public function store(RegisterRequest $request){
        try{
            User::create([
                'fullName' => $request->fullName,
                'phone' => $request->phone,
                'comany_name' => $request->comany_name,
                'city_id' => $request->city_id,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'active' => $request->active
                
            ]);
    
            return redirect()->route('admin.users.index')->with(['success' => 'User created succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('admin.users.index')->withInput()->with(['erorr' => 'Something went worng! pleas try again']);
        }
    }
}
