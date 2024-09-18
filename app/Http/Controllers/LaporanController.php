<?php

namespace App\Http\Controllers;
use App\Models\PesertaPelatihan;
use App\Models\Gelombang;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $gelombang = Gelombang::all(); // Pastikan ini mengembalikan Collection atau array
    return view('contents.report.laporan', compact('gelombang'));
}

    public function getPesertaByGelombang($id_gelombang)
    {
        $peserta = PesertaPelatihan::where('id_gelombang', $id_gelombang)
                    ->with('jurusan', 'gelombang')
                    ->get();
        return response()->json($peserta);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
