<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/light-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

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

        <form action="expenses" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="color:green;">Add Expense </h4>
                </div>
                <div class="modal-body">
                    <a href="managecustomer" type="button" class="btn btn-info btn-sm mb-2" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-users"></i></a>
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-select" name="Expense_catagory" id="">
                                <option value="">Select Expense Category</option>
                                @foreach($expense as $ExpItm)
                                    <option value="{{$ExpItm->Item_name}}">{{$ExpItm->Item_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" name="Expense_description" type="text" placeholder="Expense Description" />
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" name="Expense_date" type="date" />
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" name="Amount" type="text" placeholder="Enter Amount" />
                        </div>

                    </div>




                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Add Expense"/>
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
<!--app-->
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")

</script>

</body>

</html>