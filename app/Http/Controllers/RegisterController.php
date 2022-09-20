<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionregister(Request $request){

        $reg = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // if (Auth::Attempt($reg)){
        //     Session::flash('berhasil', 'Pendaftaran berhasil');
        // }

        return redirect('register');

    }
}
