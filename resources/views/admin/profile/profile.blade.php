@extends('layouts.admin')
@section('title', 'Edit Profile')
@section('nav-title', 'Edit Profile')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-categories">
                    <ul class="nav nav-pills nav-pills-success nav-pills-icons" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" id="general-tab" href="#general" role="tablist">
                                <i class="material-icons">info</i> General Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" id="security-tab" href="#security" role="tablist">
                                <i class="material-icons">lock</i> Security
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space tab-subcategories">
                        <div class="tab-pane active" id="general">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.general.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Image</label>
                                                        <input type="file" name="image" id="image" class="dropify" accept=".png, .jpg, .jpeg, .gif, .svg" data-default-file="{{ asset($user->image) }}">
                                                        @error('image')
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Name</label>
                                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" autocomplete="off">
                                                    @error('name')
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email</label>
                                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" autocomplete="off">
                                                    @error('email')
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Update</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="security">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.pass.update') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Current Password</label>
                                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" autocomplete="off">
                                                    @error('current_password')
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">New Password</label>
                                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off">
                                                    @error('password')
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="off">
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Update</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $gen_session = "{{ session('general_error') }}";
        $pass_session = "{{ session('pass_error') }}";

        if ($gen_session == 1) {
            $('.nav-link').removeClass('active');
            $('.tab-pane').removeClass('active');

            $("#general").addClass('active');
            $("#general-tab").addClass('active');
        } else if ($pass_session == 1) {
            $('.nav-link').removeClass('active');
            $('.tab-pane').removeClass('active');

            $("#security").addClass('active');
            $("#security-tab").addClass('active');
        }
    </script>
@endsection
