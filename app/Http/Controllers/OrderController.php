<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request){
        if(!\Session::has('cart')) {
            return redirect()->back();
        }
    else
        {
//            \Session::get('cart')->totalQty = \Session::get('cart')->totalQty + ($request->qty - $qty);
        $cart_data=\Session('cart');
        foreach ($cart_data as $key=>$datum){

            $cart_data['totalprice'] =$datum['price']*$datum['quantity'];
//            $cart_data['quantity'] =$request->quantity;

//            $cart_data['amount'] +=$datum['price'];

        }
//            $cart_data[$key]['totalamount']=$datum['totalprice']+=$datum['totalprice'];
//        }

//           dd($cart_data);
            return view('checkout',compact('cart_data'));
        }
    }


    public function OrderReceived(){
        $cart_data=\Session('cart');

        foreach ($cart_data as $cart)
        {
            $order=new Order();
            $order->user_id=Auth::user()->id;
            $order->total_ammount=$cart['price'];
            $order->payment_status='panding';
            $order->save();
            $id=$cart['id'];
            $order->product()->attach($id,['quantity'=>$cart['quantity']]);
        }
        session()->forget('cart');
        return view('order-received');
    }
}
