<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
//use App\Http\Controllers\Controller;

class post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // vigneshwar sridharan
        $value1 = 'something from somewhere';

setcookie("TestCookie", $value1);
        $value = $request->cookie('_ga');

        $data = DB::table('post')->get();
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        echo 'cookie : '.$value;

        ?>
        <form action="/laravel/blog/public/post" method="POST">
          <input type="text" name="post_title">
          <input type="text" name="post_auth">
          <input type="text" name="post_msg">
          <button type="submit">Add</button>
        </form>
        <?php
        echo 'i this index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo '<form action="/laravel/blog/public/post" method="POST">';
        echo '<input type="hidden" name="_token" value="'.csrf_token().'">';
        echo '<input type="text" name="post_title">';
        echo '<input type="text" name="post_auth">';
        echo '<input type="file" name="post_msg">';
        echo '<button type="submit">Add</button>';
        echo '</form>';

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
        // $data = $request->photo->storeAs('images', $_POST['post_msg']);
        // DB::table('post')->insert(
        //   [
        //     'post_name'=> $_POST['post_title'],
        //     'post_auth'=> $_POST['post_auth'],
        //     'post_msg'=> $_POST['post_msg']
        //   ]
        // );
        echo $request->post_title;

        echo $request->post_auth;

        echo $request->post_msg;
        // echo 'hello';
        echo '<pre>';
        print_r($request->headers);
        echo '</pre>';

        echo 'i this index';
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
        echo $id;
        $data = DB::table('post')->where('post',$id)->get();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
