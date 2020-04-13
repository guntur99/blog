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

        $total_berita = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.name as user_created_by',
            'c.nama as category_name'
        )
        ->leftJoin('users as b', 'a.created_by', '=', 'b.id')
        ->leftJoin('kategori_beritas as c', 'a.kategori_id', '=', 'c.id')
        ->orderByDesc('created_at')
        ->get();

        $total_informasi = \DB::table('pemerintahans')
        ->get();

        // dd($total_berita);
        return view('home', [
            'user_name' => $data->name,
            'total_penduduk' => count($total_penduduk),
            'total_berita' => count($total_berita),
            'total_informasi' => count($total_informasi),
            'berita' => $total_berita
        ]);
    }
}
