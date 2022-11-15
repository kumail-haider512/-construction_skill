<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_theme') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') Construction-Skill</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('admin_theme') }}/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <style type="text/css">
      .forget{
        color: #9c27b0;
        font-weight: 600;
        font-size: 15px;
        padding-left: 11px !important;
      }
      .has-danger .form-control,
      .is-focused .has-danger .form-control {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

      .has-danger .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

      .has-success .form-control,
      .is-focused .has-success .form-control {
        background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

      .form-control,
      .is-focused .form-control {
        background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

      .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }
    </style>
</head>

<body class="off-canvas-sidebar" style="background-color: #5a56548c ">

  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 ml-auto mr-auto">
            <form class="validate-form" method="POST" action="{{ route('login')}}">
              @csrf
              <div class="card card-login card-hidden">

                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>
                </div>
                <div class="card-body ">
                 @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br>
                          <br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" class="form-control" name="email" placeholder="Email..." required>
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" name="password" placeholder="Password..." required>
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-primary btn-md">Login</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('admin_theme') }}/assets/js/core/jquery.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/arrive.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap-notify.js"></script>
    <!--  Select2 Plugin    -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!--  CKEditor Plugin    -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin_theme') }}/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
  
    {{-- Alert Messages --}}
    @if(session('success'))
        <script>
            md.showNotification('success', "{{ session('success') }}");
        </script>
    @elseif(session('error'))
        <script>
            md.showNotification('danger', "{{ session('error') }}");
        </script>
    @endif

  <script>
    $(document).ready(function() {
      $(".validate-form").validate({
                    highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                    $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
                },
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                    $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
                },
                errorPlacement: function(error, element) {
                    $(element).closest('.form-group').append(error);
                },
            });
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>

</html>