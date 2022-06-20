<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view('user1', ['user' => $user]);
    }

    public function adduser(){
        return view('adduser1');
    }

    public function saveuser(Request $request){
        $user = User::create([
            'nik' => $request -> nik,
            'name' => $request -> name,
            'email' => $request -> email, 
            'notelp'=> $request-> notelp,
            'password' => bcrypt($request -> password)
        ]);

        return redirect('/user1');
    }

    public function login()
    {
        return view('welcome');
    }

    public function ceklogin(request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/');
        }
        else{
            return redirect('/home1');
        }
    }

    public function edituser($id){
        $user = user::find($id);
        return view('edituser1', ['user' => $user]);
    }

    public function updateuser($id, Request $request){
        $user = User::find($id);
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->notelp = $request->notelp;
        $user->save();
        return redirect('/user1'.$_COOKIE['pageurl'])->with('alert', 'Berhasil diupdate');
    }

    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('user1'.$_COOKIE['pageurl'])->with('alert-danger', 'Berhasil dihapus');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function pencarian(Request $request){
        $cari = $request->cari;
        $user = User::where('id', 'like', '%'.$cari.'%')
                ->orWhere('name', 'like', '%'.$cari.'%')
                ->paginate();
        return view('user1', ['user' => $user]);
    }
}
