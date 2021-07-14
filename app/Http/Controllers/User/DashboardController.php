<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Order;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{

   public function index(){
       $user = auth()->user();
       $brand = Brand::all()->where('user_id', auth()->id());
       $orders = Order::where('user_id', auth()->id())->get();
       $Neworders = Order::where('user_id', auth()->id())
                            ->where('statut', 0)->get();
       $delevraids = Order::where('user_id', auth()->id())
        ->where('statut', 1)->get();
       $canceleds = Order::where('user_id', auth()->id())
        ->where('statut', 2)->get();
       return view('user.dashboard')->with([
           'user' => $user,
           'brand' => $brand,
           'orders' => $orders,
           'NewOrders' => $Neworders,
           'delevraids' => $delevraids,
           'canceleds' => $canceleds
       ]);
   }

}
