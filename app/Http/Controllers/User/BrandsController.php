<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;

class BrandsController extends Controller
{
    public function create(){
        return view('user.brands.create')->with([
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'min:10',
            'image' => 'required|image|mimes:png,jpeg,jpg|max:2048',
            'category_id' => 'required|numeric',
        ]);

        try{
            //add data
    if($request->has('image')){
        $file = $request->image;
        $imageName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('images/user/brand'), $imageName);
        $name = $request->name;

        Brand::create([
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $request->description,
            'image' => $imageName,
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('user.brands.edit', $id)->with(['success' => 'Your Brand is Ready to use']);
        }

        }catch(\Exception $ex){

        return redirect()->back()->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    }

    public function edit($id){
        $brand = Brand::select()->where('user_id', auth()->id())->find($id);
        $categories = Category::all();

        if(!$brand){
            return redirect()->route('user.dashboard');
        }
 
        return view('user.brands.edit', compact('brand', 'categories'));
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'min:10',
            'image' => 'image|mimes:png,jpeg,jpg|max:2048',
            'category_id' => 'required|numeric',
        ]);

        try{
            $brand = Brand::find($id);

            if(!$brand){
                return redirect()->route('user.brands.edit', $id)->with(['error' => 'This is brand not found']);
            }


            if($request->has('image')){
                $image_path = public_path('images/user/brand/'.$brand->image);
                // delete the old image
                if(File::exists($image_path)){
                    File::delete($image_path);
                }
                $file = $request->image;
                $imageName = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('images/user/brand'), $imageName);
                $brand->image = $imageName;
            } 
            $name = $request->name;
            // update in db
            $brand->update([
                'name' => $name,
                'slug' => $request->slug,
                'description' => $request->description,
                'image' => $brand->image,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
            ]);

            return redirect()->route('user.brands.edit', $id)->with(['success' => 'Your Brand Updated succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('user.dashboard')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    }

}
