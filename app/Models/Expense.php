<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //use HasFactory;
    protected $table='expense';
    public  $timestamps=false;
    public $fillable=[
        'Expense_catagory',
        'Expense_description',
        'Expense_date',
        'Amount',

    ];
}
