@extends('layouts.master')

@section('title')
    Data Pengeluaran
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Pengeluaran</a></li>
@endsection

@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Data Pengeluaran</h3>
                <a href="{{ route('pengeluaran.create') }}"><button type="button" class="btn btn-outline-primary">Tambah
                        Data</button></a>
            </div>
            @include('layouts.alert')
            <div class="box-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th class="tctr" style="width: 3%">No</th>
                        <th style="width: 15%">Tanggal Pengeluaran</th>
                        <th style="width: 25%">Pengeluaran</th>
                        <th style="width: 5%">Jumlah</th>
                        <th style="width: 10%">Nominal</th>
                        <th>Deskripsi</th>
                        <th class="tctr" style="width: 8%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $pengeluaran)
                            <tr>
                                <td class="tctr">{{ $i }}</td>
                                <td>{{ tgl_indo($pengeluaran->created_at) }}</td>
                                <td>{{ $pengeluaran->pengeluaran }}</td>
                                <td>{{ $pengeluaran->jumlah }}</< /td>
                                <td>Rp {{ format_rupiah($pengeluaran->nominal) }}</td>
                                <td>{{ $pengeluaran->deskripsi }}</td>
                                <td class="ctr tctr">
                                    <a href='{{ url('customer/id/edit') }}' class="btn btn-primary btn-sm"><span
                                            class="bx bx-edit"></span></a>
                                    <form class="d-inline" action="id" method="post">

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
                                                            Customer</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('warning.png') }}"
                                                            style="height: 150px; margin-bottom: 20px;" alt="">
                                                        <h5> Anda Yakin Untuk Menghapus Data Customer?</h5>
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
                                        {{-- <button type="submit" name="submit" class="btn btn-danger btn-sm"><span
                                                class="bx bx-trash"></span>
                                        </button> --}}
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
