@extends('layouts.master')
@section('title', 'Detail')
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
<main id="main">    
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>{{$item->name}}</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>{{$item->name}}</li>
        </ol>
      </div>
    </div>
  </section>
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-4">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <img src="{{asset($item->image)}}" alt="">
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
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
        <div class="col-md-8">
          <div class="portfolio-info">
            <h3>{{$item->name}}</h3>
            <ul>
              <li><strong>Code</strong>: {{$item->code}}</li>
              <li><strong>Category</strong>: {{$item->course->name}} </li>
              <li><strong>Price</strong>: £{{$item->price}}</li>
            </ul>
          </div>
          <div class="portfolio-description">
            {!!$item->description!!}
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection