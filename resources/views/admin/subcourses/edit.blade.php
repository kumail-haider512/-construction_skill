@extends('layouts.admin')
@section('title', 'Sub Course')
@section('nav-title', 'Sub Course')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.subcourse.save',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Edit Sub Course</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $item->name }}" autocomplete="off" required>
                                    @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror" value="{{ $item->code }}" autocomplete="off">
                                    @error('code')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ $item->price }}" autocomplete="off">
                                    @error('price')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="course_id">course_id</label>
                                    <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror" value="{{ old('course_id') }}">
                                        <option selected disabled value="">Select Course</option>
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}" {{ $course->id == $item->course_id ? "selected" : ""}}>{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('course')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    		<div class="col-md-12">
                    			<div class="form-group">
                    				<label for="image">Image</label>
                    				<input type="file" name="image" id="image" class="dropify" accept=".png, .jpg, .jpeg, .gif, .svg" data-default-file="{{asset($item->image)}}">
                    				@error('image')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror

                    			</div>
                    		</div>
                    		<div class="col-md-12">
                    			<div class="form-group">
                    				<label for="description">Description</label>
                    				<textarea name="description" id="description" rows="5" class="form-control @error('name') is-invalid @enderror" autocomplete="off">{{ $item->description }}</textarea>
                    				@error('description')
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
    $(document).ready(function(){
        CKEDITOR.replace('description');
    });
</script>
@endsection