<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengeluaran::orderBy('pengeluaran', 'asc')->paginate(10);
        return view('pengeluaran.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran.create');
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
            'pengeluaran' => 'required',
            'jumlah' => 'required',
            'nominal' => 'required',
            'deskripsi' => 'required',
        ], [
            'pengeluaran.required' => 'Pengeluaran Tidak Boleh Kosong',
            'jumlah.required' => 'Jumlah Tidak Boleh Kosong',
            'nominal.required' => 'Nominal Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
        ]);

        $data = [
            'nama' => $request->nama,
            'nomor_tlp' => $request->nomor_tlp,
            'alamat' => $request->alamat,
            'pengeluaran' => $request->pengeluaran,
            'jumlah' => $request->jumlah,
            'nominal' => $request->nominal,
            'deskripsi' => $request->deskripsi,
        ];
        Pengeluaran::create($data);
        return redirect()->to('pengeluaran')->with('success', 'Berhasil Menambahkan Data');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
