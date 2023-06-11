@extends('layouts.master')

@section('title')
    Transaksi
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Transaksi</a></li>
@endsection

@section('content')
    <div class="data">
        <div class="content-data">
            <h3><b>Tambah Transaksi</b></h3>
            @include('layouts.alert')
            <div class="box-body table-responsive">
                <!-- START FORM -->
                <form action='{{ url('layanan') }}' method='post'>
                    @csrf
                    <div class="p-3">
                        <div class="mb-3">
                            <label for="no_pesanan" class="form-label">No Transaksi</label>
                            <input type="text" class="form-control" name='harga' id="no_pesanan" style="width: 276px"
                                value="<?php
                                echo uniqid('#INV');
                                ?>" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="no_pesanan" class="form-label">Nama Layanan</label>
                            <select class="form-select" id="slctMember" data-placeholder="Choose one thing"
                                style="width: 276px">
                                <option></option>
                                <option>Reactive</option>
                                <option>Solution</option>
                                <option>Conglomeration</option>
                                <option>Algoritm</option>
                                <option>Holistic</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Tanggal" class="form-label">Tanggal Transaksi</label>
                            <input type="text" class="form-control" id="datetimepicker" width="276">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10"><button type="submit" class="btn btn-primary float-end"
                                    name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr class="hr mb-5" />

                <!-- AKHIR FORM -->
                <h4 class="mb-3">List Keranjang</h4>
                <table class="table table-bordered">
                    <thead>
                        <th style="width: 3%">No</th>
                        <th>Nama Product</th>
                        <th style="width: 13%">Harga</th>
                        <th>Qty</th>
                        <th s style="width: 13%">Sub Harga</th>
                        <th style="width: 3%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cuci Kering Kilat</td>
                            <td>Rp 10.000</td>
                            <td>5</td>
                            <td>Rp 25.000.000</td>
                            <td>
                                <form class="d-inline" action="/" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><span
                                            class="bx bx-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="mb-3 row float-end d-inline">
                <div class="col-sm-3 d-inline"><button type="submit" class="btn btn-primary" name="submit"><span
                            class="bx bx-cart"></span> Checkout</button>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#slctMember').select2({
                theme: 'bootstrap-5'
            });
        });
    </script>
    {{-- <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script> --}}
    <script>
        var today, datetimepicker;
        today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        datetimepicker = $('#datetimepicker').datetimepicker({
            uiLibrary: 'bootstrap5',
            minDate: today,
            format: 'dd mmmm yyyy HH:MM',
            footer: 'true',
            value
        });
    </script>
@endsection
@endsection
