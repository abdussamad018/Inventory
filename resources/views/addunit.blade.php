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
    <style>

        thead,tbody{
            text-align: center;
        }
        thead{
            color: blue;
            background-color: gray;
            font-weight: bold;
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

        <form action="addunits" method="post">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:blue;">Add Unit</h5>

                </div>
                <div class="modal-body">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Enter Unit Name" name="Unit_name">
                        </div>
                    </div>





                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save">

                </div>

            </div>
        </form>
        <hr>

        <div class="card card-preview">
            <div class="card-inner">
                <table class="table table-bordered" id="example">
                    <thead>
                    <tr>

                        <th>SL</th>
                        <th>Unit</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($Unit as $key=>$unit)

                        <tr>

                            <td>{{$key+1}}</td>
                            <td>{{$unit->Unit_name}}</td>

                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                                    <i class="far fa-trash-alt"></i></button>
                                <a href="{{$unit->Id}}" data-toggle="modal" data-target="#exampleModal"> <button type="button" class="btn btn-primary btn-sm" > <i class="fas fa-edit"></i></button></a>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>


        <!-- Modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" >
            <div class="modal-dialog" role="document">
                <form action="addc" method="post">
                    @csrf

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>

                        </div>
                        <div class="modal-body">

                            <input class="form-control" type="text" placeholder="Enter Category Name" name="catagori">



                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Save">

                        </div>

                    </div>
                </form>
            </div>
        </div>






        <!-- Modal -->
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
                    </div>
                    <div class="modal-body">
                        Are You Sure Delete Category?
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-danger btn-sm" >Delete</a>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

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
<!--app-->
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")

</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
