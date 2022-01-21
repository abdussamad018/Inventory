<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function LowStock(){
        $lowstock=Addproduct::all()->where('Quantity','<=',5);
        return view('Lowstock',compact('lowstock'));
}


}
