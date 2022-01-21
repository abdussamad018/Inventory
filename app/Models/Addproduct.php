<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    //use HasFactory;
    protected $table="product";
    public $timestamps=false;
    public $fillable=[
        'Brand_name',
        'Category_name',
        'Product_name',
        'Purchase_price',
        'Retails_price',
        'Whole_sale_price',
        'Unit_name',
        'Quantity',
        'Total',
        'Supplier',
        'Expire_date',
        'Picture',

    ];
}
