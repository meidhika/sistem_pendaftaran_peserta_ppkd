<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gelombang;
use RealRashid\SweetAlert\Facades\Alert;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangs = Gelombang::orderBy('id', 'asc')->get();
        return view('contents.gelombang.index', compact('gelombangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          Gelombang::create([
            'nama_gelombang' => $request->nama_gelombang,
            'aktif' => $request->aktif,
        ]);
        Alert::success('Gelombang Created', 'Gelombang Berhasil dibuat');
        return redirect()->to('gelombang')->with('message', 'Data Berhasil di simpan');


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
        $edit = Gelombang::findOrFail($id);
        return view('contents.gelombang.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           Gelombang::where('id', $id)->update([
            'nama_gelombang' => $request->nama_gelombang,
            'aktif' => $request->aktif,
        ]);
        Alert::success('Gelombang Edited', 'Gelombang Berhasil Diedit');
        return redirect()->to('gelombang')->with('message', 'Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


    }
    public function softdelete(string $id)
    {
        $gelombang = Gelombang::findOrFail($id);
        $gelombang->delete();
        Alert::warning('Gelombang Deleted', 'Gelombang Berhasil Didelete');
        return redirect()->to('gelombang')->with('success', 'Data Berhasil Dihapus Sementara');
    }

    public function updateStatusGelombang(Request $request, $id)
    {
        $gelombang = Gelombang::find($id);
        $gelombang->aktif = $request->input('aktif');
        $gelombang->save();
        Alert::success('Gelombang Edited', 'Gelombang Berhasil Diedit');
        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }
}
