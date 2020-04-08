<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::id();

        $data = \DB::table('users')
        ->select('*')
        ->where('id', $id)
        ->first();

        $total_penduduk = \DB::table('kependudukans')
        ->get();

        // dd($id);
        return view('home', [
            'user_name' => $data->name,
            'total_penduduk' => count($total_penduduk)
        ]);
    }
}