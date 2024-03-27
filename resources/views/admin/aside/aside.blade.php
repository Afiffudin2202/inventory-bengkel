 <div class="d-flex flex-column py-3 aside-bg h-100  px-0 fw-semibold aside">
     <a href="{{ url('admin/dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none py-0 px-4">
         <span class="fs-4">AULIA MOTORS</span>
     </a>
     <hr>
     <ul class="nav nav-pills flex-column mb-auto" >
         <li class="nav-item">
             <a href="{{ url('admin/dashboard') }}" class="nav-link  text-white {{ request()->segment(2) == 'dashboard' ? 'active' : '' }} ">
                 <i class="bi bi-speedometer2"></i>
                 <span class="mx-2">Dashboard</span>
             </a>
         </li>
         <li>
             <a href="{{ url('admin/barang') }}" class="nav-link text-white {{ request()->segment(2) == 'barang' ? 'active' : '' }}">
                 <i class="bi bi-box"></i>
                 <span class="mx-2">Barang</span>
             </a>
         </li>
         <li>
             <a href="{{ url('admin/pembelian') }}" class="nav-link text-white {{ request()->segment(2) == 'pembelian' ? 'active' : '' }}">
                 <i class="bi bi-box-arrow-in-down-right"></i>
                 <span class="mx-2">Pembelian</span>
             </a>
         </li>
         <li>
             <a href="{{ url('admin/penjualan') }}" class="nav-link text-white {{ request()->segment(2) == 'penjualan' ? 'active' : '' }}">
                 <i class="bi bi-box-arrow-up-right"></i>
                 <span class="mx-2">Penjualan</span>
             </a>
         </li>
         <li>
             <a href="{{ url('admin/supplier') }}" class="nav-link text-white {{ request()->segment(2) == 'supplier' ? 'active' : '' }}">
                 <i class="bi bi-person-down"></i>
                 <span class="mx-2">Supplier</span>
             </a>
         </li>
         <li>
             <a href="{{ url('admin/customer') }}" class="nav-link text-white {{ request()->segment(2) == 'customers' ? 'active' : '' }}">
                 <i class="bi bi-people-fill"></i>
                 <span class="mx-2">Customers</span>
             </a>
         </li>
         <li>
             <a href="{{ url('admin/galeri') }}" class="nav-link text-white {{ request()->segment(2) == 'galeri' ? 'active' : '' }}">
                 <i class="bi bi-people-fill"></i>
                 <span class="mx-2">Galeri</span>
             </a>
         </li>
     </ul>
     <hr>
     <div class="dropdown px-3">
         <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
             data-bs-toggle="dropdown" aria-expanded="false">
             <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                 class="rounded-circle me-2">
             <strong>Admin</strong>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow text-center">
             <li>
                 <form action="{{ url('admin/logout') }}" method="POST">
                     @csrf
                     <button class="btn " data-bs-theme="dark" type="submit"> Logout </button>
                 </form>
             </li>
         </ul>
     </div>
 </div>
