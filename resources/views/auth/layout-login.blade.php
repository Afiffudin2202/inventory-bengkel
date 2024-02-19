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


</head>


<body>
    <div class="container-fluid p-0 m-0 h-100 bg-login bg-gradient">
        <div class="row p-0 m-0 h-100 ">
            <div class="col-lg-12 col-md-12 col-sm-12 p-3 m-0 d-flex align-items-center justify-content-center ">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<!-- Bootstrap Js -->
<script src="{{ asset('/') }}assets/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/dist/bootstrap/js/bootstrap.bundle.js"></script>
<script src="{{ asset('/') }}assets/dist/bootstrap/js/sidebars.js"></script>

</html>
