<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulia Motors</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/bootstrap/css/sidebars.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/bootstrap/css/style.css">

    {{-- data Tables --}}
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/DataTables/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/DataTables/Buttons/buttons.dataTables.css">


</head>

<body>
    <div class="container-fluid p-0 m-0 ">
        <div class="row p-0 m-0 ">
            <div class="col-lg-2 col-md-3 p-0 m-0 aside">
                @include('aside.aside')
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12 p-3 m-0">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<!-- Bootstrap Js -->
<script src="{{ asset('/') }}assets/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/dist/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/dist/bootstrap/js/sidebars.js"></script>

{{-- dataTables --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="{{ asset('/') }}assets/dist/DataTables/datatables.js"></script>
<script src="{{ asset('/') }}assets/dist/DataTables/DataTables/js/dataTables.bootstrap5.js"></script>
{{-- btn dataTbles --}}
<script src="{{ asset('/') }}assets/dist/DataTables/Buttons/js/buttons.bootstrap5.js"></script>




<script>
   $('#example').DataTable( {
    // dom: 'Bfrtip',
    // buttons: [
    //     {
    //         'text' : 'Red',
    //     },
    //     'print', 'excel', 'pdf'
    // ],
    // 'paginate' : true,
    // 'search' : true,
    'scrollCollapse': true,
    'scroller': true,
    'scrollY': 410
    
} );

</script>

</html>