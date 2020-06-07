<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

   public function savecategory($formdata){

            $addcategory = Categories::create([
                'name' => $formdata->name,
            ]);
            if ($addcategory){
                return $addcategory;
            }
        }



    public function updatacategory($formdata)
    {
        $category_id=$formdata->id;
        $category= Categories::where('id', $category_id)->update([

            'name' => $formdata['name'],
        ]);

    if ($category){
        return $category;
    }
    }


   }






