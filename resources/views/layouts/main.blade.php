<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aulia Motors</title>


    <!-- Bootstrap -->
 
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/bootstrap/css/sidebars.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   

    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/home.css">

    {{-- data Tables --}}
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/DataTables/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/DataTables/Buttons/buttons.dataTables.css">

    {{-- Sweetalert --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css">
  <style>
        .background-image {
            background-image: url("{{ 'assets/images/bg-pelayanan.png' }}");
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0 m-0 ">
        <div class="col-lg-12 col-md-13 col-sm-12 p-0 m-0">
            @include('partials.navbar')
        </div>
        <div class="col-lg-12 col-md-13 col-sm-12 p-0 m-0">
            @yield('content')
        </div>
        <div class="col-lg-12 col-md-13 col-sm-12 p-0 m-0">
            @include('partials.footer')
        </div>

    </div>

</body>
<!-- Bootstrap Js -->
<script src="{{ asset('/') }}assets/dist/bootstrap/js/bootstrap.min.js"></script>

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- dataTables --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="{{ asset('/') }}assets/dist/DataTables/datatables.js"></script>
<script src="{{ asset('/') }}assets/dist/DataTables/DataTables/js/dataTables.bootstrap5.js"></script>
{{-- btn dataTbles --}}
<script src="{{ asset('/') }}assets/dist/DataTables/Buttons/js/buttons.bootstrap5.js"></script>



{{-- Data Tables Code --}}
{{-- <script>
    $('#example').DataTable({
        // dom: 'Bfrtip',
        // buttons: [
        //     {
        //         'text' : 'Red',
        //     },
        //     'print', 'excel', 'pdf'
        // ],
        'paginate': true,
        'search': true,
        'scrollCollapse': true,
        'scroller': true,
        'scrollY': 410

    });
</script> --}}

{{-- Sweet Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>



{{-- <script>
    // Tampilkan SweetAlert jika ada notifikasi session 'success'
    @if (session()->has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    @endif

    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Periksa kembali inputan anda',
        });
    @endif

    // confirm hapus
    function confirm(event) {
        event.preventDefault(); // Mencegah form di-submit secara langsung

        Swal.fire({
            title: 'Yakin Hapus?',
            text: 'Anda tidak dapat mengembalikan ini!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengklik "Ya", maka lanjutkan dengan mengirim form
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script> --}}

</html>
