<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seles extends Model
{
    //use HasFactory;
    protected $table="sales";
    public $timestamps=false;
    public $fillable=[
        'Customer_name',
        'Sales_date',
        'Creation_date',
        'Sales_type',
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
