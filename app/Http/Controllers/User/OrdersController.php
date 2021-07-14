<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
       return view('user.orders.index')->with([
        'orders' => Order::all()->where('user_id', auth()->id()),
       ]);
    }

    public function store(Request $request, $id){
        $this->validate($request, [
            'customer_name' => 'required|min:3',
            'customer_phone' => 'required|numeric',

        ]);

        try{
            $item = Item::find($id);
            Order::create([
                'customer_name' => $request->customer_name,
                'customer_phone' => $request->customer_phone,
                'item_id' => $id,
                'user_id' => $item->user->id
    
            ]);
            return redirect()->back();
        }catch(\Exception $ex){  
          return redirect()->back();
        }
       
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'statut' => 'required|numeric',
        ]);
        try{
            $order = Order::find($id);
            if(!$order){
                return redirect()->route('user.orders')->with(['error' => 'This is Item not found']);
            }
            $order->update([
                'statut' => $request->statut,
            ]);
            return redirect()->back();
        }catch(\Exception $ex){
    
          return redirect()->route('user.orders');
    
        }

    }


}
