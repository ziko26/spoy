<?php


namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\User;

class FrontController extends Controller
{
    public function index(){
        return view('front.index')->with([
            'brands' => Brand::whereHas('user', function($q){
                                    $q->where('active', '=', 1);
                             })->get(),
            'lastBrands' => Brand::whereHas('user', function($q){
                                     $q->where('active', '=', 1);
                             })->latest()->limit(6)->get(),
            'categories' => Category::all()
        ]);
    }

    public function contact(){
        return view('front.contact');
    }

    public function search(Request $request){
        $request->validate([

            'q' => 'required'
        ]);

        $q = $request->q;
        $category = $request->category;
        $searchForBrands = Brand::where('category_id', 'like', '%'.$category.'%')
                                    ->where('slug', 'like', '%'.$q.'%')
                                    ->orWhere('name', 'like', '%'.$q.'%')
                                    ->get();

        if($searchForBrands->count()){
            return view('front.index')->with([
                'brands' =>  $searchForBrands,
                'categories' => Category::all()
            ]);
        }else{
            return redirect()->route('front.index');
        }


    }

    public function brand(Brand $brand){
        return view('front.brand')->with([
            'brand' => $brand,
            'category' => Category::where('id', '=', $brand->category_id)->get(),
            'items' => Item::where('user_id', '=', $brand->user_id)->paginate(9),
        ]);
    }

    public function categories(Category $category){
        return view('front.categories')->with([
            'category' => $category,
            'brands' => Brand::whereHas('user', function($q){
                $q->where('active', '=', 1);
            })->where('category_id', '=', $category->id)
                             ->paginate(9),
        ]);
    }
}
