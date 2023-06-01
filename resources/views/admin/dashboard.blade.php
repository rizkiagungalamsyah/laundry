@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Dashboard</a></li>
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-md">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <div>
                            <h2><b>1500</b></h2>
                            <h5>Jumlah Pelanggan</h5>
                        </div>
                        <i class='bx bxs-user icon'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <div>
                            <h2><b>1500</b></h2>
                            <h5>Jumlah Pelanggan</h5>
                        </div>
                        <i class='bx bxs-user icon'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <div>
                            <h2><b>1500</b></h2>
                            <h5>Jumlah Pelanggan</h5>
                        </div>
                        <i class='bx bxs-user icon'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <div>
                            <h2><b>1500</b></h2>
                            <h5>Jumlah Pelanggan</h5>
                        </div>
                        <i class='bx bxs-user icon'></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="info-data">
        <div class="card">
            <div class="head">
                <div>
                    <h2><b>{{ $count_customer }}</b></h2>
                    <h5>Jumlah Customer</h5>
                </div>
                <i class='bx bxs-user icon'></i>
            </div>
            {{-- <span class="progress" data-value="40%"></span>
            <span class="label">40%</span> --}}
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2><b>234</b></h2>
                    <h5>Laundry Masuk</h5>
                </div>
                <i class='bx bx-archive icon'></i>
            </div>
            {{-- <span class="progress" data-value="60%"></span>
            <span class="label">60%</span> --}}
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2><b>465</b></h2>
                    <h5>Laundry Selesai</h5>
                </div>
                <i class='bx bx-check-circle icon'></i>
            </div>
            {{-- <span class="progress" data-value="30%"></span>
            <span class="label">30%</span> --}}
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2><b>235</b></h2>
                    <h5>Laundry Diambil</h5>
                </div>
                <i class='bx bx-user-check icon'></i>
            </div>
            {{-- <span class="progress" data-value="80%"></span>
            <span class="label">80%</span> --}}
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Pendapatan</h3>
                        <p>Pendapatan Bulan & Tahun</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img class="icon-rupiah" src="{{ asset('admin-dashboard/rupiah-icon.png') }}" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Rp 5.300.000</b></h5>
                                        <p class="card-text">Tahun Ini <strong>2023</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img class="icon-rupiah" src="{{ asset('admin-dashboard/rupiah-icon.png') }}" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Rp 230.000</b></h5>
                                        <p class="card-text">Bulan Ini <strong>Mei</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img class="icon-rupiah" src="{{ asset('admin-dashboard/rupiah-icon.png') }}" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Rp 5.580.000</b></h5>
                                        <p class="card-text">Tahun Lalu <strong>2022</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Pendapatan</h3>
                        <p>Pendapatan Harian</p>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img <img class="icon-rupiah" src="{{ asset('admin-dashboard/rupiah-icon.png') }}" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Rp 230.000</b></h5>
                                        <p class="card-text">Hari Ini <strong>Minggu</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img <img class="icon-rupiah" src="{{ asset('admin-dashboard/rupiah-icon.png') }}" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Rp 430.000</b></h5>
                                        <p class="card-text">Kemarin <strong>Sabtu</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Data Laundry Masuk Per-hari</h3>
                    </div>
                    <div class="chart1">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Data Laundry Masuk Per-bulan</h3>
                    </div>
                    <div class="chart2">
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
