@extends('layouts.master')

@section('content')
 <body class="body-bg-white">

 <div class="container mb60 mt50">
  <div class="row">
   <div class="col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="ui-block">


     <!-- Single Post -->

     <article class="hentry blog-post single-post single-post-v2">

      <div class="control-block-button post-control-button">
       <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" class="btn btn-control has-i bg-facebook">
        <i class="fa fa-facebook" aria-hidden="true"></i>
       </a>

       <a href="#" class="btn btn-control has-i bg-twitter">
        <i class="fa fa-twitter" aria-hidden="true"></i>
       </a>
      </div>
      <h1 class="post-title">{{$topic->title}}</h1>
      <a href="#" class="post-category bg-primary">{{$topic->value}}</a>
      <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
       <ul class="more-dropdown">
        <li>
         <a href="#">طلب تعديل المنشور</a>
        </li>
        <li>
         <a href="#">طلب حذف المنشور</a>
        </li>
       </ul>
      </div>
      <div class="post-thumb">
       @if($topic->media_type == "jpg")
        <img src="{{asset('public').'/images/'.$topic->media_url}}" alt="author">
       @elseif($topic->thumbnail != Null)
        <img src="{{asset('public').'/images/'.$topic->thumbnail}}" alt="author">
       @elseif($topic->post_type == "مقروء")
        <img src="{{asset('public')."/img/Content.png "}}" alt="author">
       @elseif($topic->post_type == "مسموع")
        <img src="{{asset('public')."/img/Volume.png "}}" alt="author">
       @else
        <img src="{{asset('public')."/img/Media.png "}}" alt="author">
       @endif
       </div>
      <div class="single-post-additional inline-items">

       <div class="author-date">
        <div class="author-thumb">
         <img alt="author" src="{{asset('public')}}/img/friend-harmonic7.jpg" class="avatar">
        </div>
        بواسطة
        <a class="h6 post__author-name fn" href="#">{{$topic->user->username}}</a>
        <div class="post__date">
         <time class="published" datetime="2017-03-24T18:18">
          {{$topic->created_at}}
         </time>
        </div>
       </div>
      </div>
      <div class="post-content-wrap">

       <div class="post-content" style="text-align: right!important;">
       {!! $topic->content !!}
       </div>
      </div>

     </article>

     <!-- ... end Single Post -->

     <div class="post-additional-info inline-items">
      <ul class="friends-harmonic">
       <li>
        <a href="#">
         <img src="{{asset('public')}}/img/friend-harmonic1.jpg" alt="friend">
        </a>
       </li>
       <li>
        <a href="#">
         <img src="{{asset('public')}}/img/friend-harmonic9.jpg" alt="friend">
        </a>
       </li>
       <li>
        <a href="#">
         <img src="{{asset('public')}}/img/friend-harmonic7.jpg" alt="friend">
        </a>
       </li>
       <li>
        <a href="#">
         <img src="{{asset('public')}}/img/friend-harmonic4.jpg" alt="friend">
        </a>
       </li>
       <li>
        <a href="#">
         <img src="{{asset('public')}}/img/friend-harmonic8.jpg" alt="friend">
        </a>
       </li>
      </ul>

      <div class="names-people-likes">
       <a href="#">دينا</a>و <a href="#">حماد</a> و
       <br>
       15 شخص أخر أعجبهم هذا
      </div>


      <div class="comments-shared">
       <a href="#" class="post-add-icon inline-items" title="عدد المشاهدين">
        <svg class="olymp-stats-icon" title="عدد المشاهدين"><use xlink:href="svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
        <span>120</span>
       </a>

       <a href="#" class="post-add-icon inline-items" title="عدد التعليقات">
        <svg class="olymp-speech-balloon-icon" title="عدد التعليقات"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
        <span>16</span>
       </a>
       <a href="#" class="post-add-icon inline-items" title="عدد المعجبيين">
        <svg class="olymp-heart-icon"  title="عدد المعجبيين"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
        <span>8</span>
       </a>
      </div>


     </div>




     <div class="mCustomScrollbar" data-mcs-theme="dark">

      <ul class="comments-list">
       @foreach($comments as $comment)
       <li>
        <div class="post__author author vcard inline-items">
         <img src="{{asset('public')}}/img/author-page.jpg" alt="author">

         <div class="author-date">
          <a class="h6 post__author-name fn" href="02-ProfilePage.html">{{$comment->user->username}}</a>
          <div class="post__date">
           <time class="published" datetime="2017-03-24T18:18">
            {{$comment->created_at}}
           </time>
          </div>
         </div>
        </div>

        <p>{{$comment->comment}}</p>


       </li>
        @endforeach
      </ul>

     </div>
     @if (Auth::check())
     <form action="{{route("frontend.addcomment.post")}}" method="post" class="comment-form inline-items">
{!!csrf_field()!!}
      <div class="post__author author vcard inline-items">
       <img src="{{asset('public')}}/img/author-page.jpg" alt="author">

       <div class="form-group with-icon-right ">
        <textarea class="form-control" name="comment" placeholder="أضف تعليق"  required></textarea>

       </div>
      </div>
      <input type="hidden" name="topic_id" value="{{$topic->id}}">
      <input type="hidden" name="user_id" value="{{\Auth::id()}}">
      <input type="submit" value="اضف تعليق">
     </form>

 @endif

    </div>

   </div>
  </div>

 </div>


 <a class="back-to-top" href="#">
  <img src="{{asset('public')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
 </a>

 </body>
@stop