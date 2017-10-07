<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('index',['posts' => $posts, 'users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $posts = Post::select('*')->where('user_id', Auth::user()->id)->get();
        // print_r($posts);
        return view('create', [ 'posts' => $posts ] );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post;
        $post->message = $request->username;
        $post->user_id = Auth::user()->id;
        if($post->save())
        {
          return redirect('post/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        // $posts = Post::select('*')->where('id', $id)->get();
        $posts = Post::find($id);

        if(Auth::user()->id != $posts->user_id)
        {
          return redirect('post/');
        }
        if ($request->isMethod('post')) {
          //
          if(Auth::user()->id == $posts->user_id)
          {
            $posts->message = $request->message;
            if($posts->save())
              return redirect('post/create');
          }
          echo "sorry :)";
          return;
        }

        return view('edit',['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $posts = Post::find($id);
        if(Auth::user()->id == $posts->user_id)
        {
          if(Post::destroy($id))
          {
            return redirect('post/create');
          }
        }

    }
}
