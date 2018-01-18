<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\User;

use App\Http\Requests;

class PostController extends Controller
{
    public function addPost()
    {
        return view('sections.add-post');
    }
    public function create(Request $request)
    {
        $location=       explode(",",$request->location);
        $lat= $location[0];
        $long= $location[1];
        $file_type =Null;
        $media_url =Null;
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
           
            $file_type =$file->getClientOriginalExtension();
            $input['imagename'] = time().'.'.$file->getClientOriginalExtension();
        
            $destinationPath =asset('public').'/images';
        
            $file->move($destinationPath, $input['imagename']);
            $media_url=   $input['imagename'];
            
        }
        Topic::create([
            'title' => $request->title,
            'content' => $request->content,
            'media_url' =>$media_url,
            'media_type' => $file_type,
            'post_type' => $request['post_type'],
            'status' =>'0',
            'lat' =>$lat,
            'long' => $long,
            'value' =>$request->value,
            'user_id' =>  \Auth::id()
        ]);

        return redirect()->back();
    }
    public function getMap()
    {
        $topics =  Topic::get();
        return view('sections.map',['topics' => $topics]);
    }
}
