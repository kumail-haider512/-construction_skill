@extends('layouts.admin')
@section('title', 'Course')
@section('nav-title', 'Course')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.course.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Add Course</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                            <div class="col-4">
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
                            <!-- <div class="col-4">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" autocomplete="off">
                                    @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" autocomplete="off">
                                    @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->
                    		<div class="col-12">
                    			<div class="form-group">
                    				<label for="image">Image</label>
                    				<input type="file" name="image" id="image" class="dropify" accept=".png, .jpg, .jpeg, .gif, .svg">
                    				@error('name')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror

                    			</div>
                    		</div>
                    		<!-- <div class="col-12">
                    			<div class="form-group">
                    				<label for="description">Description</label>
                    				<textarea name="description" id="description" rows="5" class="form-control @error('name') is-invalid @enderror" autocomplete="off">{{ old('description') }}</textarea>
                    				@error('description')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror
                    			</div>
                    		</div> -->
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

@endsection