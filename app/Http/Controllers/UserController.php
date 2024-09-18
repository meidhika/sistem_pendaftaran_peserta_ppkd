<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserJurusan;
use App\Models\Level;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('level')->orderBy('id', 'asc')->get();

        return view('contents.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        $levels = Level::all();
        return view('contents.users.create', compact('levels', 'jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user =  User::create([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        if (in_array($user->id_level, [4, 5])) {
            // Siapkan array untuk dimasukkan ke tabel user_jurusan
            $jurusanData = [];
            foreach ($request->id_jurusan as $id_jurusan) {
                $jurusanData[] = [
                    'id_user' => $user->id,
                    'id_jurusan' => $id_jurusan,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Insert multiple jurusan sekaligus
            UserJurusan::insert($jurusanData);
        }
        Alert::success('User Created', 'User Berhasil Diedit');
        return redirect()->to('users')->with('message', 'Data Berhasil di simpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::with('jurusans', 'level')->findOrFail($id);
        
        return view('contents.users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jurusans = Jurusan::all();
        $levels = Level::get();

        $edit = User::findOrFail($id);
        $emptyJurusan = UserJurusan::where('id_user', $edit->id)->pluck('id_jurusan')->toArray();
        $selectedJurusan = UserJurusan::where('id_user', $edit->id)
    ->with('jurusan') // Load the related jurusan data
    ->get();
        return view('contents.users.edit', compact('edit','levels', 'jurusans', 'emptyJurusan','selectedJurusan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        User::where('id', $id)->update([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => ($request->password ? Hash::make($request->password) : $user->password)
        ]);

        if (in_array($user->id_level, [4, 5])) {
            // Siapkan array untuk dimasukkan ke tabel user_jurusan
            $jurusanData = [];
            foreach ($request->id_jurusan as $id_jurusan) {
                $jurusanData[] = [
                    'id_user' => $user->id,
                    'id_jurusan' => $id_jurusan,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Insert multiple jurusan sekaligus
            UserJurusan::insert($jurusanData);
        }
        Alert::success('User Edited', 'User Berhasil Diedit');
        return redirect()->to('users')->with('message', 'Data Berhasil di Update');
    }
    /**
     * Remove the specified resource from storage.
     */

    public function softdelete(string $id)
    {
        $profile = User::findOrFail($id);
        $profile->delete();
        Alert::warning('User Deleted', 'User Berhasil Didelete');
        return redirect()->to('users')->with('success', 'Data Berhasil Dihapus Sementara');
    }

    public function destroy($id_user, $id_jurusan){
        $userJurusan = UserJurusan::where('id_user', $id_user)->where('id_jurusan', $id_jurusan)->first();


        if ($userJurusan) {
            $userJurusan->delete();
            Alert::warning('User Jurusan Deleted', 'Jurusan User Berhasil Didelete');
            return redirect()->back()->with('success', 'Jurusan berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Jurusan tidak ditemukan.');
    }
}
