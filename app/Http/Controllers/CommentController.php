<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Http\Controllers\PostController;
   
class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;

        $comment->user()->associate($request->user());

        $post = Posts::find($request->post_id);

        $post->comments()->save($comment);

        $comment->save();
        
        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $post = Posts::find($request->post_id);


        $reply->save();

        return back();

    }

}