<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //use HasFactory;
    protected $table="purchase";
    public $timestamps=false;
    public $fillable=[
        'Supplier',
        'Purchase_date',
        'Creation_date',
        'Medicine_name',
        'Quantity',
        'Price',
        'Unit_name',
        'Tax_percent',
        'Tax_amount',
        'Amount',
        'Amount_with_tax',
        'Sub_total',
        'Due',
        'Paid',
        'Grand_total',

    ];

}
