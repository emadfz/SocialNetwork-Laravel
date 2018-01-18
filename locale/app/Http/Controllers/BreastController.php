<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;

class BreastController extends Controller
{
    public function getBreast()
    {
        $breasts = Post::where('post_status', 'publish')->where('post_type', 'breast')->paginate(10);
        $recent_breast = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();
        $question = Post::where('post_status', 'publish')->where('post_type', 'breast-Question')->paginate(10);

        return view('sections.Breast', compact('breasts', 'recent_breast', 'categories','question'));
    }

    public function getSingleBreast($slug)
    {
        $breast = Post::where('slug', $slug)->first();

        if(!count($breast) > 0) {
            abort(404);
        }
        $question = Post::where('post_status', 'publish')->where('post_type', 'breast-Question')->paginate(10);

        $recent_breast = Post::where('post_status', 'publish')->where('post_type', 'breast')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();

        return view('sections.single_breast', compact('breast', 'recent_breast', 'categories','question'));
    }
}


