<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return  view("form");
    }

    public function debug(Request $request)
    {
        //recebe todos os campos exceto _token
        var_dump($request->except(['_token']));

        $post = new Post();
        $post->title =  $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->get('content');
        $post->save();
//        $post->create($request->except(['_token']));
    }
}
