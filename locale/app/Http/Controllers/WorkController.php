<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;

class WorkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWork()
    {
        $works = Post::where('post_status', 'publish')->where('post_type', 'work')->paginate(10);
        $recent_posts = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(5)->get();
        $categories = Category::all();

        return view('sections.work', compact('works', 'recent_posts', 'categories'));
    }
    
    public function getSingleWork($slug)
    {
        $work = Post::where('slug', $slug)->first();

        if(!count($work) > 0) {
            abort(404);
        }
        
        $recent_works = Post::where('post_status', 'publish')->where('post_type', 'work')->orderby('id', 'DESC')->take(5)->get();
        $categories = Category::all();

        return view('sections.single_Work', compact('work', 'recent_works', 'categories'));
    }
}
