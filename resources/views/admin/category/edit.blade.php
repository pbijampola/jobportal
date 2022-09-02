@extends('admin.layouts2.master')
@section('content')

<div class="container  align-items-center">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category Details</h4>
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
                <form class="forms-sample" action="{{ route('categories.update',$category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Icon</label>
                        <input type="file" class="form-control" name="icon" value="{{ old('icon') }}" />
                        @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" />
                        @error('slug')
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
