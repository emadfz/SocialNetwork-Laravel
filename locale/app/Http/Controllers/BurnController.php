<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;

class BurnController extends Controller
{
    public function getBurn()
    {
        $burns = Post::where('post_status', 'publish')->where('post_type', 'burn')->paginate(10);
        $recent_burn = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();
        $question = Post::where('post_status', 'publish')->where('post_type', 'burn-Question')->paginate(10);

        return view('sections.burn', compact('burns', 'recent_burn', 'categories','question'));
    }

    public function getSingleBurn($slug)
    {
        $burn = Post::where('slug', $slug)->first();

        if(!count($burn) > 0) {
            abort(404);
        }
        $question = Post::where('post_status', 'publish')->where('post_type', 'burn-Question')->paginate(10);

        $recent_burn = Post::where('post_status', 'publish')->where('post_type', 'burn')->orderby('id', 'DESC')->take(10)->get();
        $categories = Category::all();

        return view('sections.single_burn', compact('burn', 'recent_burn', 'categories','question'));
    }
}


