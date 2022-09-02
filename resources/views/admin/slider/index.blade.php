@extends('admin.layouts2.master')

@section('content')
<div class="page-header flex-wrap">
    <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">{{Auth::user()->name}}.</span>
    </h3>
    <div class="d-flex">
      {{-- <button type="button" class="btn btn-sm bg-white btn-icon-text border">
        <i class="mdi mdi-email btn-icon-prepend"></i> Email </button> --}}
      <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
        <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
      <a href="{{route('slider.create')}}" class="btn btn-sm ml-3 btn-success"> Add Slider</a>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Sliders</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                <tr>
                    <td>
                        {{$slider->image}}
                    </td>
                    <td>{{$slider->title}}</td>

                    <td>{{$slider->status}}</td>
                    <td>@if ($slider->status==1)
                        <div class="badge badge-danger">INACTIVE</div>
                        @else
                        <div class="badge badge-info">ACTIVE</div>
                    @endif
                </td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-behance m-1" href="" title="Show">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <a class="btn btn-behance m-1" href="{{route('slider.edit',$slider->id)}}" title="Edit">
                            <i class="mdi mdi-grease-pencil"></i>
                        </a>
                        <form action="{{route('slider.destroy',$slider->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-1" title="Delete" onclick="removeItem()">
                                <i class="mdi mdi-delete"></i>
                            </button>

                        </form>
                    </div>
                </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    function removeItem(){
        alert('ARE YOU SURE YOU WANT TO DELETE')
    }
  </script>

@endsection
