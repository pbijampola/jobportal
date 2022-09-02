@extends('admin.layouts2.master')
@section('content')

<div class="container  align-items-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Slider Details</h4>
                <div class="col-sm-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form class="forms-sample" action="{{ route('slider.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Slider Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Slider Image</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}" />
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Slider Link</label>
                        <input type="text" class="form-control" name="slider_link" value="{{ old('slider_link') }}" />
                        @error('slider_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Slider Descrption</label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
