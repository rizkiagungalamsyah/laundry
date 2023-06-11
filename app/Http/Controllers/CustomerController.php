<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::orderBy('nama', 'asc')->paginate(10);
        return view('customer.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'nama' => 'required',
            'nomor_tlp' => 'required',
            'alamat' => 'required',
        ], [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nomor_tlp.required' => 'Nomor Telephone Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
        ]);

        $data = [
            'nama' => $request->nama,
            'nomor_tlp' => $request->nomor_tlp,
            'alamat' => $request->alamat,
        ];
        Customer::create($data);
        return redirect()->to('customer')->with('success', 'Berhasil Menambahkan Data');
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
        $data = Customer::where('id', $id)->first();
        return view('customer.edit')->with('data', $data);
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
            'nomor_tlp' => 'required',
            'alamat' => 'required',
        ], [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nomor_tlp.required' => 'Nomor Telephone Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
        ]);

        $data = [
            'nama' => $request->nama,
            'nomor_tlp' => $request->nomor_tlp,
            'alamat' => $request->alamat,

        ];
        Customer::where('id', $id)->update($data);
        return redirect()->to('customer')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->to('customer')->with('success', 'Berhasil Menghapus Data');
    }
}
