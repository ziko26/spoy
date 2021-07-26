<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class InsightsController extends Controller
{
    public function index(){
        $user = auth()->user();

        $orders = Order::all()->where('user_id', auth()->id());
        $YesterdayOrders = Order::where('user_id', auth()->id())
                        ->whereDay('created_at',  date('d') -1)->get();
        $CurrentOrders = Order::where('user_id', auth()->id())
                        ->whereDay('created_at',  date('d'))->get();

        $Neworders = Order::where('user_id', auth()->id())
                             ->where('statut', 0)->get();

        $delevraids = Order::where('user_id', auth()->id())
         ->where('statut', 1)->get();

        $canceleds = Order::where('user_id', auth()->id())
         ->where('statut', 2)->get();

        return view('user.insights.index')->with([
            'user' => $user,
            'orders' => $orders,
            'YesterdayOrders' => $YesterdayOrders,
            'CurrentOrders' => $CurrentOrders,
            'NewOrders' => $Neworders,
            'delevraids' => $delevraids,
            'canceleds' => $canceleds
        ]);
    }
}
