@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS')
@section('content')
<?php
include
error_reporting(0);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">General</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" name="favicon" id="favicon" class="dropify" data-default-file="{{ asset($setting['favicon'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="logo_light"> Header Logo</label>
                                    <input type="file" name="logo_light" id="logo_light" class="dropify" data-default-file="{{ asset($setting['logo_light'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="news_heading">Newsletter Heading</label>
                                    <input type="text" name="news_heading" id="news_heading" class="form-control" value="{{$setting['news_heading'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="search_heading">Search Heading</label>
                                    <input type="text" name="search_heading" id="search_heading" class="form-control" value="{{$setting['search_heading'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="search_text">Search Text</label>
                                    <input type="text" name="search_text" id="search_text" class="form-control" value="{{$setting['search_text'] ?? ''}}" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Footer</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_heading">Footer Heading # 1</label>
                                    <input type="text" name="footer_heading" id="footer_heading" class="form-control" value="{{$setting['footer_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_heading_2">Footer Heading # 2</label>
                                    <input type="text" name="footer_heading_2" id="footer_heading_2" class="form-control" value="{{$setting['footer_heading_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_address">Adderss</label>
                                    <input type="text" name="footer_address" id="footer_address" class="form-control" value="{{$setting['footer_address']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_phone">Phone no</label>
                                    <input type="text" name="footer_phone" id="footer_phone" class="form-control" value="{{$setting['footer_phone']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_email">Email</label>
                                    <input type="text" name="footer_email" id="footer_email" class="form-control" value="{{$setting['footer_email']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_facebook">Footer Facebook link</label>
                                    <input type="text" name="footer_facebook" id="footer_facebook" class="form-control" value="{{$setting['footer_facebook']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_instagram">Footer Instagram Link</label>
                                    <input type="text" name="footer_instagram" id="footer_instagram" class="form-control" value="{{$setting['footer_instagram']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_twiter">Footer Twitter Link</label>
                                    <input type="text" name="footer_twiter" id="footer_twiter" class="form-control" value="{{$setting['footer_twiter']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_skype">Footer Skype ID</label>
                                    <input type="text" name="footer_skype" id="footer_skype" class="form-control" value="{{$setting['footer_skype']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="footer_linkedin">Footer LinkedIn Link</label>
                                    <input type="text" name="footer_linkedin" id="footer_linkedin" class="form-control" value="{{$setting['footer_linkedin']}}" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Course Page</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="course_heading">Heading Text</label>
                                    <input type="text" name="course_heading" id="course_heading" class="form-control" value="{{$setting['course_heading']}}" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="course_text">Text</label>
                                    <textarea name="course_text" id="course_text" rows="5" class="form-control">{{$setting['course_text']}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">SubCourse Page</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subcourse_heading">Heading Text</label>
                                    <input type="text" name="subcourse_heading" id="subcourse_heading" class="form-control" value="{{$setting['subcourse_heading']}}" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="subcourse_text">Text</label>
                                    <textarea name="subcourse_text" id="subcourse_text" rows="5" class="form-control">{{$setting['subcourse_text']}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
