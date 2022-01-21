<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Users extends Model
{
    //use HasFactory;
    protected $table="users";
    public $timestamps=false;
    protected $fillable=[
    'User_name',
    'FULL_name',
    'Email',
    'Phone',
    'Password',
    'Role',
    'Creation_date',
    'Status',
    ];
}
