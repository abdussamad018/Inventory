<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //use HasFactory;
    
    protected $table="company";
    public $timestamps=false;
    protected $fillable=[
    'Company_name',
    'Sort_name',
    'Email',
    'Phone',
    'Address',
    'City',
    'State',
    ];
}
}
