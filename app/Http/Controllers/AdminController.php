<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bap;
use App\Http\Requests;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('Admin');
    }


    public function index()
    {
        $baps = Bap::all();

        return view('admin.bap')->with(compact('baps'));
    }
    public function bap(){
        return view ('admin.bap');
    }

    public function update(Requests\ValidateValidationBap $request, $id)
    {
        $bap =Bap::find($id);

        if(!$bap) {

            return redirect()->to('/bap');


        }

        $bap->valid = $request->valid;



        $bap->save();

        return redirect()->route('admin.index');


    }

}
