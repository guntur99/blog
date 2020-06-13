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

        $total_kategori = \DB::table('kategori_beritas')->get();

        $total_tag = \DB::table('tag_beritas')->get();

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

        // dd($total_berita);
        return view('home', [
            'user_name' => $data->name,
            'total_berita' => count($total_berita),
            'total_kategori' => count($total_kategori),
            'total_tag' => count($total_tag),
            'berita' => $total_berita
        ]);
    }
}
