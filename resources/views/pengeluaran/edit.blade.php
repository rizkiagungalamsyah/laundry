@extends('layouts.master')

@section('title')
    Edit Pengeluaran
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Edit Pengeluaran</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Edit Data Pengeluaran</h3>
            </div>
            @include('layouts.alert')
            <!-- START FORM -->
            <form action='{{ url('pengeluaran/' . $data->id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="pengeluaran" class="col-sm-2 col-form-label">Pengeluaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='pengeluaran' id="pengeluaran"
                                value="{{ $data->pengeluaran }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='jumlah' id="jumlah"
                                value="{{ $data->jumlah }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='nominal' id="nominal"
                                value="{{ $data->nominal }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='deskripsi' id="deskripsi" rows="5" cols="100">{{ $data->deskripsi }}</textarea>
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
