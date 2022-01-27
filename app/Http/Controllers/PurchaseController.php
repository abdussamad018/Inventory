<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase()
    {
        $supplier = Supplier::all();
        $medicine = Addproduct::all();
        $unit = Unit::all();
        $manageproduct = Addproduct::all();
        return view('Purchase', compact('supplier', 'medicine', 'unit', 'manageproduct'));
    }

    public function managepurchase()
    {
        return view('managepurchase');
    }

    public function showMedicineDetails(Request $request)
    {
        // $id=$request->post('id');
        $Medicine = $request->Medecine;
        $data = Addproduct::all()->where('Product_name', '=', $Medicine)->first();
        // $row['id']=$id;
        echo json_encode($data);

    }

    public function stockadd($id)
    {
        $id = Addproduct::find($id);
        return view('stockadd', compact('id'));

    }

    public function stockadds(Request $request)
    {
        $id=$request->id;

        $product = Addproduct::find($id);
       $data=[
           'Brand_name'=>$request->input('Brand_name'),
           'Category_name'=>$request->input('Category_name'),
           'Product_name'=>$request->input('Product_name'),
           'Purchase_price'=>$request->input('Purchase_price'),
           'Retails_price'=>$request->input('Retails_price'),
           'Whole_sale_price'=>$request->input('Whole_sale_price'),
           'Unit_name'=>$request->input('Unit_name'),
           'Quantity'=>$request->input('Quantity'),
           'Total'=>$request->input('Total'),
           'Supplier'=>$request->input('Supplier'),
           'Expire_date'=>$request->input('Expire_date'),
           'Picture'=>$request->input('Picture'),
       ];
     $product->updated($data);
//        $product->Brand_name = $request->Brand_name;
//        $product->Category_name = $request->Category_name;
//        $product->Product_name = $request->Product_name;
//        $product->Purchase_price = $request->Purchase_price;
//        $product->Retails_price = $request->Retails_price;
//        $product->Whole_sale_price = $request->Whole_sale_price;
//        $product->Unit_name = $request->Unit_name;
//        $product->Quantity = $request->Quantity;
//        $product->Total = $request->Total;
//        $product->Supplier = $request->Supplier;
//        $product->Expire_date = $request->Expire_date;
//        $product->Picture = $request->Picture;


    }

}
