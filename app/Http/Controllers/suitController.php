<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Addcategory;
use App\Models\Brand;

class suitController extends Controller
{
   public function addProduct(){
       $catagorys=Addcategory::all();
       $supplier=Supplier::all();
       $Unit=Unit::all();
        return view('addProduct',compact('catagorys','supplier','Unit'));
    }
    public function manageProduct(){
       $manageproduct=Addproduct::all();
        return view('manageproduct',compact('manageproduct'));
    }

    public function addcata(){
        $catagory=Addcategory::all();
        $brand=Brand::all();

        return view('addCategori',compact('catagory','brand'));
    }

    public function addcategoridb(Request $request){


       $inputs=[
           'Category'=>$request->input('catagori'),
           'Brand_name'=>$request->input('Brand_name'),
       ];
        Addcategory::create($inputs);

        return redirect()->back();

    }

    public function delete($id){
        $catagory=Addcategory::find($id);
        $catagory->delete();
        return redirect()->back();
    }

    public function edit($id){
        $catagory=Addcategory::find($id);
        return view('addcategoryUpdate',compact('catagory'));
    }

    public function update($id){
        $catagory=Addcategory::find($id);
        $catagory->update();
        return redirect()->back();
    }

    public function addbrand()
    {
        $brand=Brand::all();
        return view('addbrand',compact('brand'));
    }
    public function addbrands(Request $request)
    {
        $brand=$request->Brand_name;

        $num=Brand::where('Brand_name','=',$brand)->count();
        if($num==1){
            return "<script>alert('Already exit'); window.location='addbrand'</script>";
        }else{
            $date=$request->all();
            Brand::create($date);
            return redirect()->route('addbrand');
        }


    }

    public function addunit()
    {
        $Unit=Unit::all();
        return view('addunit',compact('Unit'));
    }
    public function addunits(Request $request)
    {
        $unit=$request->Unit_name;

        $num=Unit::where('Unit_name','=',$unit)->count();
        if($num==1){
            return "<script>alert('Already exit'); window.location='addunit'</script>";
        }else{
            $date=$request->all();
            Unit::create($date);
            return redirect()->route('addunit');
        }


    }

    public function addproducts(Request $request)
    {
        $product=$request->Product_name;

        $num=Addproduct::where('Product_name','=',$product)->count();
        if($num==1){
            return "<script>alert('Already exit'); window.location='addproduct'</script>";
        }else{
            $date=$request->all();
           Addproduct::create($date);
            return redirect()->route('manageProduct');
        }
    }

}
