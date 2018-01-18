@extends('layouts.master')


@section('content')

    <div class="cbp-l-project-title">{{$work->post_title}}</div>
    <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>


    <img src=""{{ asset('public/uploads/large/' . $work->media->guid) }} alt="img">


    <div class="cbp-l-project-container">
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title"><span>Project Description</span></div>
            <div class="cbp-l-project-desc-text">{!! $work->post_content !!}</div>
        </div>
        <div class="cbp-l-project-details">

            <a href="{{$work->post_url}}" target="_blank" class="cbp-l-project-details-visit btn btn-dark">visit the site</a>
        </div>
    </div>



    <br>
    <br>
    <br>

@endsection
