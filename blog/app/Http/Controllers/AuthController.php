<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function selamat_post(Request $request){
        $namadpn = $request["namadpn"];
        $namablkg = $request["namablkg"];
        return view('selamat', ["namadpn" => $namadpn, "namablkg" => $namablkg]);
    }

}
