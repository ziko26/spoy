<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.categories.index')->with([
         'categories' => Category::all(),
        ]);
    }

    public function create(){
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }
    
    public function store(CategoryRequest $request){
        try{
            //add data
            $name = $request->name;
            if($request->has('image')){
            $file = $request->image;
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/admin/categories'), $imageName);
           
    
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'image' => $imageName,
            ]);
            return redirect()->route('admin.categories')->with(['success' => 'The Category added successfly']);
            }else{
                Category::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                ]);
            return redirect()->route('admin.categories')->with(['success' => 'The Category added successfly']);    
            }
        }catch(\Exception $ex){
    
          return redirect()->route('admin.categories')->with(['erorr' => 'Something went wrong!']);
    
        }
       }
    
       public function edit($id){
    
        $category = Category::select()->find($id);
    
        if(!$category){
            return redirect()->route('admin.categories');
        }
    
        return view('admin.categories.edit', compact('category'));
       }
    
       public function update($id, CategoryRequest $request){
    
        try{
            $category = Category::find($id);
    
            if(!$category){
                return redirect()->route('admin.categories.edit', $id)->with(['error' => 'This is category not found']);
            }
    
    
            if($request->has('image')){
                $image_path = public_path('images/admin/categories/'.$category->image);
                // delete the old image
                if(File::exists($image_path)){
                    File::delete($image_path);
                }
                $file = $request->image;
                $imageName = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('images/admin/categories'), $imageName);
                $category->image = $imageName;
            } 
            $name = $request->name;
            // update in db
            $category->update([
                'name' => $name,
                'slug' => $request->slug,
                'image' => $category->image,
            ]);
    
            return redirect()->route('admin.categories')->with(['success' => 'The category updated successfly']);
    
        }catch(\Exception $ex){
    
            return redirect()->route('admin.categories')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    } 
}
