<?php
namespace App\Http\Controllers;

    use App\Http\Requests;
    use Illuminate\Http\Request;
    use App\Models\Post;
    use App\Topic;
    use App\Models\MultipleMedia;
    use Illuminate\Support\Facades\Input;
    use App\User;

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
            $topics = Topic::with('user')->paginate(9);
            
            return view('sections.home2')->with('topics',$topics);
        }


        public function search()
        {
            $query = Topic::query();

             if (Input::get('value') != "all")
             {
                $query = $query->where('value', '=', Input::get('value'));
             }
            if (Input::get('type') != "all")
            {
                $query = $query->where('post_type', '=', Input::get('type'));
            }
            if (Input::get('location') != "all")
            {
                $query = $query->where('city', '=', Input::get('location'));
            }
            if (Input::get('user') != "")
            {
                $user = User::where('username', "LIKE" , '%'.Input::get('user').'%')->first();

                $query = $query->where('user_id', $user->id);
            }


            $topics = $query->paginate(9);
            return view('sections.home2')->with('topics',$topics);
        }



    }
