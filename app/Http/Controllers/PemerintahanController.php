<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemerintahanController extends Controller
{


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
                \DB::table('kategori_pemerintahans')
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
