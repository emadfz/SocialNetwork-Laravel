@extends('layouts.master')

@section('content')
    <section class="row page_intro" style=" height: 230px;">
        <div class="row m0 inner-burn" style=" padding-top: calc(7% - 10px);">
            <div class="container">
                <div class="row">
                    <h2> {{trans('main.burn')}} </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="row contact_form_row">
        <div class="container">
            @foreach($burns as $burn)
            <div class="row form-group">
                <div class="col-md-3">
                    <img src="{{ asset('public/uploads/large/' . $burn->media->guid) }}" class="img-thumbnail">
                </div>
                <div class="col-md-9">
                    <header class="entry-header">
                        <!-- The Post Title -->
                        <h2 class="entry-title"><a href="{{route('frontend.burn.single.get',$burn->slug)}}" rel="bookmark" style="text-decoration:none">{{$burn->post_title}} </a></h2>
                    </header>
                    <div class="entry-summary">
             <p>{!! $burn->post_content !!}</p>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </section>
    <section class="row quick_blocks_row quick_blocks_row2">
        <div class="container">
            <div class="row">


                @foreach($question as $q)
                    @if(empty($q->post_question))
                        <div style="display: none"></div>
                    @else
                        <h3> {{trans('main.fa')}}</h3>
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordioncolor">

                                            {{$q->post_question}} ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        {{$q->post_answer}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
        </div>
    </section>
@include('partials.question')
    @stop