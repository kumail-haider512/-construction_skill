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
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Hero Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="hero_section_image">Hero Section Image</label>
                                    <input type="file" name="hero_section_image" id="hero_section_image" class="dropify" data-default-file="{{ asset($setting['hero_section_image'])}} " accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hero_heading">Hero Section Heading</label>
                                    <input type="text" name="hero_heading" id="hero_heading" class="form-control" value="{{$setting['hero_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="hero_text">Hero Section Text</label>
                                    <input type="text" name="hero_text" id="hero_text" class="form-control" value="{{$setting['hero_text']}}" autocomplete="off">
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

        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Popular Course Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="popular_heading">Popular Heading</label>
                                    <input type="text" name="popular_heading" id="popular_heading" class="form-control" value="{{$setting['popular_heading']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="popular_text">Popular Text</label>
                                    <input type="text" name="popular_text" id="popular_text" class="form-control" value="{{$setting['popular_text']}}" autocomplete="off">
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
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Why Choose Us Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_heading_text">Choose us Heading</label>
                                    <input type="text" name="choose_heading_text" id="choose_heading_text" class="form-control" value="{{$setting['choose_heading_text']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_text">Choose us Text</label>
                                    <input type="text" name="choose_text" id="choose_text" class="form-control" value="{{$setting['choose_text']}}" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="choose_us_heading_1">Heading 1</label>
                                    <input type="text" name="choose_us_heading_1" id="choose_us_heading_1" class="form-control" value="{{$setting['choose_us_heading_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_image_1">Image 1</label>
                                    <input type="file" name="choose_us_image_1" id="choose_us_image_1" class="dropify" data-default-file="{{ asset($setting['choose_us_image_1'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_text_1">Text 1</label>
                                    <textarea rows="10" name="choose_us_text_1" id="choose_us_text_1" class="form-control">{{$setting['choose_us_text_1']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="choose_us_heading_2">Heading 2</label>
                                    <input type="text" name="choose_us_heading_2" id="choose_us_heading_2" class="form-control" value="{{$setting['choose_us_heading_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_image_2">Image 2</label>
                                    <input type="file" name="choose_us_image_2" id="choose_us_image_2" class="dropify" data-default-file="{{ asset($setting['choose_us_image_2'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_text_2">Text 2</label>
                                    <textarea rows="10" name="choose_us_text_2" id="choose_us_text_2" class="form-control">{{$setting['choose_us_text_2']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="choose_us_heading_3">Heading 3</label>
                                    <input type="text" name="choose_us_heading_3" id="choose_us_heading_3" class="form-control" value="{{$setting['choose_us_heading_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_image_3">Image 3</label>
                                    <input type="file" name="choose_us_image_3" id="choose_us_image_3" class="dropify" data-default-file="{{ asset($setting['choose_us_image_3'])}}" accept=".png, .jpg, .jpeg, .gif, .svg">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choose_us_text_3">Text 3</label>
                                    <textarea rows="10" name="choose_us_text_3" id="choose_us_text_3" class="form-control"> {{$setting['choose_us_text_3']}}</textarea>
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
        <div class="col-md-12">
            <form action="{{ route('admin.cms.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">FAQ's Section</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="faq_1">Question NO 1</label>
                                    <input type="text" name="faq_1" id="faq_1" class="form-control" value="{{$setting['faq_1']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="ans_1">Answer NO 1</label>
                                    <textarea rows="10" name="ans_1" id="ans_1" class="form-control">{{$setting['ans_1']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="faq_2">Question NO 2</label>
                                    <input type="text" name="faq_2" id="faq_2" class="form-control" value="{{$setting['faq_2']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="ans_2">Answer NO 2</label>
                                    <textarea rows="10" name="ans_2" id="ans_2" class="form-control">{{$setting['ans_2']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="faq_3">Question NO 3</label>
                                    <input type="text" name="faq_3" id="faq_3" class="form-control" value="{{$setting['faq_3']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="ans_3">Answer NO 3</label>
                                    <textarea rows="10" name="ans_3" id="ans_3" class="form-control">{{$setting['ans_3']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="faq_4">Question NO 4</label>
                                    <input type="text" name="faq_4" id="faq_4" class="form-control" value="{{$setting['faq_4']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="ans_4">Answer NO 4</label>
                                    <textarea rows="10" name="ans_4" id="ans_4" class="form-control">{{$setting['ans_4']}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="faq_5">Question NO 5</label>
                                    <input type="text" name="faq_5" id="faq_5" class="form-control" value="{{$setting['faq_5']}}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="ans_5">Answer NO 5</label>
                                    <textarea rows="10" name="ans_5" id="ans_5" class="form-control">{{$setting['ans_5']}} </textarea>
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
