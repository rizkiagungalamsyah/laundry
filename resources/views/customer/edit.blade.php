@extends('layouts.master')

@section('title')
    Edit Product
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Edit Product</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Edit Data Layanan</h3>
            </div>
            @include('layouts.alert')
            <!-- START FORM -->
            <form action='{{ url('layanan/' . $data->id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Layanan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama' id="nama"
                                value="{{ $data->nama }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jenis_layanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_layanan" id="jenis_layanan">
                                <option selected="true" disabled>Open this select menu</option>
                                <option value="Kiloan" @selected($data->jenis_layanan == 'Kiloan')>Kiloan</option>
                                <option value="Satuan" @selected($data->jenis_layanan == 'Satuan')>Satuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Layanan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='harga' id="harga"
                                value="{{ $data->harga }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jenis_estimasi" class="col-sm-2 col-form-label">Jenis Estimasi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenis_estimasi" id="jenis_estimasi">
                                <option selected="true" disabled>Open this select menu</option>
                                <option value="Jam" @selected($data->jenis_estimasi == 'Jam')>Jam</option>
                                <option value="Hari" @selected($data->jenis_estimasi == 'Hari')>Hari</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="estimasi" class="col-sm-2 col-form-label">Estimasi Layanan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='estimasi' id="estimasi"
                                value="{{ $data->estimasi }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Layanan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='deskripsi' id="deskripsi" rows="5" cols="100">{{ $data->deskripsi }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status Layanan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="status" name="status">
                                <option selected="true" disabled>Open this select menu</option>
                                <option value="1" @selected($data->status == '1')>Aktif</option>
                                <option value="0" @selected($data->status == '0')>Tidak Aktif</option>
                            </select>
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
        </div>
        <!-- AKHIR FORM -->
    </div>
    </div>
@endsection
