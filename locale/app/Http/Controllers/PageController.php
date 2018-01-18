<?php
namespace App\Http\Controllers;

    use App\Http\Requests;
    use Illuminate\Http\Request;
    use App\Models\Post;
    use App\Topic;
    use App\Models\MultipleMedia;


    class PageController extends Controller
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
        public function getHome()
        {
            $topics = Topic::orderBy('created_at', 'desc')->limit(3)->with('user')->get();
            
            
            return view('sections.home')->with('topics',$topics);
        }
        public function getHome2()
        {
            if(\Auth::guest())
            {
                return view('sections.home');
            }
            $topics = Topic::with('user')->paginate(9);
            
            return view('sections.home2')->with('topics',$topics);
        }



    }
