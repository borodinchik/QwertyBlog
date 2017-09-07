<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostsRequest;
use App\Http\Requests\PostsUpdateRequest;
use App\Like;
use App\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Posts $posts)
    {
        $posts = $posts->latest()->get();

        return view('posts.index', compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {

        $post = new  Posts;

        $post->title = Input::get('title');

        $post->body = Input::get('body');

        $post->author_name = Input::get('author_name');



        if (Input::hasFile('thumbnail'))

        {

            $file = Input::file('thumbnail');


            $name = time() . '-' . $file->getClientOriginalName();

            $file = $file->move(public_path().'/img/', $name);

            $post->thumbnail = $name;
        }
        $post->save();

        return redirect('/')->with('massage', 'post has been added successfully');


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Posts $posts)
    {
        $posts = $posts->find($id);
        return view('posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsUpdateRequest $request, $id, Posts $posts)
    {
        $posts = $posts->find($id);

        $postUpdate = $request->all();

        $posts->update($postUpdate);

        return redirect('/')->with('massage', 'post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)

    {
        if (auth()->user()->id !== $posts->user_id){
            abort(401, 'unauthorized');
        }
        $posts->delete();

        return redirect('/')->with('massage', 'Post deleted!');
    }
}
