<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller {
	
	public function index()
	{
        $topics = Topic::with('user')->get();
        return view('admin::sections.menus.index', compact('topics'));
	}

	public function activate($id)
    {
        Topic::where('id', $id)->update(['status' => 1]);
        return redirect()->route('admin.topic.get');

    }

    public function deactivate($id)
    {
        Topic::where('id', $id)->update(['status' => 0]);
        return redirect()->route('admin.topic.get');
     }
    public function delete($id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->route('admin.topic.get');

    }
    public function getEdit($id)
    {
        $topic = Topic::where('id',$id)->with('user')->first();
         return view('admin::sections.menus.create_edit', compact('topic'));

    }
    public function postEdit(Request $request)
    {
        $location=       explode(",",$request->location);
        $lat= $location[0];
        $long= $location[1];
        $city = $location[2];
        $file_type =Null;
        $media_url =Null;
        $thumbnail_url=Null;
        if($request->hasfile('file'))
        {
            $file = $request->file('file');

            $file_type =$file->getClientOriginalExtension();
            $input['imagename'] = time().'.'.$file->getClientOriginalExtension();

            $destinationPath = 'public/images';

            $file->move($destinationPath, $input['imagename']);
            $media_url=   $input['imagename'];

        }
        if($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            if(substr($file->getMimeType(), 0, 5) == 'image') {

                $input['imagename'] = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath =  'public/images';
                $file->move($destinationPath, $input['imagename']);
                $thumbnail_url = $input['imagename'];
            }
        }
        $topic = Topic::find($request->topic_id);

        $topic->title = $request->title;
            $topic->content = $request->content;
             if($request->hasfile('file')) {
                 $topic->media_url = $media_url;
                 $topic->media_type = $file_type;
             }
             if($request->hasfile('thumbnail')) {

                 $topic->thumbnail = $thumbnail_url;
             }
            $topic->city = $city;
            $topic->post_type = $request['post_type'];
            $topic->status ='1';
            $topic->lat =$lat;
            $topic->long = $long;
            $topic->value= $request->value;
            $topic->save();



        return redirect()->back();    }

}