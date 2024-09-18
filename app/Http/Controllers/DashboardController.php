<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user();
        $level = $users->level;
        return view('dashboard.index', compact('users','level'));
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
        $levels = Level::get();
        $edit = User::findOrFail($id);
        return view('dashboard.edit', compact('edit','levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        User::where('id', $id)->update([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => ($request->password ? Hash::make($request->password) : $user->password)
        ]);
        Alert::success('Profile Edited', 'Profile Berhasil Diedit');
        return redirect()->to('dashboard')->with('message', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
