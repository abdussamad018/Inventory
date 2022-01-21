<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
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
            @include('commonFile.header')
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            @include('commonFile.sidebar')
        </aside>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Total Due</p>
                                    <h4 class="my-1">{{$due}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-bell-slash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Total Asset</p>
                                    <h4 class="my-1">{{$totalAsset}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Today Sales</p>
                                    <h4 class="my-1">{{$todayseles}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Total Customer</p>
                                    <h4 class="my-1">{{$customer}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-person-square"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Total Supplier</p>
                                    <h4 class="my-1">{{$supplier}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-person-check-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Total User</p>
                                    <h4 class="my-1">{{$user}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Today Purchase</p>
                                    <h4 class="my-1">{{$todaypurchase}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-person-plus-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                 <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <p class="mb-0 text-secondary">Today Expence</p>
                                    <h4 class="my-1">{{$expense}}</h4>

                                </div>
                                <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-cash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-6">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Low Stock Summary</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="example2">
                                        <thead>
                                        <tr>
                                            <td>S.l</td>
                                            <td>Product Name</td>
                                            <td>Remaing Stock</td>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($lowstock as $key=>$Low)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$Low->Product_name}}</td>
                                            <td>{{$Low->Quantity}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>


                                </div>
                                <div class="modal-footer">

                                </div>

                            </div>
                            </div>

                        </div>


                <div class="col-md-6">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Expire Stock Summary</h5>

                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example">
                                <thead>
                                <tr>
                                    <td>S.l</td>
                                    <td>Product Name</td>
                                    <td>Expire Date</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expire as $key=>$Expire)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$Expire->Product_name}}</td>
                                        <td>{{$Expire->Expire_date}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                        </div>
                        <div class="modal-footer">

                        </div>

                    </div>
                    </div>
                </div>
            </div>



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
    <script src="assets/js/table-datatable.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")

    </script>

</body>

</html>
