<?php

namespace App\Http\Controllers;
 //Nama     : M.Faishal Rafid
     // NIM      : 6706223073
      //Kelas    : 4603
      //
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.daftarPengguna', compact('users'));
    }

    public function showUser($username) {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    public function create()
    {
    return view('user.registrasi');
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }
}