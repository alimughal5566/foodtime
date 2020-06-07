<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(){
        if(!\Session::has('cart')) {
            return redirect()->back();
        }
    else
        {
//            \Session::get('cart')->totalQty = \Session::get('cart')->totalQty + ($request->qty - $qty);
        $cart_data=\Session('cart');
//        $cart_data['amount'] ='0';
        foreach ($cart_data as $key=>$datum){
            $cart_data['totalprice'] =$datum['price']*$datum['quantity'];
//            $cart_data['amount'] +=$datum['price'];

        }

//            $cart_data[$key]['totalamount']=$datum['totalprice']+=$datum['totalprice'];
//        }

//           dd($cart_data);
            return view('checkout',compact('cart_data'));
        }
    }


    public function OrderReceived(){


        return view('order-received');
    }
}
