@extends('layouts.master')
@section('title', 'Course')
@section('css')
<style>
  .more-info
  {
    background-color: transparent;
    border: 1px solid #d0d0d0;
    width: 100%;
    max-width: 400px;
    border-radius: 15px;
  }
  .black {
    background: black;
    height: 30px;
    font-size: 23px;
    color: white;
  }
</style>
@endsection
@section('content')

<footer id="footer" style="margin-top: 70px;">
  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 form-group"  >
          	<h4>{{$setting['search_heading'] ?? ''}}</h4>
          	<p>{{$setting['search_text'] ?? ''}}</p>
          	<form method="GET" action="{{route('detail')}}">
	          	<div class="row">
	          		<div class="col-md-8" style="padding-right: 0; padding-left: 0;">
            			<input type="hidden" name="subcourse_id" class="subcourse_id">
	            		<input type="text" name="text" class="form-control searching" id="inlineFormInputName1" autocomplete="off">
	            		<ul id="search_item">
		                    
		                </ul>
	          		</div>
	          		<div class="col-md-4" style=" padding-left: 0;">
	          			<button type="submit" class="form-control btn btn-primary">
			            	Search
			            </button>
	          		</div>
	          	</div>
          	</form>
        </div>
        <div class="col-lg-6">
        	<div class="more-info mx-auto my-4">
              <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
              <div class="pb-2">                      
                  <a href="tel:+{{$setting['footer_phone']}}"><h5 class="grey text-center tel-info">Phone: {{$setting['footer_phone']}}</h5></a>  
                  <a href="mailto:{{$setting['footer_email']}}"><h5 class="grey text-center mail-info">Email: {{$setting['footer_email']}}</h5></a>                        
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<section id="portfolio" class="portfolio">
	<div class="container" data-aos="fade-up">
	    <div class="section-title">
	      <h2>{{$setting['course_heading']}}</h2>
	      <p>{{$setting['course_text']}}</p>
	    </div>
	    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
	    	@foreach($course as $item)
		    <div class=" col-md-6 portfolio-item ">
		        <div class="portfolio-wrap">
		          	<img src="{{asset($item->image)}}" class="img-fluid center" alt="">
		          	<div class="portfolio-links">
		            	<a href="{{route('subcourse', createSlug($item->name))}}" title="More Courses"><i class="bi bi-link"></i></a>
		          	</div>
		          	<div class="portfolio-info">
		            	<h4>{{$item->name}}</h4>
		          	</div>
		        </div>
		    </div>
		    @endforeach
		</div>
	</div>
</section>
@endsection