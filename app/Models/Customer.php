<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //use HasFactory;
     protected $table="customer";
    public $timestamps=false;
    protected $fillable=[
    'Customer_name',
    'Customer_phone',
    'Customer_email',
    'Address',
    'Customer_type',
    ];
}
