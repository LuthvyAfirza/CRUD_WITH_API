<?php

namespace App\Http\Controllers;

use App\Models\Barang_M;
use Illuminate\Http\Request;
use Respone;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Barang_M::paginate(10);
        return[ 'barang' => $table,
];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_table = Barang_M::create([
          'namaBarang' => $request->namaBarang,
          'deskripsiBarang' => $request->deskripsiBarang,
          'harga' => $request->harga,
        ]);
        return response()->json([
            'message' => "Create successfully",
            'data' => $data_table
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang_M  $api
     * @return \Illuminate\Http\Response
     */
    public function show(Barang_M $data_table)
    {
        return response()->json([
          'data_table' => $data_table
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang_M  $api
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang_M  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang_M $data_table)
    {
        $data_table->namaBarang = $request->namaBarang;
        $data_table->deskripsiBarang = $request->deskripsiBarang;
        $data_table->harga = $request->harga;
        $data_table->save();
        
        return response()->json([
            'message' => "Update successfully",
            'data' => $data_table
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang_M  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang_M $data_table)
    {
        $data_table->delete();
        return response()->json([
            'message' => 'barang deleted'
        ], 204);
    }
}
