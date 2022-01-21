<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseLitem extends Model
{
    //use HasFactory;
    protected $table="expenseItem";
    public $timestamps=false;
    public $fillable=[
        'Item_name',
    ];
}
