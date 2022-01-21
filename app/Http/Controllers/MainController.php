<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Customer;
use App\Models\Expense;
use App\Models\Purchase;
use App\Models\seles;
use App\Models\Supplier;
use App\Models\Users;
use Illuminate\Http\Request;


class MainController extends Controller
{
    //
    public function deasboard(){
        $today=date('Y-m-d');
        $customer=Customer::all()->count();
        $supplier=Supplier::all()->count();
        $user=Users::all()->count();
        $expense=Expense::select('Amount')->where('Expense_date','=',$today)->sum('Amount');
        $expire=Addproduct::all()->where('Expire_date','<=',$today);
        $due=seles:: select('Due')->sum('Due');
        $todayseles=seles::select('Amount')->where('Sales_date','=',$today)->sum('Amount');
        $totalAsset=Addproduct::select('Total')->sum('Total');
        $todaypurchase=Purchase::select('Amount')->where('Purchase_date','=',$today)->sum('Amount');
        $lowstock=Addproduct::all()->where('Quantity','<=',5);
        return view('deasboard',compact('customer','supplier','user','expense','expire','due','todayseles','todaypurchase','lowstock','totalAsset'));
    }


}
