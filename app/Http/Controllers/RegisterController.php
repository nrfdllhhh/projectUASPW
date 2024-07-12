<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function form(){
        return view('register.form');

    }
    public function simpan(Request $request){
    $userModel=new User;
    $userModel->name=$request->username;
    $userModel->email=$request->email;
    $userModel->password= hash::make($request->password);
    $userModel->role= 'umkm';
    $userModel->save();
    return redirect(route('login'));

    }
}
