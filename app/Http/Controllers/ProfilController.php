<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bap;
use App\Models\User;
use App\Http\Requests;


class ProfilController extends Controller
{




    public function index()
    {
        $users = User::all();

        return view('profil.index')->with(compact('users'));
    }



}