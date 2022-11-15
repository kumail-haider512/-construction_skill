@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">WWH Section</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                    				<label for="what_text">What Text</label>
                    				<textarea name="what_text" id="what_text" rows="7" class="form-control">{{ setting('what_text') }}</textarea>
                    			</div>
                    		</div>
                    		<div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                    				<label for="why_text">Why Text</label>
                    				<textarea name="why_text" id="why_text" rows="7" class="form-control">{{ setting('why_text') }}</textarea>
                    			</div>
                    		</div>
                    		<div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                    				<label for="how_text">How Text</label>
                    				<textarea name="how_text" id="how_text" rows="7" class="form-control">{{ setting('how_text') }}</textarea>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
