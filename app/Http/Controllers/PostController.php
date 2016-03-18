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

        /**
         * On impose à l'utilisateur d'etre connecté en tant qu'admin pour accéder au create
         */

    }


    public function index()
    {
        $posts = Post::all();

        return view('articles.index')->with(compact('posts'));

        /**
         * On retourne une vue avec tout les post affichés dessus
         */

    }


    public function create()
    {

        $comments = new Comment();
        $comments->commentaire = 'nouveau commentaire';
        $comments->save();

        $users = User::all()->lists('name', 'id');
        return view('articles.index')->with(compact('users'));

        /**
         * On retourne une vue avec un formulaire pour créer un nouvel article
         * On annonce qu'on va utiliser le modèle user (pour lier l'article et
         * l'utilisateur plus tard)
         */

    }


    public function store(Requests\ValidatePostRequest $request)
    {
        $this->validate($request, [


            'commentaire' => 'required|min:10'

        ]);[

        'commentaire.required' => 'Description obligatoire',
        'commentaire.min' => 'Description > 10 caractères'


    ];

        $comments = new Comment();
        $data['post_id'] = $request->post()->id;
        $comments->commentaire            = $request->commentaire;
        $comments->save();


        $data = $request->except('_token');
        $data['user_id'] = $request->user()->id;
        $post = Post::create($data, $request->except('_token'));





        return redirect()->route('articles.show', $post->id);

        /**
         * On enregistre l'article dans la database
         */


    }


    public function show($id)
    {
        $post = Post::find($id);
        $comments = $post->comments;
        $users = User::all()->lists('name', 'id');
        if(!$post) {

            return redirect()->to('/articles');
        }

        return view('articles.show')->with(compact('post','comments', 'users'));

        /**
         * On affiche une vue avec l'article correspondant à l'url
         */

    }



    public function edit($id)
    {

        $users = User::all()->lists('name', 'id');
        $post = Post::find($id);
        if(!$post) {

            return redirect()->to('/articles');
        }

        return view('articles.edit')->with(compact('users', 'post'));

        /**
         * On affiche un formulaire pour edit un article
         */

    }

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

        /**
         * On update la database avec les valeurs du form de l'edit
         */

    }


    public function destroy($id)
    {
        $comments = Comment::find($id);

        if(!$comments) {

            return redirect()->route('articles.index');


        }


        $comments->delete();


        $post = Post::find($id);

        if(!$post) {

            return redirect()->route('articles.index');


        }


        $post->delete();

        return redirect()->route('articles.index');

        /**
         * On supprime l'article par rapport à son id
         */

    }
}
