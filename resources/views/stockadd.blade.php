<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/header-colors.css')}}" rel="stylesheet" />

    <title>HR PAYROLL SOFTWARE</title>
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

        <form action="{{route('stockadds',$id->Id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Stock </h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-select" name="Brand_name" id="Brand_name" onchange="brandWithcatagory()">

                                    <option value="{{$id->Brand_name}}">{{$id->Brand_name}} </option>

                            </select>

                        </div>
                        <div class="col-md-4">
                            <select class="form-select" name="Category_name">

                                    <option value="{{$id->Category_name}}">{{$id->Category_name}} </option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" name="Product_name" type="text" readonly placeholder="Enter product name" value="{{$id->Product_name}}" />
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <select class="form-select" name="Unit_name" readonly="">
                                    <option value="{{$id->Unit_name}}">{{$id->Unit_name}} </option>

                            </select>

                        </div>
                        <div class="col-md-4">
                            <select class="form-select" name="Supplier" readonly="">


                                    <option value="{{$id->Supplier}}">{{$id->Supplier}} </option>

                            </select>

                        </div>

                        <div class="col-md-4">
                            <input class="form-control" name="Purchase_price" readonly value="{{$id->Purchase_price}}" type="text" placeholder="Enter Purchase price" id="pur" onkeyup="total()" />

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input class="form-control" type="text" name="Retails_price" readonly value="{{$id->Retails_price}}" placeholder="Enter Retails price" />

                        </div>
                        <div class="col-md-4">
                            <input class="form-control" name="Whole_sale_price" type="text" placeholder="Enter Whole sale price" readonly value="{{$id->Whole_sale_price}}"/>

                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" readonly value="{{$id->Quantity}}" name="" placeholder="Enter Product Quantity" id="qnt" onkeyup="total()" />
                            <input class="form-control" type="hidden" readonly id="newtotal" name="Quantity" placeholder="Enter Product Quantity" id="qnt" onkeyup="total()" />
                            {{--          <input class="form-control" type="date" name="Expire_date" placeholder="Select expire date"/>--}}
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <input class="result form-control" type="text"  id="newqnt" onkeyup="total()" placeholder="Add New Quantity">

                        </div>
                        <div class="col-md-4">
                            <input class="result form-control" type="text" name="Total" id="res" onkeyup="total()"  readonly>
                        </div>
                        <div class="col-md-4">

                            <input class="result form-control" type="text" id="date" name="Expire_date" placeholder="Select expire date">
                            <input type="hidden" name="Picture" id="">
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Add Stock"/>
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
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/pace.min.js')}}"></script>
<script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
<script src="{{asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
<script src="{{asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
<script src="{{asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
<script src="{{asset('}assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/form-date-time-pickes.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <!--app-->
    <script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('')}}assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")

</script>

<script>
    // function brandWithcatagory(){
    //     var Brand_name=('#Brand_name').val;
    //     $.ajax(
    //         {
    //             url:'addProducts',
    //             method:'POST',
    //             dataType:'html',
    //             data:{Brand_name:Brand_name},
    //             success:function (data){
    //
    //             }
    //         }
    //     )
    // }
    function total(){

        var qnt=parseFloat($('#qnt').val());
        var newqnt=parseFloat($('#newqnt').val());
        var total=qnt+newqnt;
        $('#newtotal').val(total);
        var pur=parseFloat($('#pur').val());
        var res=total*pur;
        $('#res').val(res);
    }

</script>

</body>

</html>

