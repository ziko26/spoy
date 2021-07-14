<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\City;
use Illuminate\Support\Facades\Hash;

class InformationsController extends Controller
{
    public function edit($id){
        $user = auth()->user();
        $cities = City::all();
        return view('user.auth.information')->with([
            'user' => $user,
            'cities' => $cities
        ]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'fullName' => 'required|min:3',
            'phone' => 'required|numeric',
            'city_id' => 'required|numeric'

        ]);

        try{
            $user = User::find($id);

            if(!$user){
                return redirect()->route('user.auth.information', $id)->with(['error' => 'This is user not found']);
            }

            // update in db
            $user->update([
                'fullName' => $request->fullName,
                'comany_name' => $request->comany_name,
                'phone' => $request->phone,
                'city_id' => $request->city_id,
                'address' => $request->address,
            ]);

            return redirect()->route('user.auth.information', $id)->with(['success' => 'Your user Updated succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('user.dashboard')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    }

    public function password($id){
        $user = auth()->user();
        return view('user.auth.password')->with([
            'user' => $user,
        ]);
    }

    public function updatePassword($id, Request $request){
        $this->validate($request, [
            'oldPassword' => 'required',
            'password' => 'required|same:passwordRepeat|min:8',
            'passwordRepeat' => 'required',
        ]);
        try{
            $user = User::find($id);

            if(!$user){
                return redirect()->route('user.auth.password', $id)->with(['error' => 'This is user not found']);
            }

            $userPassword = $user->password;
    
            if (!Hash::check($request->oldPassword, $userPassword)) {
                return redirect()->back()->with(['erorr'=>'password not match']);
            }
    
            $user->password = Hash::make($request->password);
    
            $user->update();

            return redirect()->route('user.dashboard')->with(['success' => 'Your password changed succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('user.dashboard')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
       
    }


}
