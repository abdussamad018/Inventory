<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    //
    public function addcustomer(){
        return view('addcustomer');
    }
     public function managecustomer(){
         $Customer=Customer::all();
        return view('managecustomer',compact('Customer'));
    }
     public function creditcustomer(){
        return view('creditcustomer');
    }
     public function paidcustomer(){
        return view('paidcustomer');
    }
    
    public function addcustomers(Request $request){
        //dd($request->all());
        $phone=$request->Customer_phone;
        $email=$request->Customer_email;
        $num=Customer::where('Customer_phone','=',$phone)->where('Customer_email','=',$email)->count();
        if($num==1){
            return "<script>alert('Already exit'); window.location='managecustomer'</script>"; 
        }else{
           $data=$request->all();
        Customer::create($data);
        return redirect()->route('managecustomer'); 
        }
        
        
        
    }
}
