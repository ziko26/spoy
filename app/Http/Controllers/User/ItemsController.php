<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function index(){
        return view('user.items.index')->with([
            'items' => Item::all()->where('user_id', auth()->id()),                 
        ]);
    }

    public function create(){
        return view('user.items.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request){
   
        try{
            //add data
    if($request->has('image')){
        $files = $request->file('image');
        foreach($files as $file){
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images/user/items'), $imageName);
            $images[] = $imageName;
        }
       

        Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'price_descount' => $request->price_descount,
            'image' => implode("|",$images),
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('user.items')->with(['success' => 'The Item added successfly']);
    }

        }catch(\Exception $ex){

        return redirect()->back()->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    }


    public function edit($id){
        $item = Item::select()->where('user_id', auth()->id())->find($id);

        if(!$item){
            return redirect()->route('user.items');
        }
 
        return view('user.items.edit', compact('item'));
    }

    public function update($id, Request $request){

        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'image.*' =>  'image|mimes:png,jpeg,jpg|max:2048',
            'price' => 'required|numeric',

        ]);

        try{
            $item = Item::find($id);

            if(!$item){
                return redirect()->route('user.items.edit', $id)->with(['error' => 'This is Item not found']);
            }


            if($request->has('image')){
                $oldImages = explode("|" , $item->image);

                foreach($oldImages as $image){
                $image_path = public_path('images/user/items/'.$image);
                
                    if(File::exists($image_path)){
                        File::delete($image_path);
                    }
                }

               
                $files = $request->file('image');
                foreach($files as $file){
    
                    $imageName = time().'_'.$file->getClientOriginalName();
                    $file->move(public_path('images/user/items'), $imageName);
                    $images[] = $imageName;
                }
            } 

            // update in db
            if($request->has('image')){

                $item->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'price_descount' => $request->price_descount,
                    'image' => implode("|",$images),
                    'user_id' => auth()->id(),
    
                ]);

            }else{
                $item->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'price_descount' => $request->price_descount,
                    'user_id' => auth()->id(),
                ]);
            }

            return redirect()->route('user.items')->with(['success' => 'The Item updated successfly']);

        }catch(\Exception $ex){

            return redirect()->route('user.items')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    } 
    
    public function delete($id){
        try{
            $item = Item::find($id);

            if(!$item){
                return redirect()->route('user.items');
            }
    
            // delete from db
            $images = explode("|" , $item->image);

            foreach($images as $image){
             $image_path = public_path('images/user/items/'.$image);
               
                if(File::exists($image_path)){
                    File::delete($image_path);
                }
            }
           
            $item->delete();

            return redirect()->route('user.items')->with(['success' => 'The Item deleted succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('user.items')->with(['erorr' => 'Something went wrong!']);
        }
    }


}
