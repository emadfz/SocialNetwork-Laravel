@extends('layouts.master')

@section('content')
    <style>
        .page_intro.row .inner:before {
            background: url('{{ asset('public/uploads/full/' . $body->media->guid) }}') no-repeat scroll left center;
            -webkit-background-size: cover;
            background-size: cover;
            height: 100%;
            content: '';
            width: 100%;
            position: absolute;
            top: 0;
            z-index: -1;
            opacity: 1;
        }
    </style>

    <section class="row page_intro">
        <div class="row m0 inner">
        <div class="container">
                <div class="row">
                    <h4 style="color: white !important;">
                        {{trans('main.body')}}
                    </h4>
                    <h2>{{$body->post_title}}</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="row breadcrumbRow">
        <div class="container">
            <div class="row inner m0">
                <ul class="breadcrumb">
                    <li><a href="{{route('frontend.home.get')}}">Home</a></li>
                    <li class="dropdown">
                        <a href="{{route('frontend.body.get')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{trans('main.body')}}
                        </a>

                    </li>
                    <li>{{$body->post_title}}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="row service_details">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 serviceDetailsSection">
            
                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.indication')}} </h4>
                            </td>
                            <td>
                                {{$body->post_indication}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.definition')}} </h4>
                            </td>
                            <td>
                                {{$body->post_definition}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.ot')}} </h4>
                            </td>
                            <td>
                                {{$body->post_operative_time}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.anesthesia')}} </h4>
                            </td>
                            <td>
                                {{$body->post_anesthesia}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.hs')}} </h4>
                            </td>
                            <td>
                                {{$body->post_hs}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.scars')}} </h4>
                            </td>
                            <td>
                                {{$body->post_scars}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.ln')}} </h4>
                            </td>
                            <td>

                                {{$body->post_labs_needed}}


                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.convalescence')}} </h4>
                            </td>
                            <td>
                                {{$body->post_convalescence}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.fr')}} </h4>
                            </td>
                            <td>
                                {{$body->post_final_result}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.nb')}} </h4>
                            </td>
                            <td>

                                {{$body->post_nb}}
                            </td>
                        </tr>
                        <tr>
                            <td class="headcolor">
                                <h4> {{trans('main.price')}} </h4>
                            </td>
                            <td>

                                {{$body->post_price}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="row quick_blocks_row quick_blocks_row2">
        <div class="container">
            <div class="row">
                @if(empty($body->post_q1 ||$body->post_q2||$body->post_q3||$body->post_q4||$body->post_q5))
                    <div style="display: none"></div>


                @else
                    <h3> {{trans('main.fa')}}</h3>
                    @if(empty($body->post_q1))
                        <div style="display: none">
                        </div>
                    @else
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordioncolor">

                                            {{$body->post_q1}} ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        {{$body->post_a1}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(empty($body->post_q2))
                        <div style="display: none">
                        </div>
                    @else
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordioncolor">

                                            {{$body->post_q2}} ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        {{$body->post_a2}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(empty($body->post_q3))
                        <div style="display: none">
                        </div>
                    @else
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordioncolor">

                                            {{$body->post_q3}} ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        {{$body->post_a3}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(empty($body->post_q4))
                        <div style="display: none">
                        </div>
                    @else
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordioncolor">

                                            {{$body->post_q4}} ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        {{$body->post_a4}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(empty($body->post_q5))
                        <div style="display: none">
                        </div>
                    @else
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordioncolor">

                                            {{$body->post_q5}} ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        {{$body->post_a5}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

            </div>
        </div>
        </div>
    </section>
    @include('partials.cities')

@stop