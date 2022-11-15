@extends('layouts.admin')
@section('title', 'Page')
@section('nav-title', 'Page')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.page.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Add Page</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="off">
                                    @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    		<div class="col-12">
                    			<div class="form-group">
                    				<label for="detail">Description</label>
                    				<textarea  name="detail" id="detail" class="form-control @error('detail') is-invalid @enderror" value="{{ old('detail') }}" autocomplete="off"></textarea>
                    				@error('detail')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror

                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="card-footer mt-4">
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
    CKEDITOR.replace('detail');
</script>
@endsection