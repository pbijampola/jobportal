@extends('admin.layouts2.master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="container  align-items-center">
            <div class="card">
                <div class="card-body">

                    <div class="progress" style="height: 25px">

                        <div class="progress-bar w-25 bg-success progress-bar-striped" role="progressbar" aria-valuemax="100%"
                            aria-valuemin="0%" aria-valuenow="25">

                        </div>
                    </div>

                    <!-- spinner -->
                    {{-- <div class="spinner">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div> --}}
                    <form class="forms-sample p-5" id="jobForm" action="{{ route('jobs.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Company</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="comp_name">
                                <option value="">--select Company--</option>
                                @foreach ($companies as $company )
                                <option value="{{$company->name}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                            @error('comp_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" class="form-control" oninput="this.className=''" name="job_title"
                                value="{{ old('job_title') }}" />
                            @error('job_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Job Description</label>
                            <textarea name="job_description" class="form-control" id="exampleTextarea1" rows="4" cols="4">
                                {{ old('job_description') }}
                            </textarea>
                            @error('job_description')
                                <div class="alertalert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Job Benefit</label>
                            <textarea name="benefit" class="form-control" id="exampleTextarea1" rows="4" cols="4">
                                {{ old('benefit') }}
                            </textarea>
                            @error('benefit')
                                <div class="alertalert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="skills">Skills</label>
                            <input type="text" class="form-control" oninput="this.className=''" name="skills"
                                value="{{ old('skills') }}" />
                            @error('skills')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" oninput="this.className=''" name="country"
                                value="{{ old('country') }}" />
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" oninput="this.className=''" name="state"
                                value="{{ old('state') }}" />
                            @error('stae')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" oninput="this.className=''"
                                name="city"value="{{ old('city') }}" />
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Carrier Level</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="carrier_level">
                                <option value="">--select Carrier Level--</option>
                                <option value="no level">No Level</option>
                                <option value="ordinary level">Ordinary Level</option>
                                <option value="ordinary level">Advance Level</option>
                                <option value="ordinary level">Degree Level</option>
                                <option value="ordinary level">Master Level</option>
                                <option value="ordinary level">PHD Level</option>
                                <option value="ordinary level">Doctor Level</option>
                            </select>
                            @error('carrier_level')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="salaray_from">Salary From</label>
                            <input type="number" class="form-control" oninput="this.className=''" name="salary_from"
                                value="{{ old('salary_from') }}" />
                            @error('salary_from')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="salary_to">Salary To</label>
                            <input type="number" class="form-control" oninput="this.className=''" name="salary_to"
                                value="{{ old('salary_to') }}" />
                            @error('salary_to')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="salaray_period">Salary Period</label>
                            <input type="text" class="form-control" oninput="this.className=''"
                                name="salaray_period" value="{{ old('salaray_period') }}" />
                            @error('salary_period')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="functional_area">Functional Area</label>
                            <input type="text" class="form-control" oninput="this.className=''"
                                name="functional_area" value="{{ old('functional_area') }}" />
                            @error('functional_area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Job Shift</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="job_shift">
                                <option value="">--select shift--</option>
                                <option value="yes">YES</option>
                                <option value="no">NO</option>
                            </select>
                            @error('job_shift')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job_position">Job Postion</label>
                            <input type="number" class="form-control" oninput="this.className=''" name="position"
                                value="{{ old('position') }}" />
                            @error('position')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" oninput="this.className=''" name="gender"
                                value="{{ old('gender') }}" />
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="job_type">Job Type</label>
                            <input type="text" class="form-control" oninput="this.className=''" name="job_type"
                                value="{{ old('job_type') }}" />
                            @error('job_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job_expire_date">Job Expire Date</label>
                            <input type="date" class="form-control" oninput="this.className=''"
                                value="{{ old('job_expire_date') }}" name="job_expire_date" />
                            @error('job_expire_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
