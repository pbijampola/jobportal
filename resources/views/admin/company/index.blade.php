@extends('admin.layouts2.master')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Companies</h4>

        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Mobile Number</th>
                <th>City</th>
                <th>Package</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($company as $comp )
                <tr>
                    <td>
                        {{$comp->name}}
                    </td>
                    <td>{{$comp->phone_number}}</td>
                    <td>
                     {{$comp->city}}
                    </td>
                    <td>{{$comp->package}}</td>
                    <td>@if ($comp->status==1)
                        <div class="badge badge-danger">PENDING</div>
                        @else
                        <div class="badge badge-info">VERIFIED</div>
                    @endif
                </td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-behance m-1" href="" title="Show">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <a class="btn btn-behance m-1" href="{{route('companies.edit',$comp->id)}}" title="Edit">
                            <i class="mdi mdi-grease-pencil"></i>
                        </a>
                        <form action="{{route('companies.destroy',$comp->id)}}" method="POST">
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
