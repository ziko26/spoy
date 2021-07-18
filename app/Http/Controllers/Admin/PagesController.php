<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Models\Page;

class PagesController extends Controller
{
    public function index(){
        return view('admin.pages.index')->with([
         'pages' => Page::all(),
        ]);
    }

    public function create(){
        return view('admin.pages.create');
    }
    
    public function store(PageRequest $request){
        // try{
            //add data
            Page::create([
                'page_name' => $request->page_name,
                'slug' => $request->slug,
                'page_content' => $request->page_content,
            ]);
            return redirect()->route('admin.pages')->with(['success' => 'The Page added successfly']);
        // }catch(\Exception $ex){
    
        //   return redirect()->route('admin.pages')->with(['erorr' => 'Something went wrong!']);
    
        // }
    }
    
    public function edit($id){
    
        $page = Page::select()->find($id);
    
        if(!$page){
            return redirect()->route('admin.pages');
        }
    
        return view('admin.pages.edit', compact('page'));
    }
    
    public function update($id, PageRequest $request){
    
        try{
            $page = Page::find($id);
    
            if(!$page){
                return redirect()->route('admin.pages.edit', $id)->with(['error' => 'This is Page not found']);
            }
            // update in db
            $page->update([
                'page_name' => $request->page_name,
                'slug' => $request->slug,
                'page_content' => $request->page_content,
            ]);
    
            return redirect()->route('admin.pages')->with(['success' => 'The Page updated successfly']);
    
        }catch(\Exception $ex){
    
            return redirect()->route('admin.pages')->with(['erorr' => 'حدث خطأ ما، المرجو إعادة المحاولة!']);
        }
    } 
    public function delete($id){
        try{
            $page = Page::find($id);

            if(!$page){
                return redirect()->route('admin.pages');
            }
    
            // delete from db
            $page->delete();

            return redirect()->route('admin.pages')->with(['success' => 'The page deleted succesfly']);

        }catch(\Exception $ex){

            return redirect()->route('admin.pages')->with(['erorr' => 'Something went wrong!']);
        }
    }


}
