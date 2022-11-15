@extends('layouts.master')
@section('title', 'Home')
@section('content')

<section id="hero" class="d-flex align-items-center">
	<div class="container">
	  <div class="row gy-4">
	    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
	      <h1>{{$setting['hero_heading']}}</h1>
	      <h2>{{$setting['hero_text']}}</h2>
	      <div>
	        <a href="#portfolio" class="btn-get-started scrollto">Get Started</a>
	      </div>
	    </div>
	    <div class="col-lg-6 order-1 order-lg-2 hero-img">
	      <img src="{{ asset($setting['hero_section_image'])}}" class="img-fluid animated" alt="">
	    </div>
	  </div>
	</div>
</section>
<main id="main">
	<section id="portfolio" class="portfolio">
		<div class="container" data-aos="fade-up">
		    <div class="section-title">
		      <h2>{{$setting['popular_heading']}}</h2>
		      <p>{{$setting['popular_text']}}</p>
		    </div>
			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
				@foreach($list as $item)
			    <div class=" col-md-4 portfolio-item ">
			        <div class="portfolio-wrap">
			          	<img src="{{asset($item->image)}}" class="img-fluid " alt="">
			          	<div class="portfolio-links">
			            	<a href="{{route('detail', createSlug($item->name))}}" title="More Courses"><i class="bi bi-link"></i></a>
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
	<section id="services" class="services section-bg">
	  <div class="container" data-aos="fade-up">

	    <div class="section-title">
	      <h2>{{$setting['choose_heading_text']}}</h2>
	      <p>{{$setting['choose_text']}}</p>
	    </div>

	    <div class="row">
		    <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
		        data-aos-delay="100">
		        <div class="icon-box">
		          <div class="icon"><img src="{{ asset($setting['choose_us_image_1'])}}" style="width: 55px;"></div>
		          <h4 class="title"><a href="">{{$setting['choose_us_heading_1']}}</a></h4>
		          <p class="description" style="text-align: justify;">{{$setting['choose_us_text_1']}}</p>
		        </div>
		    </div>
		    <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
		        data-aos-delay="100">
		        <div class="icon-box">
		          <div class="icon"><img src="{{ asset($setting['choose_us_image_2'])}}" style="width: 55px;"></div>
		          <h4 class="title"><a href="">{{$setting['choose_us_heading_2']}}</a></h4>
		          <p class="description" style="text-align: justify;">{{$setting['choose_us_text_2']}}</p>
		        </div>
		    </div>
		    <div class="col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
		        data-aos-delay="100">
		        <div class="icon-box">
		          <div class="icon"><img src="{{ asset($setting['choose_us_image_3'])}}" style="width: 55px;"></div>
		          <h4 class="title"><a href="">{{$setting['choose_us_heading_3']}}</a></h4>
		          <p class="description" style="text-align: justify;">{{$setting['choose_us_text_3']}}</p>
		        </div>
		    </div>
	    </div>

	  </div>
	</section>
	<section id="faq" class="faq ">
	  <div class="container" data-aos="fade-up">

	    <div class="section-title">
	      <h2>F.A.Q</h2>
	      <p>Frequently Asked Questions</p>
	    </div>

	    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

	      <li>
	        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">{{$setting['faq_1']}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
	        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
	          <p>
	            {{$setting['ans_1']}}
	          </p>
	        </div>
	      </li>

	      <li>
	        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">{{$setting['faq_2']}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
	        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
	          <p>
	           	{{$setting['ans_2']}}
	          </p>
	        </div>
	      </li>

	      <li>
	        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
	        	{{$setting['faq_3']}}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
	        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
	          <p>
	           	{{$setting['ans_3']}}
	          </p>
	        </div>
	      </li>

	      <li>
	        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">{{$setting['faq_4']}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
	        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
	          <p>
	            {{$setting['ans_4']}}
	          </p>
	        </div>
	      </li>

	      <li>
	        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">{{$setting['faq_5']}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
	        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
	          <p>
	            {{$setting['ans_5']}}
	          </p>
	        </div>
	      </li>

	    </ul>

	  </div>
	</section>
</main>
@endsection