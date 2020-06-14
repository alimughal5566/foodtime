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
//
//      \Session::get('cart')->totalQty = \Session::get('cart')->totalQty + ($request->qty - $qty);
        $cart_data=\Session('cart');
//        $tprice=$cart_data['price'];
        foreach ($cart_data as $key=>$datum){

            $cart_data['total']=$datum['price']*$request->quantity;
            $cart_data['total_amount']=$datum['price'];
//            $cart_data['quantity']=$request->quantity;

        }
//            $cart_data[$key]['totalamount']=$datum['totalprice']+=$datum['totalprice'];
//        }
            return view('checkout',compact('cart_data'));
        }
    }


    public function OrderReceived(){
        $cart_data=\Session('cart');
        $totalamount=0;
        $order=new Order();
        $order->user_id=Auth::user()->id;
        foreach ($cart_data as $cart)
        {
                    $totalamount+=$cart['price'];
        }
        $order->total_ammount=$totalamount;
        $order->save();

        foreach ($cart_data as $cart)
        {
            $id=$cart['id'];
            $order->product()->attach($id,['quantity'=>$cart['quantity'],'amount'=>$cart['price']]);
        }
        session()->forget('cart');
        return view('order-received');
    }

    //here is all orders function

    public function showOrder(Request $request){
        $orderobj=new Order();
        $order=$orderobj->all();
        return view('order_list',compact('order'));

    }
    public function orderdetails(Request $request)
    {
        $order_id=$request->id;
        $data=Order::with('product')->find($order_id);
        return view('order-Details',compact('data'));
//        return response()->json(['response'=>$data]);
    }
}
