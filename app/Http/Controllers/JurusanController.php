<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::orderBy('id', 'asc')->get();
        return view('contents.jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan,
            
        ]);
        Alert::success('Jurusan Created', 'Jurusan Berhasil dibuat');
        return redirect()->to('jurusan')->with('message', 'Data Berhasil di simpan');

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
        $edit = Jurusan::findOrFail($id);
        return view('contents.jurusan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Jurusan::where('id', $id)->update([
            'nama_jurusan' => $request->nama_jurusan,
            

        ]);
        Alert::success('Jurusan Edited', 'Jurusan Berhasil Diedit');
        return redirect()->to('jurusan')->with('message', 'Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
   
    }
    public function softdelete(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        Alert::warning('Jurusan Deleted', 'Jurusan Berhasil Didelete');
        return redirect()->to('jurusan')->with('success', 'Data Berhasil Dihapus Sementara');
    }
}
