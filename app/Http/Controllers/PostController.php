<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin', ['except' => ['index', 'show']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('articles.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*  $post = new Post;
         $post->title = 'un autre article';
         $post->description = 'une autre description';
         $post->save(); */


        $users = User::all()->lists('name', 'id');
        return view('articles.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidatePostRequest $request)
    {




        /*
        $this->validate($request, [
            'user_id' => 'required',
            'title'   => 'required|min:10',
            'description' => 'required|min:10'

        ]);[
            'user_id.required' => 'User id manquant',
            'title.required' => 'Titre obligatoire',
            'title.min' => 'Titre > 10 caractères',
            'description.required' => 'Description obligatoire',
            'Description.min' => 'Description > 10 caractères'


    ];
        */
        /*
        $post = new Post;
        $post->user_id          = $request->user_id;
        $post->title            = $request->title;
        $post->description      = $request->description;

        $post->save();
*/
        //Méthode 2
        $data = $request->except('_token');
        $data['user_id'] = $request->user()->id;
        $post = Post::create($data, $request->except('_token'));





        return redirect()->route('articles.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $post = Post::find($id);
        $comments = $post->comments;
        $users = User::all()->lists('name', 'id');
        if(!$post) {

            return redirect()->to('/articles');
        }

        return view('articles.show')->with(compact('post','comments', 'users'));
    }


    /*
    $post = Post::find($id);
    if($post) {
        return $post->title;
    }
    else {
        return 'Pas d\'articles !';
    }*/


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $users = User::all()->lists('name', 'id');
        $post = Post::find($id);
        if(!$post) {

            return redirect()->to('/articles');
        }

        return view('articles.edit')->with(compact('users', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidatePostRequest $request, $id)
    {
        $post =Post::find($id);

        if(!$post) {

            return redirect()->to('/articles');


        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;

        $post->save();

        return redirect()->route('articles.show', $post->$id);


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
