<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $response = [
            'message' => 'List Barang',
            'data' => $barang
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
            'nama_b' => ['required'],
            'lokasi' => ['required'],
            'stok' => ['required', 'numeric'],
            'satuan' => ['required']
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $barang = Barang::create($request->all());
            $response = [
                'message' => 'Barang berhasil ditambahkan',
                'data' => $barang
            ];
            return response()->json($response, Response::HTTP_CREATED);
        }catch(QueryException $e) {
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
        $barang = Barang::FindOrFail($id);
        $response = [
            'message' => 'Detail Barang',
            'data' => $barang
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
        $barang = Barang::FindOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama_b' => ['required'],
            'lokasi' => ['required'],
            'stok' => ['required', 'numeric'],
            'satuan' => ['required']
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $barang->update($request->all());
            $response = [
                'message' => 'Barang berhasil diubah',
                'data' => $barang
            ];
            return response()->json($response, Response::HTTP_OK);
        }catch(QueryException $e) {
            return response()->json([
                'message' => 'Gagal'.$e->errorInfo
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
        $barang = Barang::findOrFail($id);

        try {
            $barang->delete();
            $response = [
                'message' => 'Barang dihapus'
            ];
            return response()->json($response, Response::HTTP_OK);
        }catch(QueryException $e) {
            return response()->json([
                'message' => 'Gagal'.$e->errorInfo
            ]);
        }
    }
}
