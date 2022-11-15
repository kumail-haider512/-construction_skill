@extends('layouts.master')
@section('title', 'Contact Us')

@section('content')
<section id="contact" class="contact" style="margin-top: 70px;">
	<div class="container" data-aos="fade-up">

	    <div class="section-title">
	      <h2>Contact Us</h2>
	      <p>Contact us the get started</p>
	    </div>

	    <div class="row">

	      <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
	        <div class="info">
	          <div class="address">
	            <i class="bi bi-geo-alt"></i>
	            <h4>Location:</h4>
	            <p>{{$setting['footer_address']}}</p>
	          </div>

	          <div class="email">
	            <i class="bi bi-envelope"></i>
	            <h4>Email:</h4>
	            <p>{{$setting['footer_email']}}</p>
	          </div>

	          <div class="phone">
	            <i class="bi bi-phone"></i>
	            <h4>Call:</h4>
	            <p>{{$setting['footer_phone']}}</p>
	          </div>

	          <section class="map-fullwidth"> 
                <div id="map-small"></div>
              </section>
	        </div>

	      </div>

	      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
	        <form action="{{route('contact.save')}}" method="post" id="f_form" role="form" class="php-email-form">
	        @csrf
	          <div class="row">
	            <div class="form-group col-md-6">
	              <label for="name">Your Name</label>
	              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
	            </div>
	            <div class="form-group col-md-6 mt-3 mt-md-0">
	              <label for="name">Your Email</label>
	              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
	            </div>
	          </div>
	          <div class="form-group mt-3">
	            <label for="name">Subject</label>
	            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
	          </div>
	          <div class="form-group mt-3">
	            <label for="name">Message</label>
	            <textarea class="form-control" name="message" rows="10" required></textarea>
	          </div>
	          <div class="my-3">
	            <div class="loading">Loading</div>
	            <div class="error-message"></div>
	            <div class="sent-message">Your message has been sent. Thank you!</div>
	          </div>
	          <div class="text-center">
	          	<button type="submit" class="send_msg">Send Message</button>
	          </div>
	        </form>
	      </div>

	    </div>

  	</div>
</section>
@endsection
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQxDtoDoP_al1kFRr5txQZz4pL9fIacqw&callback=initMap" async defer></script>
<script>
        var map;

        function initMap() {
            var latitude = {{$setting['latitude']}}; // YOUR LATITUDE VALUE
            var longitude = {{$setting['longitude']}}; // YOUR LONGITUDE VALUE

            var myLatLng = {lat: latitude, lng: longitude};

            map = new google.maps.Map(document.getElementById('map-small'), {
                center: myLatLng,
                zoom: 14
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: latitude + ', ' + longitude
            });
        }
        $(document).on('click','.send_msg',function(e){
        	e.preventDefault();
        	$(this).attr('disabled', 'disabled');
            $(this).text('Please wait..');
            $('#f_form').submit();
        })
    </script>

@endsection