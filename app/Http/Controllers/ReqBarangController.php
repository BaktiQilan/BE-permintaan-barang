<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pegawai;
use App\Models\ReqBarang;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ReqBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$reqbarang = ReqBarang::all();
        $reqbarang = DB::table('req_barangs')
                        ->join('barangs', 'req_barangs.barang_id', '=', 'barangs.id')
                        ->join('pegawais', 'req_barangs.pegawai_id', '=', 'pegawais.id')
                        ->select('barangs.*', 'pegawais.*', 'req_barangs.*')
                        ->get();
        $response = [
            'message' => 'Detail Permintaan Barang',
            'data' => $reqbarang
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pegawai_id' => ['required'],
            'barang_id' => ['required'],
            'kuantiti' => ['required'],
            'tgl_req' => ['required'],
            'keterangan' => ['required']
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $reqbarang = ReqBarang::create($request->all());
            $barang = Barang::where(['id' => $reqbarang['barang_id']])->first();
            if($barang){
                $stok = $barang->stok - (int) $request->kuantiti;
                if((int) $stok < 0){
                    $response = [
                        'message' => $barang
                    ];
                    return response()->json($response, Response::HTTP_EXPECTATION_FAILED);
                } else {
                    $barang->update(['stok' => $stok]);
                }
            } else {
                $response = [
                    'message' => 'NIK pegawai atau Nama Barang tidak tersedia'
                ];
                return response()->json($response, Response::HTTP_OK);
            }
            $response = [
                'message' => 'Permintaan Barang Berhasil disimpan',
                'data' => $reqbarang
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e){
            return response()->json([
                'message' => 'Gagal', $e->errorInfo
            ]);
        }

    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reqbarang = ReqBarang::FindOrFail($id);
        $response = [
            'message' => 'Detail Permintaan Barang',
            'data' => $reqbarang
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reqbarang = ReqBarang::FindOrFail($id);
        $validator = Validator::make($request->all(), [
            'pegawai_id' => ['required'],
            'barang_id' => ['required'],
            'kuantiti' => ['required'],
            'tgl_req' => ['required'],
            'keterangan' => ['required']
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $reqbarang->update($request->all());
            $response = [
                'message' => 'Permintaan Barang diperbaharui',
                'data' => $reqbarang
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e){
            return response()->json([
                'message' => 'Gagal'. $e->errorInfo
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reqbarang = ReqBarang::FindOrFail($id);

        try {
            $reqbarang->delete();
            $response = [
                'message' => 'Permintaan Barang dihapus'
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e){
            return response()->json([
                'message' => 'Gagal'. $e->errorInfo
            ]);
        }
    }
}
