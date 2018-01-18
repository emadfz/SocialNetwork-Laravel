<?php namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Modules\Admin\Models\Media;
use Modules\Admin\Models\MultipleMedia;
use Modules\Admin\Models\Post;
use Modules\Admin\Models\PostTranslation;
use Modules\Admin\Models\PostCategory;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Language;
use App\Models\User;

use Modules\Admin\Http\Requests\PostRequest;
use Modules\Admin\Http\Requests\DeleteRequest;

class PostController extends AdminController {

    /**
     * @var
     */
    private $post, $post_translations, $language, $post_type, $current_lang, $language_available, $language_icon;
    private $post_type_array = ['slider', 'page','certificate','product','application','home','face-Question','body-Question','breast-Question','burn-Question',];

    public function __construct()
    {
        parent::__construct();
        $this->post_type = \Request::get('post_type');
        if(!in_array($this->post_type, $this->post_type_array)) {
            return view('admin::errors.invalid_post_type');
        }
        $this->language = Language::select(['name', 'locale', 'icon'])->get();
        $this->language_available = array_pluck($this->language, 'locale');
        $this->language_icon = array_pluck($this->language, 'icon');

        $this->checkLang();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPosts()
    {
        $data['post_type'] = $this->post_type;
        $data['language_icon'] = $this->language_icon;
        $data['language_available'] = $this->language_available;
        return view('admin::sections.posts.index', $data);
    }


    public function getAddPost()
    {

        $lang = $this->current_lang;
        $id   = e(\Request::get('id'));

        if($lang && $id ) {

            $post = Post::find($id);

            if(count($post) > 0) {
                $post_translate = $post->translate($lang);
                
                if (count($post_translate) > 0) {
                    return redirect()->route('admin.post.edit.get', [$id, "lang=$lang"]);
                }

                $action = 'add_translate';
            }

        } else {
            $action = 'add';
        }

        $categories =  Category::all();
        $post_type            = $this->post_type;
        $language_icon        = $this->language_icon;
        $language_available   = $this->language_available;
        $language             = $this->language;
        $current_lang         = $this->current_lang;
        $users                = User::all();
        
        return view('admin::sections.posts.create_edit', compact('post', 'post_type', 'language_icon', 'language_available', 'categories', 'language', 'current_lang', 'post', 'action', 'users'));
    }


    public function postAddPost(PostRequest $request)
    {

        $id = intval($request->get('id'));

        $return = ($id != null) ? $this->processForm($request, $id): $this->processForm($request);

        if ($return > 0) {
            return redirect()->route('admin.posts.edit.get' , [$return, 'post_type='.$this->post_type, 'lang='.$request->get('locale') ]);

        } else {
            return view('admin::errors.failed');
        }
    }


    public function getEditPost($id)
    {
        $language = $this->language;
        $current_lang = $this->current_lang;
        $post = Post::find($id);

        if(!$post) {
            return view('admin::errors.item_not_found');
        }

        // check if not found record for this locale
        $post_translate = $post->translate($current_lang);

        if( !count($post_translate) > 0) {
            return view('admin::errors.item_not_found');
        }

        $action = 'edit';

        $categories_ids = Post::join('post_category', 'posts.id', '=', 'post_category.category_id')
            ->select(['posts.id as id'])
            ->where('post_id', $id)
            ->lists('id')
            ->toArray();

          $categories         =  Category::whereHas('translations', function ($query) use($current_lang) {
                                    $query->where('locale', $current_lang);
                                 })->get();

        $post_type           = $this->post_type;
        
        $multiple_media = MultipleMedia::join('media', 'media.id', '=', 'multiple_media.media_id')
                                       ->where('post_id', $id)->get();

        $users = User::all();
        return view('admin::sections.posts.create_edit', compact('post_type', 'post', 'categories', 'categories_ids', 'language_icon', 'language_available', 'language', 'current_lang', 'action', 'multiple_media', 'users'));

    }


    public function postEditPost(PostRequest $request ,$id)
    {
        if($this->processForm($request, $id)) {
            \Session::flash('success', 'Successfully updated.');
        } else {
            \Session::flash('failed', 'Failed!');
        }
        return redirect()->back();
    }


    public function getDeletePost($id) {
        $post = Post::find($id);
        $post_type = $this->post_type;

        if(!count($post) > 0) {
            return view('admin::errors.item_not_found');
        }
        return view('admin::sections.posts.delete', compact('post', 'post_type'));
    }


    public function postDeletePost(DeleteRequest $request, $id) {
        $post_type = $this->post_type;
        if(Post::find($request->id)->delete()) {
            return redirect()->route('admin.posts.get','post_type='.$post_type);
        }
        return view('admin::errors.failed');
    }

    protected function processForm($request , $id = null )
    {
        $post = ($id == null) ? new Post : Post::find($id);

        //$post->slug = ($id == null) ? getUniqueSlug($post, $request->get('post_title')) : $post->slug = getUniqueSlug($post, $request->get('slug'));
        $post->slug = $request->has('slug') ? str_slug($request->get('slug')) : str_slug($request->get('post_title')) ;

        $post->post_type = $this->post_type ;
        $post->media_id  = $request->has('media_id') ? $request->media_id : null;

        if($request->get('publish') !== null) {
            $post->post_status = 'publish';
        } elseif($request->get('draft') !== null) {
            $post->post_status = 'draft';
        } else {
            $post->post_status = 'trash';
        }
        if($request->has('color'))
        {
            $post->type=$request->get('type') ;
            $post->color=$request->get('color');
        }
        $post->save();

        $locale = trim($request->get('locale')) ;
        $post->translateOrNew($locale)->post_title    = trim($request->get('post_title')) ;
        $post->translateOrNew($locale)->post_excerpt  = trim($request->get('post_excerpt')) ;

        // $post->translateOrNew($locale)->post_indication  = trim($request->get('post_indication')) ;
        // $post->translateOrNew($locale)->post_definition  = trim($request->get('post_definition')) ;
        // $post->translateOrNew($locale)->post_operative_time  = trim($request->get('post_operative_time')) ;
        // $post->translateOrNew($locale)->post_anesthesia  = trim($request->get('post_anesthesia')) ;
        // $post->translateOrNew($locale)->post_hs  = trim($request->get('post_hs')) ;
        // $post->translateOrNew($locale)->post_scars  = trim($request->get('post_scars')) ;
        // $post->translateOrNew($locale)->post_labs_needed  = trim($request->get('post_labs_needed')) ;
        // $post->translateOrNew($locale)->post_convalescence  = trim($request->get('post_convalescence')) ;
        // $post->translateOrNew($locale)->post_final_result  = trim($request->get('post_final_result')) ;
        // $post->translateOrNew($locale)->post_nb  = trim($request->get('post_nb')) ;
        // $post->translateOrNew($locale)->post_price  = trim($request->get('post_price')) ;
        // $post->translateOrNew($locale)->post_question  = trim($request->get('post_question')) ;
        // $post->translateOrNew($locale)->post_answer  = trim($request->get('post_answer')) ;
        // $post->translateOrNew($locale)->post_q1  = trim($request->get('post_q1')) ;
        // $post->translateOrNew($locale)->post_a1  = trim($request->get('post_a1')) ;
        // $post->translateOrNew($locale)->post_q2  = trim($request->get('post_q2')) ;
        // $post->translateOrNew($locale)->post_a2  = trim($request->get('post_a2')) ;
        // $post->translateOrNew($locale)->post_q3  = trim($request->get('post_q3')) ;
        // $post->translateOrNew($locale)->post_a3  = trim($request->get('post_a3')) ;
        // $post->translateOrNew($locale)->post_q4  = trim($request->get('post_q4')) ;
        // $post->translateOrNew($locale)->post_a4  = trim($request->get('post_a4')) ;
        // $post->translateOrNew($locale)->post_q5  = trim($request->get('post_q5')) ;
        // $post->translateOrNew($locale)->post_a5  = trim($request->get('post_a5')) ;

        $post->translateOrNew($locale)->post_content  = trim($request->get('post_content')) ;
        $post->translateOrNew($locale)->post_author   = $request->get('author') ;
        //$post->translateOrNew($locale)->comment_status = 'open' ;

        /*============== Extra section Start ===============*/
        if($request->has('extra')) {
            $data = [];
            foreach ($request->get('extra') as $key => $extra) {
                $data[$key] = $extra;
            }
            $post->extra = json_encode($data);
        }
        /*============== Extra section End ===============*/


        if($post->save()) {

            /*============== Tags section Start ===============*/
            if($request->has('tags')) {
                /****************************************
                 * first check if there were tags before *
                 * if there then use retag               *
                 * if there no then use tag              *
                 *****************************************/
                if (count($post->tagNames()) > 0 ) {
                    $post->retag(explode(',', $request->tags));
                } else {
                    $post->tag(explode(',', $request->tags));
                }
            }

            if(!$request->has('tags') && (count($post->tagNames()) > 0 )) {
                $post->untag(); // remove all tags
            }
            /*============== Tags section End ===============*/


            /*=========== Category Section Start ============*/
            PostCategory::where('post_id', $post->id)->delete();
            if(Input::has('category') && count($request->get('category')) ) {
                $arr = [];
                foreach ($request->get('category') as $category_id) {
                    $arr[] = [ 'post_id' => $post->id, 'category_id' => $category_id ];
                }

                if(count($arr) > 0) {
                    PostCategory::insert($arr);
                }
            }
            /*=========== Category Section End   ============*/

            /*=========== Multiple Section Start ============*/

            if($request->has('multiple_media_id')) {
                $arr2 = [];
                foreach ($request->multiple_media_id as $media_id) {
                    if(intval($media_id)) {
                        $arr2[] = ['post_id' => $post->id, 'media_id' => $media_id];
                    }
                }

                if(count($arr2) > 0) {
                    MultipleMedia::where('post_id', $post->id)->delete();
                    MultipleMedia::insert($arr2);
                }
            }

            return $post->id;
        } else {
            return false;
        }

    }

    public function getPostsData($post_status = 'publish')
    {

        $lang  = \Session::get('lang');
        $post_type = $this->post_type;
        $languages = $this->language_available;
//        $lang  = $this->current_lang != null  ? $this->current_lang : 'all';

        $posts = PostTranslation::join('posts', 'posts.id', '=', 'posts_translations.post_id')
            ->where('posts.post_type', $post_type)
            ->where('posts.post_status', $post_status)
            ->select([
                'posts_translations.post_title as post_title',
                'posts_translations.locale as locale',
                'posts_translations.post_id as post_id',
                'posts.post_type as post_type',
                'posts.slug as slug',
                'posts.id as id',
            ])
            ->where(function($query) use($lang)
            {
                if($lang == 'all') {
                    $query->whereIn('posts_translations.locale', $this->language_available);
                } else {
                    $query->where('posts_translations.locale', $lang);
                }

            })
            ->orderby('posts.id', 'DESC');

        $datatables =  app('datatables')->of($posts);

        foreach ($this->language_available as $l) {
            $datatables ->addColumn($l, function ($post) use ($l) {

                $p = PostTranslation::where('post_id', $post->post_id)
                    ->where('locale', $l)
                    ->get();

                if(count($p) > 0){
                    if($post->locale == $l) {
                        $icon = 'ok';
                    } else {
                        $icon = 'pencil';
                    }
                    return '<a target="_self" href="'. route('admin.posts.edit.get', [$post->id, 'post_type='.$post->post_type, 'lang='.$l]) .'"><span class="glyphicon glyphicon-'. $icon .'"></span></a>';
                } else {
                    return '<a target="_self" href="'. route('admin.posts.add.get', ['id='.$post->id, 'post_type='.$post->post_type, 'lang='.$l]) .'"><span class="glyphicon glyphicon-plus"></span></a>';
                }
            });
        }

        $datatables ->editColumn('post_title', function ($post) {
            return '<a href="'. route('admin.posts.edit.get' , [$post->id, 'post_type='.$post->post_type]) .'"><i class="fa fa-edit"></i> &nbsp;'. $post->post_title .'</a>';
        });

        $datatables ->addColumn('action', function ($post) {
            return '<a class="btn btn-danger btn-sm" href="'. route('admin.posts.delete.post' , [$post->id, 'post_type='.$post->post_type]) .'"><i class="fa fa-trash"></i>delete</a>';
        });

        return  $datatables->make(true);

    }
    
    /**
     * @param $post_type
     * @return mixed
     */
    protected function checkPostType($post_type)
    {
        if(!in_array($post_type, $this->post_type_array)) {
            return view('admin::errors.invalid_post_type');
        }
        return true;
    }

    /**
     * Check if url have lang param.
     *
     * @return void
     */
    protected function checkLang()
    {
        $this->current_lang = \Request::get('lang') !== null ? e(\Request::get('lang')) : 'en';
        if(!in_array($this->current_lang, $this->language_available)) {
            abort(404);
        }
    }
}