@extends('layouts.master')
@section('title','Page')
@section('content')
<main id="main">    
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>{{$page->name}}</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>{{$page->name}}</li>
        </ol>
      </div>
    </div>
  </section>
	<div class="container">
		<div class="row">
		    <div class="col-md-12">
				<!--<h4 class="text-capitalize" style="margin-top: 125px;">{{ $page->name }}</p>-->
			</div> 
			<div class="col-md-12">
				<p>{!! $page->description !!}</p>
			</div>
		</div>
	</div>
@endsection