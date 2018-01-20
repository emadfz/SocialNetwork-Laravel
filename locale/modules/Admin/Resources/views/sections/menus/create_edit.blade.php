@extends('admin::layouts.master')

@section('styles')
   <link href="{{ asset('public/assets/admin/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"
         rel="stylesheet" type="text/css"/>

   <link rel="stylesheet" type="text/css"
         href="{{ asset('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}"/>

   <link href="{{ asset('public/assets/admin/global/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet"
         type="text/css"/>
   <link href="{{ asset('public/assets/admin/global/plugins/dropzone/basic.min.css') }}" rel="stylesheet"
         type="text/css"/>
@stop

@section('content')

   <div class="row">
      <div class="col-md-12">
          <form action="{{route('admin.topic-edit.post')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="topic_id" value="{{$topic->id}}">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating">
                          <label class="control-label">عنوان القيمة</label>
                          <input class="form-control" type="text" placeholder="" name="title" value="{{$topic->title}}" required>
                      </div>
                  </div>

                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating is-select">
                          <label class="control-label">اختر القيمة</label>
                          <select class="selectpicker form-control" name="value" required>
                              <option disabled selected value> -- اختر القيمة -- </option>

                              <option value="الأمانة" @if($topic->value == "الأمانة") selected @endif>الأمانة</option>
                              <option value="الصدق" @if($topic->value == "الصدق") selected @endif>الصدق</option>
                              <option value="الفضل" @if($topic->value == "الفضل") selected @endif>الفضل</option>
                              <option value="العدل" @if($topic->value == "العدل") selected @endif>العدل</option>
                              <option value="القناعة"  @if($topic->value == "القناعة") selected @endif>القناعة</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating is-select">
                          <label class="control-label">نوع المادة</label>
                          <select class="selectpicker form-control" name="post_type" required>
                              <option disabled selected value> -- اختر نوع المادة -- </option>
                              <option value="مسموع" @if($topic->post_type == "مسموع") selected @endif>مسموع</option>
                              <option value="مقروء" @if($topic->post_type == "مقروء") selected @endif>مقروء</option>
                              <option value="مرئي" @if($topic->post_type == "مرئي") selected @endif>مرئي</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating is-select">
                          <label class="control-label">المدينة</label>
                          <select class="selectpicker form-control" name="location" required>
                              <option disabled selected value> -- اختر مدينة -- </option>
                              <option value="24.774265,46.738586,الرياض" @if($topic->city == "الرياض") selected @endif>الرياض</option>
                              <option value="21.2854,39.2376,جدة" @if($topic->city == "جدة") selected @endif>جدة</option>
                              <option value="26.399250,49.984360,الدمام" @if($topic->city == "الدمام") selected @endif>الدمام</option>
                              <option value="21.422510,39.826168,مكة" @if($topic->city == "مكة") selected @endif>مكة</option>
                              <option value="21.437273,40.512714,الطائف" @if($topic->city == "الطائف") selected @endif>الطائف</option>
                              <option value="24.186848,38.026428,ينبع" @if($topic->city == "ينبع") selected @endif>ينبع</option>
                              <option value="26.094088,43.973454,عنيزة" @if($topic->city == "عنيزة") selected @endif>عنيزة</option>
                              <option value="30.983334,41.016666,عرعر @if($topic->city == "عرعر") selected @endif">عرعر</option>
                              <option value="28.446959,45.948944,حفر الباطن" @if($topic->city == "حفر الباطن") selected @endif>حفر الباطن</option>
                              <option value="24.507143,44.408798,الدوادمى" @if($topic->city == "الدوادمى") selected @endif>الدوادمى</option>

                          </select>
                      </div>
                  </div>

                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating">
                          <label class="control-label">الموضوع</label>
                          <textarea class="form-control" name="content" style="height: 240px">{{$topic->content}}</textarea>
                      </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating"  >
                          @if($topic->media_url != Null)
                              <img src="{{asset('public').'/images/'.$topic->media_url}}" width="200px" >
                          @else
                              <p>لا يوجد صورة ملف</p>
                          @endif
                          <label class="control-label">الملف</label>
                          <input type="file" name="file" class="form-control" >
                      </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group label-floating">
                          @if($topic->thumbnail != Null)
                          <img src="{{asset('public').'/images/'.$topic->thumbnail}}" width="200px" >
                          @else
                              <p>لا يوجد صورة رمزية</p>
                          @endif
                          <label class="control-label">الصورة الرمزية</label>
                          <input type="file" name="thumbnail" class="form-control" value="{{asset('public').'/images/'.$topic->thumbnail}}" >
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                      <a href="{{ route('admin.topic.get') }}" class="btn btn-secondary btn-lg full-width">الرجوع</a>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                      <input  class="btn btn-blue btn-lg full-width"  value="عدل موضوع"  type="submit" >
                  </div>
              </div>
          </form>
         </div>
      </div>

   </div>

@stop

@section('scripts')
   <script src="{{ asset('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"
           type="text/javascript"></script>
   <script src="{{ asset('public/assets/admin/global/plugins/ckeditor/ckeditor.js') }}"
           type="text/javascript"></script>
   <script src="{{ asset('public/assets/admin/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"
           type="text/javascript"></script>
@stop