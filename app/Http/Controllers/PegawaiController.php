<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        $response = [
            'message' => 'List Pegawai',
            'data' => $pegawai
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
            'nik' => ['required'],
            'nama_p' => ['required'],
            'departemen' => ['required']
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $pegawai = Pegawai::create($request->all());
            $response = [
                'message' => 'Pegawai berhasil ditambahkan',
                'data' => $pegawai
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch(QueryException $e) {
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
        $pegawai = Pegawai::FindOrFail($id);
        $response = [
            'message' => 'Detail Pegawai',
            'data' => $pegawai
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
        $pegawai = Pegawai::FindOrFail($id);
        $validator = Validator::make($request->all(), [
            'nik' => ['required'],
            'nama_p' => ['required'],
            'departemen' => ['required']

        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $pegawai->update($request->all());
            $response = [
                'message' => 'Pegawai berhasil diubah',
                'data' => $pegawai
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch(QueryException $e) {
            return response()->json([
                'message' => 'Gagal', $e->errorInfo
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
        $pegawai = Pegawai::FindOrFail($id);

        try {
            $pegawai->delete();
            $response = [
                'message' => 'Pegawai berhasil dihapus'
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch(QueryException $e) {
            return response()->json([
                'message' => 'Gagal'. $e->errorInfo
            ]);
        }
    }
}
