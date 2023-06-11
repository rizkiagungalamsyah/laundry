<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_customer = Customer::count();
        $count_layanan = Layanan::count();
        $count_pengeluaran = Pengeluaran::count();

        return view('admin.dashboard', compact('count_customer','count_layanan','count_pengeluaran'));
    }
}
