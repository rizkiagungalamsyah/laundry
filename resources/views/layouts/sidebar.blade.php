<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand"><i class='bx bxs-washer icon'></i> LaundryKuy</a>
    <ul class="side-menu">
        <li><a href="{{ route('dashboard') }}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
        <li class="divider" data-text="main">Main</li>
        <li>
            <a href="#"><i class='bx bxs-package icon'></i> Layanan <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('layanan.index') }}"><i class='bx bxs-package icon'></i>Data Layanan</a></li>
                <li><a href="{{ route('layanan.create') }}"><i class='bx bx-list-plus icon'></i>Tambah Layanan</a></li>
            </ul>
        </li>

        <li>
            <a href="#"><i class='bx bxs-id-card icon'></i> Customer <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('customer.index') }}"><i class='bx bxs-user-detail icon'></i>Data Customer</a>
                </li>
                <li><a href="{{ route('customer.create') }}"><i class='bx bx-user-plus icon'></i>Tambah Customer</a>
                </li>
            </ul>
        </li>

        <li class="divider" data-text="transaction">Transaction</li>

        <li>
            <a href="#"><i class='bx bxs-cart-download icon'></i> Pengeluaran <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('pengeluaran.index') }}"><i class='bx bx-list-ul icon'></i>Data Pengeluaran</a>
                </li>
                <li><a href="{{ route('pengeluaran.create') }}"><i class='bx bx-list-plus icon'></i>Tambah
                        Pengeluaran</a>
                </li>
            </ul>
        </li>

        <li><a href="transaksi"><i class='bx bxs-cart-download icon'></i> Transaksi</a></li>
        <li><a href="#"><i class='bx bxs-cart-add icon'></i> Penjualan</a></li>
        <li><a href="#"><i class='bx bx-table icon'></i> Transaksi Lama</a></li>
        <li><a href="#"><i class='bx bx-table icon'></i> Transaksi Baru</a></li>

        <li class="divider" data-text="report">Report</li>
        <li><a href="#"><i class='bx bxs-file-pdf icon'></i> Laporan</a></li>
    </ul>
</section>
<!-- SIDEBAR -->
