@extends('layouts.admin')
@section('title', 'CMS')
@section('nav-title', 'CMS')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.setting.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Privacy Policy</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    			<div class="form-group">
                    				<label for="privacy">Content</label>
                                    <textarea name="privacy" id="privacy" class="privacy">{{ setting('privacy') }}</textarea>
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
@section('js')
    <script>
        CKEDITOR.replace( 'privacy' );
    </script>
@endsection
