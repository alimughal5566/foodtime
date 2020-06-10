<?php

namespace App\Models;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=['product_name','category_id','price','description','Ingredients','thumbnail'];
    public function category(){
        return $this->belongsTo(categories::class);
    }

    public function saveproduct($formdata){
        if ($formdata->hasFile('thumbnail')) {
            $image = $formdata->file('thumbnail');
            $imageName = time() . "." . $image->extension();
            $imagePath = public_path() . '/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;


        }


        $addproduct = Product::create([
            'product_name' => $formdata->product_name,
            'category_id' => $formdata->category_id,
            'price' => $formdata->price,
            'description' => $formdata->description,
            'Ingredients' => $formdata->Ingredients,
            'thumbnail' => $imageDbPath
        ]);

        if ($addproduct){
            return $addproduct;
        }
    }


    public function update_product($formdata){
        $id=$formdata->id;

        $update=Product::where('id', $id)->update([
            'product_name' => $formdata['product_name'],
            'category_id' => $formdata['category_id'],
            'price' => $formdata['price'],
            'description' => $formdata['description'],
            'Ingredients' => $formdata['Ingredients'],
            'image'=>$formdata['image'],
        ]);
        if ($update){
            return $update;
        }
    }

    public function order()
    {
        return $this->belongsToMany(Order::class,'oders_details','order_id','product_id')->withPivot('quantity','amount');
    }
}

