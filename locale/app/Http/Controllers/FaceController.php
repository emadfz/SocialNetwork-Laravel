<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;

class FaceController extends Controller
{
    public function getFace()
    {
        $faces = Post::where('post_status', 'publish')->where('post_type', 'face')->paginate(10);
        $recent_face = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();
        $question = Post::where('post_status', 'publish')->where('post_type', 'face-Question')->paginate(10);

        return view('sections.face', compact('faces', 'recent_face', 'categories','question'));
    }

    public function getSingleFace($slug)
    {
        $face = Post::where('slug', $slug)->first();

        if(!count($face) > 0) {
            abort(404);
        }

        $recent_face = Post::where('post_status', 'publish')->where('post_type', 'face')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();
        $question = Post::where('post_status', 'publish')->where('post_type', 'face-Question')->paginate(10);

        return view('sections.single_face', compact('face', 'recent_face', 'categories','question'));
    }
}


