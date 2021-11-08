<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name') ?? 'Laravel' }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ substr(config('app.name'), 0, 2) }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown{{ request()->is('dashboard') || request()->is('dashboard/cari') ? ' active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @if(auth()->user()->role->id === 1)
            <li class="menu-header">Data Master</li>
            <li class="nav-item dropdown">
            <li class="{{ request()->is('transaksi') || request()->is('transaksi/cari') ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.transaksi.index') }}"><i class="fas fa-money-check-alt"></i> <span>Transaksi</span></a></li>
            <li class="{{ request()->is('siswa') || Request::segment(1) === 'siswa' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.siswa.index') }}"><i class="fas fa-users"></i> <span>Data Siswa</span></a></li>
            <li class="{{ request()->is('kelas') ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.kelas.index') }}"><i class="fas fa-portrait"></i> <span>Data Kelas</span></a></li>
            <li class="{{ request()->is('spp') ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.spp.index') }}"><i class="fas fa-bookmark"></i> <span>Jenis SPP</span></a></li>
            <li class="{{ request()->is('petugas') ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.petugas.index') }}"><i class="fas fa-user-shield"></i> <span>Petugas</span></a></li>
            <li class="{{ request()->is('laporan-perbulan') ? ' active' : '' }}"><a class="nav-link" href="{{ route('laporan-perbulan') }}"><i class="fas fa-calendar-check"></i> <span>Laporan Perbulan</span></a></li>
            @endif
            @if(auth()->user()->role->id === 2)
            <li class="{{ request()->is('laporan-perbulan') ? ' active' : '' }}"><a class="nav-link" href="{{ route('laporan-perbulan') }}"><i class="fas fa-calendar-check"></i> <span>Laporan Perbulan</span></a></li>
            @endif
    </aside>
</div>