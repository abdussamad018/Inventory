<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use App\Models\Customer;
use App\Models\Unit;
use Illuminate\Http\Request;

class sellcontroller extends Controller
{
    //
    public function sell()
    { $medicine=Addproduct::all();
        $unit=Unit::all();
        return view('sell',compact('medicine','unit'));
    }

    public function store(Request $request)
    {

    }

    public function findCustomer(Request $request)
    {
        $phone = $request->customer;
        $row = Customer::all()->where('Customer_phone', '=', $phone)->first();

        if ($row) {
//           $table = "<table>";
//           $table .= "<tr>";
//           $table .= "<td>";
//           $table .= $row->Customer_name;
//           $table .= "</td>";
//           $table .= "</tr>";
//           $table .= "</table>";
//          echo $table;


            echo '<div class="col-md-4"><input class="form-control" type="text"  name="" id="" value="' . $row->Customer_name . '" readonly></div><div class="col-md-4"><input class="form-control" type="text" name="" id="" value="' . $row->Customer_phone . '" readonly></div><div class="col-md-4"><input class="form-control" type="text" name="" id="" value="' . $row->Customer_email . '" readonly></div>';
        } else {
            echo "<p style='text-align: center; color: #0c971a;'>New Customer, Please Add Customer List</P>";
        }

    }

    public function findMedicine(Request $request)
    {
//        $suggestion = $request['term'];
//      //dd($suggestion);

        $suggestion = $request->input('term');


        $data = Addproduct::where('Product_name', 'LIKE', $suggestion . "%")->get();
        //$data=Addproduct::get();

        foreach ($data as $row) {
            $data[] = array(
                'label' => $row->Product_name,
                'value' => $row->Product_name
            );
        }
        echo json_encode($data);
        flush();


        /* $xyz=Addproduct::all('Product_name')->where('Product_name', '=', $suggestion);
         echo $xyz;*/


    }

}
