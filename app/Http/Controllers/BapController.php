<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bap;
use Illuminate\Http\Request;

use App\Http\Requests;


class BapController extends Controller
{
    public function __construct(){

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baps = Bap::all();

        return view('bap.index')->with(compact('baps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all()->lists('name', 'id');
        return view('bap.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidateBapRequest $request)
    {


        $data = $request->except('_token');

        $bap = Bap::create($data, $request->except('_token'));


        return redirect()->route('bap.show', $bap->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $bap = Bap::find($id);

        if(!$bap) {

            return redirect()->to('/bap');
        }

        return view('bap.show')->with(['bap' => $bap]);
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $users = User::all()->lists('name', 'id');
        $bap = Bap::find($id);
        if(!$bap) {

            return redirect()->to('/bap');
        }

        return view('bap.edit')->with(compact('users', 'bap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidateBapRequest $request, $id)
    {
        $bap =Bap::find($id);

        if(!$bap) {

            return redirect()->to('/bap');


        }

        $bap->title = $request->title;
        $bap->email = $request->email;


        $bap->save();

        return redirect()->route('bap.show', $bap->$id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);

        if(!$post) {

            return redirect()->route('articles.index');


        }


        $post->delete();

        return redirect()->route('articles.index');

    }
}
