{{-- this part set the sidebar --}}
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="kitchen_crew">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Kitchen Crew</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
  <a class="nav-link" href="{{ route('kitchen_crew.main')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu Makanan
  </div>
      
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="true" aria-controls="collapseThree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Menu</span>
    </a>
    <div id="collapseMenu" class="collapse" aria-labelledby="headingMenu" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">        
        <a class="collapse-item" href="{{ route('kitchen_crew.menu.index') }}">Daftar Menu</a>
        <a class="collapse-item" href="{{ route('kitchen_crew.menuschedule.index') }}">Daftar Jadwal</a>                        
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePacket" aria-expanded="true" aria-controls="collapseThree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Paket</span>
    </a>
    <div id="collapsePacket" class="collapse" aria-labelledby="headingMenu" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">        
        <a class="collapse-item" href="{{ route('kitchen_crew.packet.index') }}">Daftar Paket</a>
        <a class="collapse-item" href="{{ route('kitchen_crew.packetrule.index') }}">Aturan Paket</a>                        
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Pesanan
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pesanan</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">        
        <a class="collapse-item" href="login.html">Daftar Pesanan</a>
        <a class="collapse-item" href="forgot-password.html">Pesanan Selesai</a>                
        <a class="collapse-item" href="register.html">Pesanan Batal</a>
      </div>
    </div>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <div class="sidebar-heading">
    Pembayaran
  </div>
      
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
      <i class="fas fa-fw fa-cog"></i>
      <span>Pembayaran</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="buttons.html">Bukti Pembayaran</a>
        <a class="collapse-item" href="cards.html">Rekap</a>
      </div>
    </div>
  </li>  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">  

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>