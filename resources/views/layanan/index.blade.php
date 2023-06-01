@extends('layouts.master')

@section('title')
    Data Paket Laundry
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Paket</a></li>
@endsection

@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Data Paket Laundry</h3>
                <a href="{{ route('layanan.create') }}"><button type="button" class="btn btn-outline-primary">Tambah
                        Data</button></a>
            </div>
            @include('layouts.alert')
            <div class="box-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th class="tctr" style="width: 3%">No</th>
                        <th>Nama Paket</th>
                        <th style="width: 7%">Estimasi</th>
                        <th style="width: 10%">Harga /Kg</th>
                        <th style="width: 40%">Deskripsi</th>
                        <th class="tctr" style="width: 8%">Status</th>
                        <th class="tctr" style="width: 8%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $layanan)
                            <tr>
                                <td class="tctr">{{ $i }}</td>
                                <td>{{ $layanan->nama }}</td>
                                <td>{{ $layanan->estimasi }} {{ $layanan->jenis_estimasi }}</td>
                                <td>Rp {{ format_rupiah($layanan->harga) }}</td>
                                <td>{{ $layanan->deskripsi }}</td>
                                <td class="ctr">
                                    @if ($layanan->status == 1)
                                        <span class="badge bg-primary w-100">Aktif</span>
                                    @else
                                        <span class="badge bg-danger w-100">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td class="ctr tctr">
                                    <a href='{{ url('layanan/' . $layanan->id . '/edit') }}'
                                        class="btn btn-primary btn-sm"><span class="bx bx-edit"></span></a>
                                    <form class="d-inline" action="{{ url('layanan/' . $layanan->id) }}" method="post">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <span class="bx bx-trash"></span>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Menghapus Data
                                                            Layanan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('warning.png') }}"
                                                            style="height: 150px; margin-bottom: 20px;" alt="">
                                                        <h5>Apakah Anda Yakin Untuk Menghapus Data Layanan?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-bs-dismiss="modal">Close</button>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
