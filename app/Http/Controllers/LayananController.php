<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Layanan::orderBy('created_at', 'asc')->paginate(10);
        return view('layanan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:layanan,nama',
            'jenis_layanan' => 'required',
            'harga' => 'required',
            'jenis_estimasi' => 'required',
            'estimasi' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ], [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nama.unique' => 'Nama Layanan Sudah Tersedia',
            'jenis_layanan.required' => 'Jenis Layanan Tidak Boleh Kosong',
            'harga.required' => 'Harga Tidak Boleh Kosong',
            'jenis_estimasi.required' => 'Jenis Estimasi Tidak Boleh Kosong',
            'estimasi.required' => 'Estimasi Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'status.required' => 'Status Tidak Boleh Kosong',
        ]);

        $data = [
            'nama' => $request->nama,
            'jenis_layanan' => $request->jenis_layanan,
            'harga' => $request->harga,
            'jenis_estimasi' => $request->jenis_estimasi,
            'estimasi' => $request->estimasi,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ];
        Layanan::create($data);
        return redirect()->to('layanan')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Layanan::where('id', $id)->first();
        return view('layanan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_layanan' => 'required',
            'harga' => 'required',
            'jenis_estimasi' => 'required',
            'estimasi' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ], [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'jenis_layanan.required' => 'Jenis Layanan Tidak Boleh Kosong',
            'harga.required' => 'Harga Tidak Boleh Kosong',
            'jenis_estimasi.required' => 'Jenis Estimasi Tidak Boleh Kosong',
            'estimasi.required' => 'Estimasi Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'status.required' => 'Status Tidak Boleh Kosong',
        ]);

        $data = [
            'nama' => $request->nama,
            'jenis_layanan' => $request->jenis_layanan,
            'harga' => $request->harga,
            'jenis_estimasi' => $request->jenis_estimasi,
            'estimasi' => $request->estimasi,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ];

        Layanan::where('id', $id)->update($data);
        return redirect()->to('layanan')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();

        return redirect()->to('layanan')->with('success', 'Berhasil Menghapus Data');
    }
}
