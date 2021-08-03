<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
       $todayEr = Order::where('user_id', auth()->id())
        ->whereDay('created_at',  date('d'))->where('statut', 1)->sum('item_price');
        $yesterdayEr = Order::where('user_id', auth()->id())
        ->whereDay('created_at',  date('d') -1)->where('statut', 1)->sum('item_price');
       return view('user.dashboard')->with([
           'user' => $user,
           'brand' => $brand,
           'orders' => $orders,
           'NewOrders' => $Neworders,
           'delevraids' => $delevraids,
           'canceleds' => $canceleds,
           'todayEr' => $todayEr,
           'yesterdayEr' => $yesterdayEr,
       ]);
   }

}
