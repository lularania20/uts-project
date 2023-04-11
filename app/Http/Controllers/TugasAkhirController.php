<?php

namespace App\Http\Controllers;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugasAkhir = TugasAkhir::paginate(10);
        return response()->json([
            'data' => $tugasAkhir
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tugasAkhir = TugasAkhir::create([
            'id_mahasiswa' => $request->id_mahasiswa,
            'id_dosen_pembimbing_1'=> $request->id_dosen_pembimbing_1,
            'id_dosen_pembimbing_2'=>$request->id_dosen_pembimbing_2,
            'judul'=>$request->judul,
            'metode'=>$request->metode,
        ]);
        return response()->json([
            'data' => $tugasAkhir
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TugasAkhir  $tugasAkhir
     * @return \Illuminate\Http\Response
     */
    public function show(TugasAkhir $tugasAkhir)
    {
        return response()->json([
            'data' => $tugasAkhir
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TugasAkhir  $tugasAkhir
     * @return \Illuminate\Http\Response
     */
    // public function edit(TugasAkhir $tugasAkhir)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TugasAkhir  $tugasAkhir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TugasAkhir $tugasAkhir)
    {
        $tugasAkhir->id_mahasiswa = $request->id_mahasiswa;
        $tugasAkhir->id_dosen_pembimbing_1 = $request->id_dosen_pembimbing_1;
        $tugasAkhir->id_dosen_pembimbing_2 = $request->id_dosen_pembimbing_2;
        $tugasAkhir->judul = $request->judul;
        $tugasAkhir->metode = $request->metode;
        $tugasAkhir->save();

        return response()->json([
            'data' => $tugasAkhir
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TugasAkhir  $tugasAkhir
     * @return \Illuminate\Http\Response
     */
    public function destroy(TugasAkhir $tugasAkhir)
    {
        $tugasAkhir->delete();
        return response()->json([
            'message' => 'tugas akhir deleted'
        ], 204);
    }
}
