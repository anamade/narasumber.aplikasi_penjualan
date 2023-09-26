<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar bg-success" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar bg-success">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu bg-success" data-widget="tree">
            <li>
                <!-- <a href="{{ route('dashboard') }}"> -->
                <a href="{{ route('dashboard') }}" class="bg-purple rounded" >
        
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
            <li class="header bg-warning" >MASTER</li>
            <li>
                <!-- <a href="{{ route('kategori.index') }}"> -->
                <a href="{{ route('kategori.index') }}" class="bg-purple  rounded" >
                <i class="fa fa-university" aria-hidden="true"></i><span>Kategori</span>
                </a>
            </li>
            <li>
                <!-- <a href="{{ route('produk.index') }}"  class="bg-primary rounded"> -->
                <a href="#"  class="bg-purple  rounded">
                    <i class="fa fa-cubes"></i> <span>Produk</span>
                </a>
            </li>
            <li>
                <!-- <a href="{{ route('member.index') }}"  class="bg-primary rounded"> -->
                <a href="#"  class="bg-purple  rounded">
                    <i class="fa fa-id-card"></i> <span>Member</span>
                </a>
            </li>
            <li>
                <!-- <a href="{{ route('supplier.index') }}"  class="bg-primary rounded"> -->
                <a href="#"  class="bg-purple  rounded">
                    <i class="fa fa-truck"></i> <span>Supplier</span>
                </a>
            </li>
            <li class="header bg-warning">TRANSAKSI</li>
            <li>
                <!-- <a href="{{ route('pengeluaran.index') }}"  class="bg-primary rounded"> -->
                <a href="#"  class="bg-purple  rounded">
                    <i class="fa fa-money"></i> <span>Pengeluaran</span>
                </a>
            </li>
            <li>
                <!-- <a href="{{ route('pembelian.index') }}"  class="bg-primary rounded"> -->
                <a href="#"  class="bg-purple  rounded">
                    <i class="fa fa-download"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <!-- <a href="{{ route('penjualan.index') }}"  class="bg-primary rounded"> -->
                <a href="#"  class="bg-purple  rounded">
                    <i class="fa fa-upload"></i> <span>Penjualan</span>
                </a>
            </li>
            <li>
                <a href="#"  class="bg-purple  rounded">
                <!-- <a href="{{ route('transaksi.index') }}"  class="bg-primary rounded"> -->
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="#"  class="bg-purple  rounded">
                <!-- <a href="{{ route('transaksi.baru') }}"  class="bg-primary rounded"> -->
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            <li class="header bg-warning">REPORT</li>
            <li>
                <a href="#"  class="bg-purple  rounded">
                <!-- <a href="{{ route('laporan.index') }}"  class="bg-primary rounded"> -->
                    <i class="fa fa-file-pdf-o "></i> <span>Laporan</span>
                </a>
            </li>
            <li class="header bg ">SYSTEM</li>
            <li>
                <a href="{{ route('user.index') }}"  class="bg-purple  rounded">
                    <i class="fa fa-users"></i> <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ route("setting.index") }}"  class="bg-purple  rounded">
                    <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                </a>
            </li>
            @else
            <li>
                <a href="{{ route('transaksi.index') }}"  class="bg-purple  rounded">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}"  class="bg-purple  rounded">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>