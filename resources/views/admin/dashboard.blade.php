@extends('admin.layouts.main')
@section('content')
    <div class="content-container px-3">
        <div class="header">
            <h3>Dashboard</h3>
        </div>
        <hr>
        <div class="content-card my-3 ">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card-dashboard ">
                        <div class="row">
                            <div class="col-lg-3  d-flex align-items-center">
                                <div class="icon-dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-box" viewBox="0 0 16 16">
                                        <path
                                            d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-9 ">
                                <p>Barang </p>
                                <h3>204</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-dashboard ">
                        <div class="row">
                            <div class="col-lg-3  d-flex align-items-center">
                                <div class="icon-dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-person-down" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-9 ">
                                <p>Supplier</p>
                                <h3>204</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" >
                    <div class="card-dashboard ">
                        <div class="row">
                            <div class="col-lg-3  d-flex align-items-center">
                                <div class="icon-dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-9 ">
                                <p>Customers</p>
                                <h3>204</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-dashboard ">
                        <div class="row">
                            <div class="col-lg-3  d-flex align-items-center">
                                <div class="icon-dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-9 ">
                                <p>Customers</p>
                                <h3>204</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="content-card my-3">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistik Penjualan</h4>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum et nisi sed. Consequatur
                            dolor vel rerum hic eaque fugiat?
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistik Pembelian</h4>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum et nisi sed. Consequatur
                            dolor vel rerum hic eaque fugiat?
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistik Pelanggan</h4>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum et nisi sed. Consequatur
                            dolor vel rerum hic eaque fugiat?
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistik Pembelian</h4>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero rerum et nisi sed. Consequatur
                            dolor vel rerum hic eaque fugiat?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
