<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;

class PemerintahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.pemerintahan.index');
    }

    public function datatable()
    {
        $data = \DB::table('pemerintahans as a')
        ->select(
            'a.*',
            'b.name as user_created_by',
            'c.nama as category_name'
        )
        ->leftJoin('users as b', 'a.created_by', '=', 'b.id')
        ->leftJoin('kategori_pemerintahans as c', 'a.kategori_id', '=', 'c.id')
        // ->leftJoin('tag_beritas as d', 'a.created_by', '=', 'b.id')
        ->get();
            // dd($data);
        return \DataTables::of($data)->make();
    }

    public function create()
    {
        $kategori = \DB::table('kategori_pemerintahans')
        ->get();

        return view('admin.pemerintahan.create',[
            'kategori' => $kategori
        ]);
    }

    public function store(Request $req)
    {
        $inputs = $req->except(['image', 'image_prefix']);
        $id = Auth::id();

        // dd($req->all());

        $date_time = Carbon::now()->toDateTimeString();
        $inputs['created_at'] = $date_time;
        $inputs['created_by'] = $id;

        $image = $req->image;  // your base64 encoded
        if($image != null){
            if ($req->image_prefix == 'data:image/jpeg;base64,') {
                $image = str_replace('data:image/jpeg;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
            } elseif ($req->image_prefix == 'data:image/png;base64,') {
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
            }

            $imageName = 'berita-'.$req->slug.$date_time.'.'.'jpg';
            \File::put('img_berita'. '/' . $imageName, base64_decode($image));

            $dd = asset('img_berita/'.$imageName);

            $inputs['image'] = $dd;
        }

        $validate = $this->verify($inputs);

        if ($validate->fails()) {
            return response()->json([
                'message' => $validate->errors()->first()
            ], 400);
        }

        try {
            \DB::table('pemerintahans')
                ->insert($inputs);
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json(true, 200);

    }

    public function edit($id)
    {
        $data = \DB::table('pemerintahans')
            ->where('id', $id)
            ->first();

        $kategori = \DB::table('kategori_pemerintahans')
            ->get();

        $kategori_selected = \DB::table('kategori_pemerintahans')
            ->where('id', $data->kategori_id)
            ->first();

        return view('admin.pemerintahan.edit', [
            'data' => $data,
            'kategori' => $kategori,
            'kategori_selected' => $kategori_selected->id,
        ]);
    }

    public function update(Request $req)
    {
        // dd($req->all());
        $inputs = $req->except(['image', 'image_prefix', 'old_image']);
        $id = Auth::id();

        $date_time = Carbon::now()->toDateTimeString();
        $inputs['updated_at'] = $date_time;
        $inputs['created_by'] = $id;

        $image = $req->image;  // your base64 encoded
        if($image != null){
            if($req->image_prefix == 'data:image/jpeg;base64,'){

                $image = str_replace('data:image/jpeg;base64,', '', $image);
                $image = str_replace(' ', '+', $image);

            }elseif ($req->image_prefix == 'data:image/png;base64,') {

                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);

            }

            $imageName = 'berita-'.$req->slug.$date_time.'.'.'jpg';
            File::put('img_berita'. '/' . $imageName, base64_decode($image));
            $dd = asset('img_berita/'.$imageName);

            $inputs['image'] = $dd;

        }
        // dd($dd);

        $validate = $this->verify($inputs);

        if ($validate->fails()) {
            return response()->json([
                'message' => $validate->errors()->first()
            ], 400);
        }
        // dd($inputs);
        try {
            \DB::table('pemerintahans')
                ->where('id', $req->id)
                ->update($inputs);
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json(true, 200);

    }

    public function delete(Request $req)
    {

        try {
            \DB::table('pemerintahans')
                        ->where('id', $req->id)
                        ->delete();
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return sendResponse([
                        'message' => $e->getMessage()
                    ], 500);
        }

    }

    public function verify($inputs){

        $rules = [
            'judul' => 'required',
            'kategori_id' => 'required',
            'desc_singkat' => 'required',
            'desc' => 'required',
        ];

        $validator = \Validator::make($inputs, $rules);

        return $validator;

    }

    /*----------- KATEGORI ----------------*/
    public function indexKategori(){

        return view('admin.pemerintahan.kategori.index');
    }

    public function kategoriDatatable()
    {

        $data = \DB::table('kategori_pemerintahans')
        ->get();

        return \DataTables::of($data)->make();
    }

    public function storeKategori(Request $req){

        // dd($req->all());
        $inputs = $req->all();
        $date_time = Carbon::now()->toDateTimeString();
        $inputs['created_at'] = $date_time;

        $validate = $this->verifyKategori($inputs);

        if ($validate->fails()) {
            return response()->json([
                'message' => $validate->errors()->first()
            ], 400);
        }

        try {
            \DB::table('kategori_pemerintahans')
                ->insert($inputs);
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json(true, 200);
    }

    public function updateKategori(Request $req)
    {
        $inputs = $req->except('old_name');
        // dd($inputs);

        $old_name = $req->old_name;

        $date_time = Carbon::now()->toDateTimeString();
        $inputs['updated_at'] = $date_time;

        $validate = $this->verifyKategori($inputs);

        if ($validate->fails()) {
            return response()->json([
                'message' => $validate->errors()->first()
            ], 400);
        }
        // dd($inputs);
        try {
            if($old_name !== null){
                \DB::table('kategori_pemerintahans')
                    ->where('nama', $old_name)
                    ->update($inputs);
            }else{
                \DB::table('kategori_pemerintahans')
                ->where('id', $req->id)
                ->update($inputs);
            }
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json(true, 200);

    }

    public function deleteKategori(Request $req)
    {
        $old_name = $req->old_name;

        try {
            if($old_name !== null)
            {
                \DB::table('kategori_pemerintahans')
                    ->where('nama', $req->nama)
                    ->delete();
            }else{
                \DB::table('kategori_pemerintahans')
                        ->where('id', $req->id)
                        ->delete();
            }
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return sendResponse([
                        'message' => $e->getMessage()
                    ], 500);
        }

    }

    public function verifyKategori($inputs){

        $rules = [
            'nama' => 'required',
        ];

        $validator = \Validator::make($inputs, $rules);

        return $validator;

    }
}
