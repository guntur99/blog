<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.berita.index');
    }

    public function datatable()
    {
        $data = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.name as user_created_by',
            'c.nama as category_name'
        )
        ->leftJoin('users as b', 'a.created_by', '=', 'b.id')
        ->leftJoin('kategori_beritas as c', 'a.kategori_id', '=', 'c.id')
        // ->leftJoin('tag_beritas as d', 'a.created_by', '=', 'b.id')
        ->get();
            // dd($data);
        return \DataTables::of($data)->make();
    }
}
