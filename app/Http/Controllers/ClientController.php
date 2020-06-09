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
}
