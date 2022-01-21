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
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            font-size: 1em;
        }

        .ui-draggable, .ui-droppable {
            background-position: top;
        }
    </style>
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

        <form action="" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Sell </h4>
                </div>
                <div class="modal-body">


                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="customer" id="customer"
                                   placeholder="Customer Phone Number" onkeyup="findcustomers()">
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-primary" href="addcustomer">New Customer</a>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="" id="" value="{{date('Y-m-d')}}">
                        </div>
                    </div>
                    <div class="row mt-3" id="show">

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-borderd">
                                <thead>
                                <tr>
                                    <th>Item Information</th>
                                    <th>Stock/Qnt</th>
                                    <th>Add Qnt</th>
                                    <th>Unit Price</th>
                                    <th>Price</th>
                                    <th>Unit</th>
                                    <th>Tax Parcent</th>
                                    <th>Tax Amt</th>
                                    <th>Amoun</th>
                                    <th>Amoun with Tax</th>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <td>
                                        <select class="form-select" name="" id="Medecine"
                                                onchange="showMedicineDetails()">
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
                                        <input class="form-control" type="text" name="" id="" placeholder="">
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
                                    <td><input class="form-control" type="text" name="" id="" placeholder=""></td>
                                    <td><input class="form-control" type="text" name="" id="" placeholder=""></td>

                                    <td>
                                        <input class="form-control" type="text" name="" id="" placeholder="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="" id="" placeholder="" readonly>
                                    </td>

                                </tr>

                                <tr>
                                    <td colspan="9" style="text-align:right; font-weight:bold;">Sub Total:</td>
                                    <td><input class="form-control" type="text" name="" id="" placeholder="" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" style="text-align:right; font-weight:bold;">Paid:</td>
                                    <td><input class="form-control" type="text" name="" id="" placeholder="" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" style="text-align:right; font-weight:bold;">Due:</td>
                                    <td><input class="form-control" type="text" name="" id="" placeholder="" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" style="text-align:right; font-weight:bold;">Grand Total:</td>
                                    <td><input class="form-control" type="text" name="" id="" placeholder="" readonly>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--                        End sell table-->

                    <div class="row">
                        <div class="col-md-12">
                            <input class="btn btn-primary bx-pull-right" type="submit" name="" id="" value="Submit">
                            <button class="btn btn-primary" type="button" onclick="addmore()">+</button>
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
<!--app-->
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")

</script>
<script type="text/javascript">
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>

</script>
<script>
    var count = 1;

    function findcustomers() {
        var customer = $('#customer').val();
        $.ajax({
            url: '{{route('customars')}}',
            method: 'GET',
            dataType: 'html',
            data: {customer: customer},
            success: function (data) {

                $("#show").html(data);
            }
        })
    }

    function addmore() {
        count++
        for (var i=1; i>count;i++){
            document.write("<p>Hi</p>");
        }
    }


</script>
<script>
    $(document).ready(function () {
        $('#Medecine').autocomplete({
            source: '{{route('medicine')}}',
            minLength: 1,
            delay: 500
        })
    })


</script>

</body>

</html>
