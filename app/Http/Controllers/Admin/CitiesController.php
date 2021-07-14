<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CityRequest;
use Illuminate\Support\Str;
use App\Models\City;

class CitiesController extends Controller
{
    public function index(){
        return view('admin.cities.index')->with([
         'cities' => City::all(),
        ]);
    }

    public function create(){
        $cities = City::all();
        return view('admin.cities.create', compact('cities'));
    }
    
    public function store(CityRequest $request){
        try{
            //add data
            $name = $request->name;
            City::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
            return redirect()->route('admin.cities')->with(['success' => 'The city added successfly']);
        }catch(\Exception $ex){
    
          return redirect()->route('admin.cities')->with(['erorr' => 'Something went wrong!']);
    
        }
       }
    
       public function edit($id){
    
        $city = City::select()->find($id);
    
        if(!$city){
            return redirect()->route('admin.cities');
        }
    
        return view('admin.cities.edit', compact('city'));
       }
    
       public function update($id, CityRequest $request){
    
        try{
            $city = City::find($id);
    
            if(!$city){
                return redirect()->route('admin.cities.edit', $id)->with(['error' => 'This is city not found']);
            }
            // update in db
            $city->update([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);
    
            return redirect()->route('admin.cities')->with(['success' => 'The city updated successfly']);
    
        }catch(\Exception $ex){
    
            return redirect()->route('admin.cities')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    } 
}
