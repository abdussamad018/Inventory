<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseLitem;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    //
    public function Expense()
    {
        $expense=ExpenseLitem::all();
        return view('Expense',compact('expense'));

    }
    public function Expenses(Request $request)
    {
        $data=$request->all();
        Expense::create($data);
        return redirect()->back();

    }

    public function expenseItem()
    {
        $expnitem=ExpenseLitem::all();
        return view('addExpenseitem',compact('expnitem'));
    }
    public function expenseItems(Request $request)
    {
        $Item=$request->Item_name;
      $num= ExpenseLitem::where('Item_name','=',$Item)->count();
      if ($num==1){

      }else{
          $data=$request->all();
          ExpenseLitem::create($data);
          return redirect()->back();
      }
    }

}
