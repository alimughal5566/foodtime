<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'total_ammount', 'payment_status',
    ];
    public function product()
    {
        return $this->belongsToMany(Product::class,'oders_details','order_id','product_id')->withPivot('quantity','amount');
    }
}
