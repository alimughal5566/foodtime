<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductController extends Controller
{
    private $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function add_product(){
        $catagories=Categories::all();
        return view('products.add_product',compact('catagories'));
    }

    public function product_list(){
        $product_list=Product::all();

        return view('products.product_list',compact('product_list'));
    }

    public function create(Request $request){
//        dd($request);
        $formdata=$request;
        $addproduct=$this->product->saveproduct($request);
        if($addproduct){
            return redirect()->back()->with('message','Product added Successfully');
        }


    }
    public function product_delete($id){
        $delete_product=Product::find($id);
        $delete=$delete_product->delete($delete_product);
        if ($delete){
            return redirect()->back()->with('message','Product Deleted Successfully');

        }


    }

    public function edit_product($id){
        $product=Product::find($id);

        $categories=Categories::all();

        return view('products.edit_product',compact('categories','product'));
    }

    public function product_update(Request $request){
        $formdate=$request;
        $updateproduct=$this->product->update_product($formdate);
        if ($updateproduct){
            return redirect(route('product_list'))->with('message','Product Updated Successfully');
        }
    }


    public function addtoCart(Request $request,$id){


        $product_from_db = Product::find($id);
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
               'products' => [
                   $id => [
                    "id"=>$id,
                    "name" => $product_from_db->product_name,
                    "quantity" => 1,
                    "price" => $product_from_db->price,
                    "photo" => $product_from_db->thumbnail
                 ]
               ],
                'totalPrice'=> $product_from_db->price,
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        $totalQty = 0;
        $totalPrice = 0;

        if(isset($cart['products'][$id])) {
            $cart['products'][$id]['quantity']++;
            $cart['totalPrice'] = 0;
            foreach ($cart['products'] as $each){

                $cart['totalPrice'] = $cart['totalPrice'] + ($each['price'] * $each['quantity']);
            }

            session()->put('cart', $cart);


            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart['products'][$id] = [
            "id"=>$id,
            "name" => $product_from_db->product_name,
            "quantity" => 1,
            "price" => $product_from_db->price,
            "photo" => $product_from_db->thumbnail
        ];
//        $cart['totalQty'] = $cart['totalQty'] + 1;
        $cart['totalPrice'] = $cart['totalPrice'] + $product_from_db->price;


        session()->put('cart', $cart);

//        dd(Session('cart'));
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }


public function viewCart(){

    if(!\Session::has('cart')) {
        return view('cart');
    }

    if(\Session::has('cart')) {

        $cart_data=\Session('cart');

        return view('cart',compact('cart_data'));
    }

}

public function cartUpdate(Request $request){

    $cartIndex = \Session::get('cart');
//    dd($cartIndex);
    $cartIndex['products'][$request->id]['quantity'] = $request->qty;
    $cartIndex['totalPrice'] = 0;
    foreach ($cartIndex['products'] as $each){

        $cartIndex['totalPrice'] = $cartIndex['totalPrice'] + ($each['price'] * $each['quantity']);
    }

    session()->put('cart', $cartIndex);
    return response()->json(true);
}



}
