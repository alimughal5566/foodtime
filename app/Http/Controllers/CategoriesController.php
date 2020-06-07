<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    private $category;
    public function __construct(Categories $category)
    {
        $this->category = $category;
    }


            public function category_list(){
                    $categorylist=Categories::all();
                return view('categories.category_list',compact('categorylist'));
            }



            public function add_category(){

                return view('categories.add_category');
            }

                public function create(Request $request){
                       $formdata=$request;
                    $addcategory=$this->category->savecategory($formdata);
                    if($addcategory){
                        return redirect()->back()->with('message','Category added Successfully');
                    }
                }



    public function category_delete($id){
        $category=Categories::find($id);
        $delete=$category->delete($category);
        if($delete){

            return redirect()->back()->with('message','Category Deleted Successfully');

        }
    }


    public function category_edit($id){
        $category=Categories::find($id);
        return view('categories.category_edit',compact('category'));
    }


    public function category_update(Request $request){
        $formdata =$request;
        $updatacategory = $this->category->updatacategory($formdata);
        if ($updatacategory) {
            return redirect()->route('category_list')->withMessage('Updated successfully');

        } else {
            return redirect()->route('category_list');
        }


    }


/**
 * front end working in controller
 */



   public function categoryDetail($id){
       $category_header=Categories::all();
       $products=Product::where('category_id',$id)->get();
//       dd($products);
        return view('categories.category_details',compact('products','category_header'));
//        return view('categories.category_details');
   }



}
