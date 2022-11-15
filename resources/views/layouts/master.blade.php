<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Construction Skills</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Favicons -->
  <link href="{{ asset($setting['favicon'])}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendors/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href=" {{ asset('css/toastr.min.css') }}">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('css')

</head>

<body>
  <div class="">
    @include('front.components.header')

    @yield('content')
    <?php
    include
    error_reporting(0);
    ?>

    @include('front.components.footer')
  </div>


<!-- Vendors JS Files -->
  <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('vendors/aos/aos.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendors/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendors/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <!-- <script src="{{asset('vendors/php-email-form/validate.js')}}"></script> -->

  <script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">
  @if(session('success_msg'))
    toastr.success("{{ session('success_msg') }}");
  @elseif(session('error_msg'))
    toastr.error("{{ session('error_msg') }}");
  @endif
</script>
<script type="text/javascript">  
  $(document).on('keyup','.searching',function(){
        if($(this).val() == "") 
        {
            $('#search_item').css('display', 'none');
            $('#search_item').empty();
            return false;
        }
        else
        {   
            $('#search_item').css('display', 'block');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var search = $(this).val();
            $.ajax({
                url:'{{ route("search") }}',
                type: 'post',
                dataType: "json",
                data: {
                   _token: CSRF_TOKEN,
                   search: search
                },
                success: function( response ) {
                    // console.log(response);
                    $('#search_item').empty();
                    $('#search_item').css('display', 'block');
                    response.forEach(searchFunc);
                }
            });
            return true;
        }
    });
    function searchFunc(data) 
    {
        var name = data.name;
        // var short_desc = data.short_desc.substring(0,20);
        // console.log(new_date2);
      $("#search_item").append('<li class="search_list" data-atr='+data.id+'>' +'<b>' +name+ '</b>'+ '</li>');
    }
    $(document).on('click','.search_list',function(){
        var id = $(this).attr('data-atr');
        // $('#search_item')
        $.ajax({
            type: 'GET',
            url: '{{ route("search.course") }}/'+id,
            success: function( response ) {
                $('.searching').val(response.name);
                $('.subcourse_id').val(response.id);
                $('#search_item').css('display', 'none');
                $('#search-form').submit();
            }
        });
    });
</script>
@yield('js')

</body>

</html>