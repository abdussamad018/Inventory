<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet"/>
    <link href="assets/css/light-theme.css" rel="stylesheet"/>
    <link href="assets/css/semi-dark.css" rel="stylesheet"/>
    <link href="assets/css/header-colors.css" rel="stylesheet"/>

    <title>INVENTORY & STOCK MANAGEMENT</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        @include('commonFile.header');
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        @include('commonFile.sidebar');
    </aside>
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Purchase </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <select name="Supplier" id="" class="form-select">
                                <option value="">Select Supplier</option>
                                @foreach($supplier as $Supplier)
                                    <option value="{{$Supplier->Supplier_name}}">{{$Supplier->Supplier_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="date" name="Purchase_date" id=""
                                   value="{{date('Y-m-d')}}">
                            <input class="form-control" type="hidden" name="Creation_date" id=""
                                   value="{{date('Y-m-d')}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input class="form-control" type="date" name="" id="" placeholder="Purchase No">
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" name="" id="" cols="25" rows="0"
                                      placeholder="Details"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-borderd">
                                <thead>
                                <tr>
                                    <th>Product Info</th>
                                    <th>Stock</th>
                                    <th>Add Qnt</th>
                                    <th>Unit Price</th>
                                    <th>Price</th>
                                    <th>Unit</th>
                                    <th>Tax Parcent</th>
                                    <th>Tax Amt</th>
                                    <th>Amount</th>
                                    <th>Amt with Tax</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody class="result">


                                <tr class="buy">

                                    <td>
                                        <select class="form-select" id="Medecine" name="Medecines" onchange="showMedicineDetails()">
                                            <option value="">Select Medicine</option>
                                            @foreach($medicine as $Medicine)
                                                <option
                                                    value="{{$Medicine->Product_name}}">{{$Medicine->Product_name}}</option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="" id="Quantity" placeholder=""
                                               readonly>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="" id="addqnt" placeholder=""
                                               onkeyup="showMedicineDetails()">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="" id="unitPrice" placeholder=""
                                               readonly>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="" id="Price" placeholder=""
                                               readonly>
                                    </td>
                                    <td>
                                        <select class="form-select" name="" id="">
                                            <option value="">Select Unit</option>
                                            @foreach($unit as $Unit)
                                                <option value="{{$Unit->Unit_name}}">{{$Unit->Unit_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input class="form-control" type="text" name="" id="tax" placeholder=""
                                               onkeyup="showMedicineDetails()"></td>
                                    <td><input class="form-control" type="text" name="" id="Taxamount" placeholder=""
                                               readonly onkeyup="showMedicineDetails()"></td>

                                    <td>
                                        <input class="form-control" type="text" name="" id="amt" placeholder=""
                                               readonly>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="" id="wamt" placeholder=""
                                               readonly>
                                    </td>

                                </tr>


                                                                <p id="result"></p>

                                 <tr class="result">

                                 </tr>


                                </tbody>
                                <tfooter>
                                    <tr>
                                        <td colspan="9" style="text-align:right; font-weight:bold;">Sub Total:</td>
                                        <td><input class="form-control" type="text" name="" id="" placeholder=""
                                                   readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="9" style="text-align:right; font-weight:bold;">Paid:</td>
                                        <td><input class="form-control" type="text" name="" id="" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="9" style="text-align:right; font-weight:bold;">Due:</td>
                                        <td><input class="form-control" type="text" name="" id="" placeholder=""
                                                   readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="9" style="text-align:right; font-weight:bold;">Grand Total:</td>
                                        <td><input class="form-control" type="text" name="" id="" placeholder=""
                                                   readonly>
                                        </td>
                                    </tr>
                                </tfooter>
                            </table>

{{--                            <table class="table table-bordered table-hover" id="purchaseTable">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th class="text-center">Item Information<i class="text-danger">*</i></th>--}}
{{--                                    <th class="text-center">Stock/Qnt</th>--}}
{{--                                    <th class="text-center">Carton <i class="text-danger">*</i></th>--}}
{{--                                    <th class="text-center">Item/Cartoon </th>--}}
{{--                                    <th class="text-center">Quantity </th>--}}
{{--                                    <th class="text-center">Rate<i class="text-danger">*</i></th>--}}
{{--                                    <th class="text-center">Total</th>--}}
{{--                                    <th class="text-center">Action</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody id="addPurchaseItem">--}}
{{--                                <tr>--}}
{{--                                    <td class="span3 supplier_load">--}}
{{--                                        <select name="product_id[]" class="productSelection form-control" id="product_id" onchange="invoice_productList(1)">--}}

{{--                                        </select>--}}

{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <input type="text" id="" class="form-control text-right stock_ctn_1" placeholder="Stock/Qnt" readonly="">--}}
{{--                                    </td>--}}

{{--                                    <td class="text-right">--}}
{{--                                        <input type="number" name="cartoon[]" required="" id="qty_item_1" class="form-control text-right qty_calculate" placeholder="0.00" value="" min="0" tabindex="6">--}}
{{--                                    </td>--}}

{{--                                    <td class="text-right">--}}
{{--                                        <input type="text" name="cartoon_item[]" value="" readonly="readonly" id="ctnqntt_1" class="form-control ctnqntt1 text-right" placeholder="Item/Cartoon">--}}
{{--                                    </td>--}}

{{--                                    <td class="text-right">--}}
{{--                                        <input type="text" name="product_quantity[]" readonly="readonly" id="total_qntt_1" class="form-control text-right" placeholder="0.00">--}}
{{--                                    </td>--}}
{{--                                    <td class="">--}}
{{--                                        <input type="text" name="product_rate[]" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" id="price_item_1" class="form-control price_item1 text-right" placeholder="0.00" value="" min="0" tabindex="7">--}}
{{--                                    </td>--}}
{{--                                    <td class="text-right">--}}
{{--                                        <input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" tabindex="-1" readonly="readonly">--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <button style="text-align: right;" class="btn btn-danger red" type="button" value="5" onclick="deleteRow(this)" tabindex="8">Delete</button>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                                <tfoot>--}}
{{--                                <tr>--}}
{{--                                    <td colspan="2">--}}
{{--                                        <input type="button" id="add-invoice-item" class="btn btn-info" name="add-invoice-item" onclick="addPurchaseInputField('addPurchaseItem');" value="Add New Item" tabindex="9">--}}

{{--                                        <input type="hidden" name="baseUrl" class="baseUrl" value="https://wholesalenew.bdtask.com/newholesale/">--}}
{{--                                    </td>--}}
{{--                                    <td style="text-align:right;" colspan="4"><b>Grand Total:</b></td>--}}
{{--                                    <td class="text-right">--}}
{{--                                        <input type="text" id="grandTotal" tabindex="-1" class="text-right form-control" name="grand_total_price" value="0.00" readonly="readonly">--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tfoot>--}}
{{--                            </table>--}}
                        </div>
                    </div>
                    <!--                        End sell table-->

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger bx-pull-left" id="btn1"> Add More</button>
                            <input class="btn btn-primary" type="submit" name="" id="" value="Submit">
                        </div>
                        <div class="col-md-6">

                        </div>

                    </div>

                </div>
            </div>
        </form>


    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/easyPieChart/jquery.easypiechart.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/js/pace.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
{{--<script src="assets/js/purchase.js"></script>--}}
<!--app-->
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")

</script>
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('#Medecine').autocomplete({--}}
{{--            source: '{{route('medicine')}}',--}}
{{--            minLength: 1,--}}
{{--            delay: 500--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}
<script>
    function showMedicineDetails() {
        var Medecine = $('#Medecine').val();
        $.ajax({
            url: '{{route('showMedicineDetails')}}',
            method: 'GET',
            dataType: 'html',
            data: {Medecine: Medecine},
            success: function (data) {
                 var Medecine = $('#Medecine').val();
                if (!Medecine == "") {
                    var dat = $.parseJSON(data);
                    var product = dat.Quantity;
                    $('#Quantity').val(product);
                    var price = dat.Purchase_price;
                    $('#unitPrice').val(price)
                    var ProductPrice = price * product;
                    $('#Price').val(ProductPrice);
                    var Tax = $('#tax').val()
                    var addqnt = $('#addqnt').val()
                    var Taxamt = (addqnt * price * Tax) / 100;
                    $('#Taxamount').val(Taxamt);
                    var amt = (addqnt * price + Taxamt);
                    $('#amt').val(amt)
                    var wamt = (addqnt * price);
                    $('#wamt').val(wamt)

                } else {
                    $('#Quantity').val("");
                    $('#unitPrice').val("")
                    $('#Price').val("");
                    $('#Taxamount').val("");
                    $('#addqnt').val("");
                    $('#tax').val("");
                }


            }
        })


    }
</script>
<script>
    $(document).ready(function () {
        //var div=document.getElementById('.buy').innerHTML;
        var div = '<tr><td><select class="form-select" id="Medecine" name="Medecine" onchange="showMedicineDetails()"><option value="">Select Medicine</option>@foreach($medicine as $Medicine)<option value="{{$Medicine->Product_name}}">{{$Medicine->Product_name}}</option>@endforeach</select></td> <td> <input class="form-control" type="text" name="" id="Quantity1" placeholder="" readonly> </td> <td> <input class="form-control" type="text" name="" id="addqnt" placeholder="" onkeyup="showMedicineDetails()"> </td> <td> <input class="form-control" type="text" name="" id="unitPrice1" placeholder="" readonly> </td> <td> <input class="form-control" type="text" name="" id="Price1" placeholder="" readonly></td> <td> <select class="form-select" name="" id=""> <option value="">Select Unit</option>@foreach($unit as $Unit)<option value="{{$Unit->Unit_name}}">{{$Unit->Unit_name}}</option>@endforeach</select> </td> <td> <input class="form-control" type="text" name="" id="tax" placeholder="" onkeyup="showMedicineDetails()"></td> <td> <input class="form-control" type="text" name="" id="Taxamount" placeholder="" readonly onkeyup="showMedicineDetails()"></td> <td> <input class="form-control" type="text" name="" id="amt" placeholder="" readonly> </td> <td> <input class="form-control" type="text" name="" id="wamt" placeholder="" readonly></td><td><button id="myremove" class=" btn btn-primary btn-sm" type="button">-</button></td></tr>'

        $("#btn1").click(function () {
            $(".result").append(div);
        });

        $("#myremove").click(function () {
            //$(".xyz").remove();
            // $(this).val();

        })

    });
</script>

</body>

</html>
