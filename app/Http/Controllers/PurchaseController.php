<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(){
        $supplier=Supplier::all();
        $medicine=Addproduct::all();
        $unit=Unit::all();
        return view('Purchase',compact('supplier','medicine','unit'));
    }

    public function managepurchase(){
        return view ('managepurchase');
    }
    public function showMedicineDetails(Request $request)
    {
       // $id=$request->post('id');
        $Medicine = $request->Medecine;
        $data= Addproduct::all()->where('Product_name', '=', $Medicine)->first();
       // $row['id']=$id;
        echo json_encode($data);

    }

}
