<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Http\Controllers\HomeController;

class PostController extends Controller
{

    public static function info($id)
    {
        $viewData = [];
        $post = Posts::findOrFail($id);
        //$posts = PostController::$posts[$id-1];

        $viewData["title"] = $post->getTitle()." - My Blog";
        $viewData["post"] = $post;
        return view('posts.info')->with("viewData", $viewData);
    }
}

