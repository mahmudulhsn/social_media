<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REPOSITORY ADMIN DASHBOARD</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/sststyle.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- main-2 style -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/sststyle.css')}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/dataTables.bootstrap4.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/select2-bootstrap4.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/bootstrap-duallistbox.min.css')}}">

</head>

<body class="hold-transition sidebar-mini">
    
        @include('backend.inc.header')

        @include('backend.inc.sidebar')

        @yield('content')

 




    <!-- SCRIPTS -->
     
    <script src="{{asset('public/backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/sstadmin.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/dataTables.bootstrap4.js')}}"></script>
     <script src="{{asset('public/backend/assets/js/select2.full.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/jquery.bootstrap-duallistbox.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/demo.js')}}"></script>  
    
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
      

<script>
        $(function() {
            $('.select2').select2()

            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        });
    </script>

    <script type="text/javascript">
        $('.addRow').on('click', function() {
            addRow();
        });

        function addRow() {
            var tr = '<tr style="width: 130px;">' +
                '<td ><input type="" class="form-control" name=""style="width: 100%;"></td>' +
                '<td ><input type="" class="form-control" name=""style="width: 130px;"></td>' +
                '<td ><input type="" class="form-control" name=""style="width: 100%;"></td>' +
                '<td ><input type="" class="form-control" name=""style="width: 130px;"></td>' +
                '<td><select class="form-control" style="width: 150px;"><option>new Product</option></select></td>' +
                '<td ><input type="" class="form-control" name=""style="width:130px;;"></td>' +
                '<td style="width: 130px;"><a href="#" class="btn btn-danger remove btn-xs"><i class="fa fa-cut"></i></a></td>' +
                '</tr>';
            $('tbody').append(tr);
        };
        $('tbody').on('click', '.remove', function() {
            $(this).parent().parent().remove();
        });
        $(document).on("change keyup blur", ".price", function() {
            var value1 = parseFloat($('#price').val()) || 0;
            var sum = 0;
            $(".price").each(function() {
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum = sum + parseFloat(this.value);
                }

                $("#total").val(sum);
            });
        });
    </script>

    <script>
        $('button#retailer_trigger').on('click', function(e) {
            e.preventDefault();
            $('#customer_info').toggle();
            $('#retailer_info').toggle();
            if ($("input[name='customer_id']").prop('disabled') == true) {
                $("input[name='customer_id']").prop("disabled", false);
            } else {
                $("input[name='customer_id']").prop("disabled", true);
            }
            if ($("input[name='retailer_name']").prop('disabled') == true) {
                $("input[name='retailer_name']").prop("disabled", false);
            } else {
                $("input[name='retailer_name']").prop("disabled", true);
            }
            if ($("input[name='retailer_phone']").prop('disabled') == true) {
                $("input[name='retailer_phone']").prop("disabled", false);
            } else {
                $("input[name='retailer_phone']").prop("disabled", true);
            }
            if ($("textarea[name='retailer_address']").prop('disabled') == true) {
                $("textarea[name='retailer_address']").prop("disabled", false);
            } else {
                $("textarea[name='retailer_address']").prop("disabled", true);
            }
            if ($("textarea[name='retailer_comments']").prop('disabled') == true) {
                $("textarea[name='retailer_comments']").prop("disabled", false);
            } else {
                $("textarea[name='retailer_comments']").prop("disabled", true);
            }
        })
    </script>

     
   
</body>
</body>

</html>