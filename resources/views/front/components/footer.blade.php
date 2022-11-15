<footer id="footer">
  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h4>{{$setting['news_heading']}}</h4>
          <form action="{{route('email.save')}}" method="post">
              @csrf
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class=" col-md-4 footer-contact">
          <h3>{{$setting['footer_heading']}}</h3>
          <p style="line-height: 45px;">
            {{$setting['footer_address']}}
            <br>
          </p>
          <p style="line-height: 45px;">
            <strong>Phone:</strong> {{$setting['footer_phone']}}
            <br>
          </p>
          <p style="line-height: 45px;">
            <strong>Email:</strong> {{$setting['footer_email']}}
            <br>
          </p>
        </div>

        <div class=" col-md-4 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('course')}}">Courses</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Contact us</a></li>
          </ul>
        </div>


        <div class=" col-md-4 footer-links">
          <h4>{{$setting['footer_heading_2']}}</h4>
          <div class="social-links mt-3">
            <a href="{{$setting['footer_twiter']}}" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{$setting['footer_facebook']}}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{$setting['footer_instagram']}}" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="{{$setting['footer_skype']}}" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="{{$setting['footer_linkedin']}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>