@extends('layouts.master')


@section('content')


    <div id="blog-equal-main-banner" class="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-equal-page-direction">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Main Banner -->
    <div class="blog-equal-content">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-sm-6 col-md-4">
                    <div class="equal-single-blog-post">
                        <img class="img-responsive" src="{{ asset('public/uploads/large/' . $post->media->guid) }}" alt="" />
                        <div class="content">

                            <h3>{{$post->post_title}}</h3>
                            <div class="author">
                          <div class="author-date">  20 Feb, 2015</div>
                            </div>
                            <?php
                            $excerpt =   substr($post->post_excerpt,0,200);
                            ?>
                            <p>{{$excerpt}}</p>
                            <a href="{{route('frontend.blog.single.get',$post->slug)}}" class="read-more-button">Read More</a>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-equla-pagination">
                        <ul class="pagination">
                            <li class=" waves-effect"><a href="#!"></a></li>
                            <li class=" waves-effect"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>

                            <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
