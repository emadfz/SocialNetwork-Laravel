<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;

class BodyController extends Controller
{
    public function getBody()
    {
        $bodys = Post::where('post_status', 'publish')->where('post_type', 'body')->paginate(10);
        $recent_body = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();
        $question = Post::where('post_status', 'publish')->where('post_type', 'body-Question')->paginate(10);

        return view('sections.Body', compact('bodys', 'recent_body', 'categories','question'));
    }

    public function getSingleBody($slug)
    {
        $body = Post::where('slug', $slug)->first();

        if(!count($body) > 0) {
            abort(404);
        }
        $question = Post::where('post_status', 'publish')->where('post_type', 'body-Question')->paginate(10);

        $recent_body = Post::where('post_status', 'publish')->where('post_type', 'body')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();

        return view('sections.single_Body', compact('body', 'recent_body', 'categories','question'));
    }
}


