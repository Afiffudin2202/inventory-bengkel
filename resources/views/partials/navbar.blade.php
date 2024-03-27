 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top " data-bs-theme="dark">
     <div class="container">
         <a href="" class="navbar-brand">Aulia Motors</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAulia"
             aria-controls="navbarAulia" aria-expanded="false" aria-label="Toggle Navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarAulia">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a href="{{ url('auliamotors') }}"
                         class="nav-link {{ request()->segment(1) == 'auliamotors' || request()->segment(1) == '' && request()->segment('2') == '' ? 'active' : '' }}">Home</a>
                 </li>
                 <li class="navbar-item">
                     <a href="{{ url('auliamotors/services') }}"
                         class="nav-link {{ request()->segment(1) == 'auliamotors' && request()->segment(2) == 'services' ? 'active' : '' }}">Pelayanan</a>
                 </li>
                 <li class="navbar-item">
                     <a href="{{ url('auliamotors/customers') }}" class="nav-link {{ request()->segment(2) == 'customers' ? 'active' : '' }}">Pelanggan</a>
                 </li>
                 <li class="navbar-item">
                     <a href="{{ url('auliamotors/galeri') }}" class="nav-link {{ request()->segment('2') == 'galeri' ? 'active' : '' }}">Galeri</a>
                 </li>
                 <li class="navbar-item">
                     <a href="{{ url('auliamotors/contacts') }}" class="nav-link {{ request()->segment(2) == 'contacts' ? 'active' : '' }}">Kontak</a>
                 </li>
                 
             </ul>
         </div>
     </div>
 </nav>
