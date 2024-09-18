<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use RealRashid\SweetAlert\Facades\Alert;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::orderBy('id', 'asc')->get();
        return view('contents.levels.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('contents.levels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Level::create([
            'nama_level' => $request->nama_level,
        ]);
        Alert::success('Level Created', 'Level Baru Berhasil Dibuat');
        return redirect()->to('levels')->with('message', 'Data Berhasil di simpan');

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
        $edit = Level::findOrFail($id);
        return view('contents.levels.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Level::where('id', $id)->update([
            'nama_level' => $request->nama_level,

        ]);
        Alert::success('Level Edited', 'Level Berhasil Diedit');
        return redirect()->to('levels')->with('message', 'Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    }
    public function softdelete(string $id)
    {
        $level = Level::findOrFail($id);
        $level->delete();
        Alert::warning('Level Deleted', 'Level Berhasil Didelete');
        return redirect()->to('levels')->with('success', 'Data Berhasil Dihapus Sementara');
    }
}
