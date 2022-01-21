<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //use HasFactory;
    protected $table="supplier";
    public $timestamps=false;
    protected $fillable=[
    'Supplier_name',
    'Supplier_phone',
    'Supplier_email',
    'Address',
    'Supplier_type',
    ];
}
