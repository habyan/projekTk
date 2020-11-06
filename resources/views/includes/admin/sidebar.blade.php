<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" @if (Auth::user()->roles == 'user')
    href="{{route('siswa-tagihan')}}" @else href="{{route('Dashboard')}}" @endif>
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        @if (Auth::user()->roles == 'user')
        <div class="sidebar-brand-text mx-3">Siswa <sup>TK</sup></div>
        @else
        <div class="sidebar-brand-text mx-3">Admin <sup>TK</sup></div>
        @endif
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @if (Auth::user()->roles == 'user')

    <li class="nav-item active">
        <a class="nav-link" href="{{route('siswa-tagihan')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>History Pembayaran</span></a>
    </li>
    
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-arrow-left"></i>
            <span>Home</span></a>
    </li>
    @else
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('Dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('pendaftaran')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Pendaftaran</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Siswa</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="">
        <i class="fas fa-fw fa-file-invoice-dollar"></i>
            <span>Data Spp</span></a>
    </li>

    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->