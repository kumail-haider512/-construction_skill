@extends('layouts.master')
@section('title', 'About Us')
@section('content')
<section id="about" class="about" style="margin-top: 70px;">
 	<div class="container">
 		<div class="section-title">
	      <h2>About Us</h2>
	    </div>
	    <div class="row justify-content-between">
	      <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
	        <img src="{{ asset($setting['about_image'])}}" class="img-fluid" alt="" data-aos="zoom-in">
	      </div>
	      <div class="col-lg-6 pt-5 pt-lg-0">
	        <h3 data-aos="fade-up">{{$setting['about_heading']}}</h3>
	        <p data-aos="fade-up" data-aos-delay="100">
	          {{$setting['about_us_text']}}
	        </p>
	        <div class="row">
	          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
	            <i class="bx bx-receipt"></i>
	            <h4>{{$setting['goals_heading']}}</h4>
	            <p>{{$setting['goals_text']}}</p>
	          </div>
	          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
	            <i class="bx bx-cube-alt"></i>
	            <h4>{{$setting['ambision_heading']}}</h4>
	            <p>{{$setting['ambision_text']}}</p>
	          </div>
	        </div>
	      </div>
	    </div>
 	</div>
</section>
@endsection