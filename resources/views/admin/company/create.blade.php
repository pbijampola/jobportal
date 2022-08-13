@extends('admin.layouts2.master')
@section('content')
    <div class="container  align-items-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fill Company Details</h4>
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
                    <form class="forms-sample" action="{{ route('companies.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Company Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Logo</label>
                            <input type="file" class="form-control" name="logo" value="{{ old('logo') }}" />
                            @error('logo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Industry</label>
                            <input type="text" class="form-control" name="industry" value="{{ old('industry') }}" />
                            @error('industry')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Ownership</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="ownership_type">
                                <option value="">--select ownership--</option>
                                <option value="joint_venture">Joint-Venture</option>
                                <option value="sole_ownership">Sole-Ownership</option>
                            </select>
                            @error('ownership_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Company Description</label>
                            <textarea name="company_description" class="form-control" id="exampleTextarea1" rows="4">
                                {{ old('company_description') }}
                            </textarea>
                            @error('company_description')
                                <div class="alertalert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Number Of Offices</label>
                            <input type="text" class="form-control" name="no_of_offices"
                                value="{{ old('no_of_offices') }}" />
                            @error('no_of_offices')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Number Of Employees</label>
                            <input type="text" class="form-control" name="no_of_employees"
                                value="{{ old('no_of_employees') }}" />
                            @error('no_of_employees')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Mobile Number</label>
                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" />
                            @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Established In</label>
                            <input type="text" class="form-control" name="established_in"
                                value="{{ old('established_in') }}" />
                            @error('established_in')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Country</label>
                            <input type="text" class="form-control" name="country" value="{{ old('country') }}" />
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">State</label>
                            <input type="text" class="form-control" name="state" value="{{ old('state') }}" />
                            @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">City</label>
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}" />
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Package</label>
                            <input type="text" class="form-control" name="package" value="{{ old('package') }}"/>
                            @error('package')
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
