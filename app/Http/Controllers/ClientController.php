<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        $slide_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->take(5)->get();

        $all_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->get();

        $kategori_pemerintahan = \DB::table('kategori_pemerintahans')->get();
        $info_pemerintahan = \DB::table('pemerintahans')->get();
        // dd($all_articles);
        return view('welcome',
        [
            'category_berita' => $kategori_berita,
            'slide_articles' => $slide_articles,
            'all_articles' => $all_articles,
            'category_pemerintahan' => $kategori_pemerintahan,
            'info_pemerintahan' => $info_pemerintahan,
        ]);
    }

    public function contact()
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        $info_pemerintahan = \DB::table('pemerintahans')->get();
        $kategori_pemerintahan = \DB::table('kategori_pemerintahans')->get();

        return view('client.contact.contact',
        [
            'category_berita' => $kategori_berita,
            'category_pemerintahan' => $kategori_pemerintahan,
            'info_pemerintahan' => $info_pemerintahan,
        ]);
    }

    public function showBerita($id)
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        $kategori_berita_now = \DB::table('kategori_beritas')
        ->where('nama', $id)->first();
        $info_pemerintahan = \DB::table('pemerintahans')->get();
        $kategori_pemerintahan = \DB::table('kategori_pemerintahans')->get();
        // dd($id);
        // dd($kategori_berita_now);
        $berita = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('kategori_id', $kategori_berita_now->id)->take(5)->get();

        // dd($berita);
        return view('client.berita.list-berita-desa',
        [
            'category_berita' => $kategori_berita,
            'category_berita_now' => $kategori_berita_now,
            'category_pemerintahan' => $kategori_pemerintahan,
            'info_pemerintahan' => $info_pemerintahan,
            'berita' => $berita,
        ]);
    }

    public function showDetilBerita($id)
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        // $kategori_berita_now = \DB::table('kategori_beritas')
        // ->where('nama', $id)->first();
        $info_pemerintahan = \DB::table('pemerintahans')->get();
        $kategori_pemerintahan = \DB::table('kategori_pemerintahans')->get();
        // dd($id);
        // dd($kategori_berita_now);
        $detil_berita = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('slug', $id)->first();

        $berita_lain = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('slug', '!=', $id)->take(3)->get();

        // dd($berita_lain);
        return view('client.berita.detil-berita',
        [
            'category_berita' => $kategori_berita,
            // 'category_berita_now' => $kategori_berita_now,
            'category_pemerintahan' => $kategori_pemerintahan,
            'info_pemerintahan' => $info_pemerintahan,
            'detil_berita' => $detil_berita,
            'berita_lain' => $berita_lain,
        ]);
    }

    public function showDetilInfo($id)
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        // $kategori_berita_now = \DB::table('kategori_beritas')
        // ->where('nama', $id)->first();
        $info_pemerintahan = \DB::table('pemerintahans')->get();
        $kategori_pemerintahan = \DB::table('kategori_pemerintahans')->get();
        // dd($id);
        // dd($kategori_berita_now);
        $detil_info = \DB::table('pemerintahans as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
            )
        ->leftJoin('kategori_pemerintahans as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('slug', $id)->first();

        $info_lain = \DB::table('pemerintahans as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
        )
        ->leftJoin('kategori_pemerintahans as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('slug', '!=', $id)->take(3)->get();

        // dd($info_lain);
        return view('client.pemerintahan.detil-info',
        [
            'category_berita' => $kategori_berita,
            // 'category_berita_now' => $kategori_berita_now,
            'category_pemerintahan' => $kategori_pemerintahan,
            'info_pemerintahan' => $info_pemerintahan,
            'detil_info' => $detil_info,
            'info_lain' => $info_lain,
        ]);
    }
}
