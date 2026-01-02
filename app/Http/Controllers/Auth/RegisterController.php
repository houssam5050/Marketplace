<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
       
        $row = DB::table('users')->where('username', $req->username)->first();
        if(empty($row) == true)
        {
            DB::table('users')->insert([
                
                'username' => $req->username,
                'email' =>$req->email,
                'password' =>  Hash::make($req->password),
            ]);
            return redirect('/login');
        }
        else

            echo 'Already exists';
    }
}