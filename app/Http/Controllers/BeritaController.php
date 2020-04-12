<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $this->detailBerita();
        return view('admin.berita.index');
    }

    public function detailBerita(Request $req)
    {
        $input = $req->all();
        // dd($input);

        $data = \DB::table('beritas as a')
        ->select(
            'a.*',
        )
        ->where('id', $req->id)
        ->first();
        // dd($data);

        return view('admin.berita.index',
        [
            'desc_singkat' => $data->desc_singkat,
        ]);

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

    public function tagBerita(Request $req)
    {

        // dd($req->all());

        $dd = [];
        $tags = \explode(",", $req->tag_id);
        for ($i=0; $i < count($tags); $i++) {
            $data = \DB::table('tag_beritas as a')
            ->select(
                'a.*',
            )
            ->where('a.id', $tags[$i])
            ->first();

            array_push($dd, $data);
        }


        // dd($dd);

        return $dd;
    }

    public function create()
    {
        $kategori = \DB::table('kategori_beritas as a')
        ->select(
            'a.*',
        )
        ->get();

        return view('admin.berita.create',[
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
            \DB::table('beritas')
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
        $data = \DB::table('beritas')
            ->select(
                '*',
            )
            ->where('id', $id)
            ->first();

        $kategori = \DB::table('kategori_beritas')
            ->select(
                '*',
            )
            ->get();

        $kategori_selected = \DB::table('kategori_beritas')
            ->select(
                '*',
            )
            ->where('id', $data->kategori_id)
            ->first();

        $tag = \DB::table('tag_beritas')
            ->select(
                '*',
            )
            ->get();

        $tag_selected = [];
        $tag_n_selected = [];
        $tag_s = [];
        $tag_all = [];
        $tags = \explode(",", $data->tag_id);

        for ($i=0; $i < count($tags); $i++) {
            $datas = \DB::table('tag_beritas as a')
            ->select(
                'a.*',
            )
            ->where('a.id', $tags[$i])
            ->first();

            array_push($tag_s, $datas->id);
        }

        for ($i=0; $i < count($tags); $i++) {
            $datas = \DB::table('tag_beritas as a')
            ->select(
                'a.*',
            )
            ->where('a.id', $tags[$i])
            ->first();

            array_push($tag_selected, $datas);
        }

        foreach ($tag as $key => $value) {
            array_push($tag_all, $value->id);
        }

        $tag_diff = array_values(array_diff($tag_all, $tag_s));

        for ($i=0; $i < count($tag_diff); $i++) {
            $datan = \DB::table('tag_beritas')
            ->where('id', $tag_diff[$i])
            ->first();

            array_push($tag_n_selected, $datan);
        }

        return view('admin.berita.edit', [
            'data' => $data,
            'kategori' => $kategori,
            'kategori_selected' => $kategori_selected->id,
            // 'tag' => $tag,
            'tag_selected' => $tag_selected,
            'tag_n_selected' => $tag_n_selected
        ]);
    }

    public function update(Request $req)
    {
        // dd($req->all());
        $inputs = $req->except(['image', 'image_prefix']);
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
            \DB::table('beritas')
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
            \DB::table('beritas')
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
            'tag_id' => 'required',
            'desc_singkat' => 'required',
            'desc' => 'required',
            // 'image' => 'required|max:2048',
        ];

        $validator = \Validator::make($inputs, $rules);

        return $validator;

    }

    /*----------- KATEGORI ----------------*/
    public function indexKategori(){

        return view('admin.berita.kategori.index');
    }

    public function kategoriDatatable()
    {

        $data = \DB::table('kategori_beritas as a')
        ->select(
            'a.*',
        )
        ->get();

        return \DataTables::of($data)->make();
    }

    public function createKategori(){

        return view('admin.berita.kategori.create');
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
            \DB::table('kategori_beritas')
                ->insert($inputs);
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json(true, 200);
    }

    public function updateKategori(Request $req){

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
                \DB::table('kategori_beritas')
                    ->where('nama', $old_name)
                    ->update($inputs);
            }else{
                \DB::table('kategori_beritas')
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
                \DB::table('kategori_beritas')
                    ->where('nama', $req->nama)
                    ->delete();
            }else{
                \DB::table('kategori_beritas')
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

    /*----------- TAG ----------------*/
    public function indexTag(){

        return view('admin.berita.tag.index');
    }

    public function tagDatatable()
    {

        $data = \DB::table('tag_beritas as a')
        ->select(
            'a.*',
        )
        ->get();

        return \DataTables::of($data)->make();
    }

    public function createTag(){

        return view('admin.berita.tag.create');
    }

    public function storeTag(Request $req){

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
            \DB::table('tag_beritas')
                ->insert($inputs);
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }

        return response()->json(true, 200);
    }

    public function updateTag(Request $req){

        $inputs = $req->except('old_name');
        // dd($req->all());
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

                \DB::table('tag_beritas')
                    ->where('nama', $old_name)
                    ->update($inputs);

            }else{

                \DB::table('tag_beritas')
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

    public function deleteTag(Request $req)
    {
        // dd($req->all());
        $old_name = $req->old_name;

        try {
            if($old_name !== null)
            {
                \DB::table('tag_beritas')
                    ->where('nama', $req->nama)
                    ->delete();
            }else{
                \DB::table('tag_beritas')
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

}
