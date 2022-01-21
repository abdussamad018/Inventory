<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    //
    public function addsupplier(){
        return view('addsupplier');
    }
        public function addsuppliers(Request $request){
        //dd($request->all());
        $phone=$request->Supplier_phone;
        $email=$request->Supplier_email;
        $num=Supplier::where('Supplier_phone','=',$phone)->where('Supplier_email','=',$email)->count();
        if($num==1){
            return "<script>alert('Already exit'); window.location='manageSupplier'</script>"; 
        }else{
           $data=$request->all();
        Supplier::create($data);
        return redirect()->route('managecustomer'); 
        }
        
        
        
    }
    public function manageSupplier(){
        $Supplier=Supplier::all();
        return view('manageSupplier',compact('Supplier'));
    }
}
