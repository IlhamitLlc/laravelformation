<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts =[
         'Mon supper  1 titre',
         'Mon supper 2 titre'];
        return view('articles', [
            'posts' => $posts
        ]);
    }
    public function show($id){
        $posts =[
         1 =>'Mon titre n 1',
         2 =>'Mon titre n 2'
        ];
        $post = $posts[$id] ?? 'pas de titre';

        return view('article', [
            'post' => $posts
        ]);
    }
    public function contact(){
        return view('contact');
    }
}
