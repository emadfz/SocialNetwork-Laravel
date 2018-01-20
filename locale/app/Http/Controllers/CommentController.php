<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $comment =Comment::create([
            'comment' => $request->comment,
            'topic_id' => $request->topic_id,
            'user_id' =>  \Auth::id()
        ]);
        if ( ! $comment)
        {
            return redirect()->back();
        }else{
            return redirect()->route('frontend.post.get', ['id' => $request->topic_id]);

        }
    }
}
