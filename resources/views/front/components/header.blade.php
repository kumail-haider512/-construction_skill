<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
       <a href="{{route('home')}}"><img src="{{ asset($setting['logo_light'])}}" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li>
          <a class="nav-link {{(request()->is('/')) ? 'active' : '' }}" href="{{route('home')}}">Home</a>
        </li>
        <li>
          <a class="nav-link {{(request()->is('/about')) ? 'active' : '' }}" href="{{route('about')}}">About Us</a>
        </li>
        <li class="dropdown"><a href="{{route('course')}}"><span>Course</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            @foreach(courses() as $item)
            <li><a href="{{route('subcourse' , $item->id)}}">{{$item->name}}</a></li>
            @endforeach
          </ul>
        </li>
        <li>
          <a class="nav-link {{(request()->is('/contact')) ? 'active' : '' }}" href="{{route('contact')}}">Contact Us</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->

