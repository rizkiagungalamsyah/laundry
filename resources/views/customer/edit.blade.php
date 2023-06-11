@extends('layouts.master')

@section('title')
    Edit Data
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Edit Customer</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Edit Data Customer</h3>
            </div>
            @include('layouts.alert')
            <!-- START FORM -->
            <form action='{{ url('customer/' . $data->id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama' id="nama"
                                value="{{ $data->nama }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nomor_tlp" class="col-sm-2 col-form-label">Nomor Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nomor_tlp' id="nomor_tlp"
                                value="{{ $data->nomor_tlp }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Customer</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='alamat' id="alamat" rows="5" cols="100">{{ $data->alamat }}</textarea>
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
