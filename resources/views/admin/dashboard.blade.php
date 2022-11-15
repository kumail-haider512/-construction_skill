@extends('layouts.admin')
@section('title', 'Dashboard')
@section('nav-title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon"><i class="material-icons">groups</i></div>
                    <p class="card-category">Groups</p>
                    <h3 class="card-title">0</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">groups</i> Total # of groups</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">how_to_reg</i></div>
                    <p class="card-category">Members</p>
                    <h3 class="card-title">0</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">how_to_reg</i> Total # of members</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon"><i class="material-icons">equalizer</i></div>
                    <p class="card-category">Website Visits</p>
                    <h3 class="card-title">0</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">equalizer</i> Total # of website visits</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon"><i class="material-icons">cached</i></div>
                    <p class="card-category">Active Groups</p>
                    <h3 class="card-title">0</h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">cached</i> Active Groups</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
