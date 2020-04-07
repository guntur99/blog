<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use File;

class KependudukanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.kependudukan.index');
    }

    public function datatable()
    {
        $data = \DB::table('kependudukans')
            ->get();
            // dd($data);
        return \DataTables::of($data)->make();
    }

    public function update(Request $req){

        $inputs = $req->except('id');

        $validate = $this->verify($inputs);

        if ($validate->fails()) {
            return response()->json([
                'message' => $validate->errors()->first()
            ], 400);
        }

        try {
            \DB::table('kependudukans')
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

    public function verify($inputs){


        $rules = [
            'nama' => 'required',
            'agama' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan_desa' => 'required',
            'status_perkawinan' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ];


        $validator = \Validator::make($inputs, $rules);

        return $validator;

    }

    public function create()
    {
        return view('admin.kependudukan.create');
    }

    public function store(Request $req)
    {

        $inputs = $req->all();

        $inputs['created_at'] = Carbon::now()->toDateTimeString();
        $inputs['created_by'] = $id;

        // dd($inputs);

        $validate = $this->verify($inputs);

        if ($validate->fails()) {
            return response()->json([
                'message' => $validate->errors()->first()
            ], 400);
        }

        try {
            \DB::table('kependudukans')
                ->insert($inputs);

        } catch (\Exception $e) {

            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return response()->json([
                'message' => $e->getMessage()
            ], 500);

        }

        return response()->json(true, 200);
    }

    public function importExcelFile(Request $req){

        $inputs = $req->import_excel_file;
        $test = strip_tags($inputs);
        $decode_arry = \json_decode($test);
        $dd = [];

        for ($i=1; $i < count($decode_arry); $i++) {

            $object[] = (object) [
                'nik' => $decode_arry[$i][0],
                'nama' => $decode_arry[$i][1],
                'tempat_lahir' => $decode_arry[$i][2],
                'tanggal_lahir' => $decode_arry[$i][3],
                'jenis_kelamin' => $decode_arry[$i][4],
                'alamat' => $decode_arry[$i][5],
                'rt' => $decode_arry[$i][6],
                'rw' => $decode_arry[$i][7],
                'kelurahan_desa' => $decode_arry[$i][8],
                'kecamatan' => $decode_arry[$i][9],
                'agama' => $decode_arry[$i][10],
                'status_perkawinan' => $decode_arry[$i][11],
                'kewarganegaraan' => $decode_arry[$i][12],
            ];

        }

        for ($j=0; $j < count($object); $j++) {
            // dd(json_decode(json_encode($object[$j]), true));
            $ttest = json_decode(json_encode($object[$j]), true);
            try {
                \DB::table('kependudukans')
                                        ->insert($ttest);
            } catch (\Exception $e) {
                \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
                return response()->json([
                                        'message' => $e->getMessage()
                                    ], 500);
            }
        }

        return response()->json(true, 200);

    }

    public function delete(Request $req)
    {
        // dd($req->id);

        try {
            \DB::table('kependudukans')
                        ->where('id', $req->id)
                        ->delete();
        } catch (\Exception $e) {
            \Log::error('Error : '.$e->getMessage().' File : '.$e->getFile().' ('.$e->getLine().') -- Request : '.json_encode($inputs));
            return sendResponse([
                        'message' => $e->getMessage()
                    ], 500);
        }

    }

}
