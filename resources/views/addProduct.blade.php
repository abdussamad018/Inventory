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
    <link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
    <link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
    <link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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

    <form action="addproducts" method="post" enctype="multipart/form-data">
        @csrf
  <div class="modal-content">
   <div class="modal-header">
     <h4>Add product </h4>
   </div>
  <div class="modal-body">

    <div class="row">
        <div class="col-md-4">
            <select class="form-select" name="Brand_name" id="Brand_name" onchange="brandWithcatagory()">
                <option>select Brand</option>
                @foreach($catagorys as $Catagorys)
                    <option value="{{$Catagorys->Brand_name}}">{{$Catagorys->Brand_name}} </option>
                @endforeach
            </select>

        </div>
        <div class="col-md-4">
            <select class="form-select" name="Category_name">
                <option>select category </option>
                @foreach($catagorys as $Catagorys)
                    <option value="{{$Catagorys->Category}}">{{$Catagorys->Category}} </option>
                @endforeach
            </select>
        </div>
         <div class="col-md-4">
             <input class="form-control" name="Product_name" type="text" placeholder="Enter product name" />
         </div>

    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <select class="form-select" name="Unit_name">
                <option>select Unit </option>
                @foreach($Unit as $unit)
                    <option value="{{$unit->Unit_name}}">{{$unit->Unit_name}} </option>
                @endforeach
            </select>

          </div>
        <div class="col-md-4">
            <select class="form-select" name="Supplier">
                <option>select supplier </option>
                @foreach($supplier as $Supplier)
                    <option value="{{$Supplier->Supplier_name}}">{{$Supplier->Supplier_name}} </option>
                @endforeach
            </select>

        </div>

          <div class="col-md-4">
              <input class="form-control" name="Purchase_price" type="text" placeholder="Enter Purchase price" id="pur" onkeyup="total()" />

          </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <input class="form-control" type="text" name="Retails_price" placeholder="Enter Retails price" />

         </div>
        <div class="col-md-4">
            <input class="form-control" name="Whole_sale_price" type="text" placeholder="Enter Whole sale price"/>

        </div>
         <div class="col-md-4">
             <input class="form-control" type="text" name="Quantity" placeholder="Enter Product Quantity" id="qnt" onkeyup="total()" />
{{--          <input class="form-control" type="date" name="Expire_date" placeholder="Select expire date"/>--}}
         </div>

    </div>
      <div class="row mt-3">
          <div class="col-md-4">
              <input class="result form-control" type="text" name="Total" id="res" onkeyup="total()"  readonly>

          </div>
          <div class="col-md-4">
              <input class="result form-control" type="text" id="date" name="Expire_date" placeholder="Select expire date">
          </div>
          <div class="col-md-4">
              <input class="form-control" type="file" name="Picture" placeholder="Select Product Picture" />
          </div>

      </div>


  </div>
  <div class="modal-footer">
    <input class="btn btn-primary" type="submit" value="Add product"/>
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
    <script src="assets/plugins/datetimepicker/js/legacy.js"></script>
    <script src="assets/plugins/datetimepicker/js/picker.js"></script>
    <script src="assets/plugins/datetimepicker/js/picker.time.js"></script>
    <script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
    <script src="assets/js/form-date-time-pickes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <!--app-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/index.js"></script>

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
            var pur=$('#pur').val();
            var qnt=$('#qnt').val();
            var res=pur*qnt;
            $('#res').val(res);
        }

    </script>

</body>

</html>
