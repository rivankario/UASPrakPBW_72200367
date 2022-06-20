<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa1', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian(Request $request){
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')
                ->orWhere('nim', 'like', '%'.$cari.'%')
                ->paginate();
        return view('mahasiswa1', ['mahasiswa' => $mahasiswa]);
    }

    public function addmahasiswa(){
        return view('addmahasiswa1');
    }

    public function savemahasiswa(Request $request){
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidangMinat' => $request->bidangMinat
        ]);
        return redirect("/mahasiswa1")->with('alert-success', 'Berhasil disimpan');
    }

    public function editmahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa1', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidangMinat = $request->bidangMinat;
        $mahasiswa->save();
        return redirect('/mahasiswa1'.$_COOKIE['pageurl'])->with('alert', 'Berhasil diupdate');
    }

    public function deletemahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa1'.$_COOKIE['pageurl'])->with('alert-danger', 'Berhasil dihapus');
    }
    public function home()
    {
        return view('home1');
    }
}
