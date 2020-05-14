@extends('layouts.app')

@section('content')
	<form method="POST" action="{{route('register')}}">
	@csrf
	@method('PUT')
	<section id="update-registration">
	    <div class="container mb4 bg-white ">
	    <div class="row justify-content-center">
	        <h4 class="mt-4">Alumni Form</h4>   
	    </div>
	    <form class="pl-4 pr-4">
	        @if ($errors->any())
	            <div class="alert alert-danger">
	                <ul>
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
	            </div>
	        @endif
	        <div class="border-bottom pt-3 mb-4">
	            <h4 class="text-monospace">Alumni Profile</h4>
	            <div class="form-group row">
	                <div class="col-sm-12">
	                    <label>Name</label>
	                    <input id="name" type="text" name="name" class="form-control" required value="{{$alumni->name}}">
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-4">
	                    <label>Gender</label>
	                    <div class="row justify-content-start pt-1">
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="gendermale" name="gender" class="custom-control-input" required>
	                          <label class="custom-control-label" for="gendermale">Male</label>
	                        </div>
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="genderfemale" name="gender" class="custom-control-input" required>
	                          <label class="custom-control-label" for="genderfemale">Female</label>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-sm-3">
	                    
	                </div>
	                <div class="col-sm-5">
	                    <label>Civil Status</label>
	                    <select class="custom-select" name="civil_status" required>
	                        <option selected>{{$alumni->civil_status}}</option>
	                        <option value="Single">Single</option>
	                        <option value="Married">Married</option>
	                        <option value="Separated">Separated</option>
	                        <option value="Divorced">Divorced</option>
	                        <option value="Widowed">Widowed</option>
	                    </select>
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-8">
	                    <label>Degree Obtained in SJBCI</label>
	                    <input type="text" name="degree" class="form-control" required value="{{$alumni->degree}}"> 
	                </div>
	                <div class="col-sm-4">
	                    <label>Year Graduated</label>
	                    <select class="custom-select" name="year" required>
	                        <option selected>{{$alumni->year}}</option>
	                        @for($year = 2010; $year < 2021; $year++);
	                        <option value="{{$year}}">{{$year}}</option>
	                        @endfor
	                    </select>
	                </div>
	            </div>
	        </div>
	        <div class="border-bottom pt-3 mb-4">
	            <h4 class="text-monospace">Employment</h4>
	            <div class="form-group row">
	                <div class="col-sm-4">
	                    <label>Employment Status</label>
	                    <select class="custom-select" name="emp_status" id="emp_status" required>
	                        <option selected>{{$alumni->emp_status}}</option>
	                            <option value="Employed">Employed</option>
	                            <option value="Self-employed">Self-employed</option>
	                            <option value="Unemployed">Unemployed</option>
	                        </option>
	                    </select>
	                </div>
	                <div class="col-sm-8">
	                    <label>Type of Job</label>
	                    <input type="text" name="job_type" id="job_type" class="form-control" value="{{$alumni->job_type}}">
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-7">
	                    <label>Position</label>
	                    <input type="text" name="position" id="position" class="form-control" value="{{$alumni->position}}">
	                </div>
	                <div class="col-sm-5">
	                    <label>Status</label>
	                    <div class="row justify-content-start pt-1">
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="full_time" name="part_time" class="custom-control-input">
	                          <label class="custom-control-label" for="full_time">Full-time</label>
	                        </div>
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="part_time" name="part_time" class="custom-control-input">
	                          <label class="custom-control-label" for="part_time">Part-time</label>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-4">
	                    <label>Tenure of Employment</label>
	                    <select class="custom-select" name="tenure" id="tenure">
	                      <option selected>{{$alumni->tenure}}</option>
	                      <option value="Less than 6 Months">0 - 6 months</option>
	                      <option value="Less than  1 Year">6 - 12 months</option>
	                      <option value="Less than 2 Years">1 - 2 Years</option>
	                      <option value="More than 3 Years">More than 3 years</option>
	                    </select>
	                </div>
	                <div class="col-sm-4">
	                    <label>Salary</label>
	                    <select class="custom-select" name="salary" id="salary">
	                      <option selected>{{$alumni->salary}}</option>
	                      <option value="Less than 10,000">Less than 10,000</option>
	                      <option value="11,000 to 20, 000">11,000 - 20, 000</option>
	                      <option value="21,000 to 30,000">21,000 to 30,000</option>
	                      <option value="31,000 to 41,000">31,000 to 40,000</option>
	                      <option value="41,000 to 50,000">41,000 to 50,000</option>
	                      <option value="More than 50,000">More than 50,000</option>
	                    </select>
	                </div>
	                <div class="col-sm-4">
	                    <label>Type of Company</label>
	                    <div class="row justify-content-start pt-1">
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="local" name="comp_type" class="custom-control-input">
	                          <label class="custom-control-label" for="local">Local</label>
	                        </div>
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="national" name="comp_type" class="custom-control-input">
	                          <label class="custom-control-label" for="national">National</label>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-5">
	                    <label>Private</label>
	                    <div class="row justify-content-start pt-1">
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="government" name="private" class="custom-control-input">
	                          <label class="custom-control-label" for="government">Government</label>
	                        </div>
	                        <div class="custom-control custom-radio ml-4">
	                          <input type="radio" id="private" name="private" class="custom-control-input">
	                          <label class="custom-control-label" for="private">Private</label>
	                        </div>
	                    </div>
	                </div><div class="col-sm-1">
	                    
	                </div>
	                <div class="col-sm-6">
	                    <label>Length of Job Search</label>.
	                    <select class="custom-select" name="job_search">
	                      <option selected>{{$alumni->job_search}}</option>
	                      <option value="0 to 6 Months">0 to 6 Months</option>
	                      <option value="6 to 12 months">6 to 12 months</option>
	                      <option value="1 year to 2 years">1 year to 2 years</option>
	                      <option value="More than 2 years">More than 2 years</option>
	                    </select>
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-7">
	                    <label>Business Venture</label>
	                    <textarea class="form-control" name="venture" id="venture" style="min-height: 150px;">{{$alumni->venture}}</textarea>
	                </div>
	            </div>
	        </div>
	        <div class="border-bottom pt-3 mb-4">
	            <h4 class="text-monospace">Academic Preparation</h4>
	            <div class="form-group row">
	                <div class="col-sm-6">
	                    <label>Knowledge</label>
	                    <textarea class="form-control" name="knowledge">{{$alumni->knowledge}}</textarea>
	                </div>
	                <div class="col-sm-6">
	                    <label>Skills</label>
	                    <textarea class="form-control" name="skills">{{$alumni->skills}}</textarea>
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-4">
	                    <label>Curriculum</label>
	                    <textarea class="form-control" name="curriculum">{{$alumni->curriculum}}</textarea>
	                </div>
	                <div class="col-sm-4">
	                    <label>Faculty & Staff</label>
	                    <textarea class="form-control" name="faculty">{{$alumni->faculty}}</textarea>
	                </div>
	                <div class="col-sm-4">
	                    <label>Facilities & Resources</label>
	                    <select class="custom-select" name="facilities">
	                        <option selected>{{$alumni->facilities}}</option>
	                    </select>
	                </div>
	            </div>
	        </div>
	        <div class="border-bottom pt-3 mb-4">
	            <h4 class="text-monospace">Professional Development</h4>
	            <div class="form-group row">
	                <div class="col-sm-8">
	                    <label>Master's Degree</label>
	                    <input type="text" name="masters_degree" class="form-control" value="{{$alumni->masters_degree}}">
	                </div>
	                <div class="col-sm-4">
	                    <label>Year Graduated</label>
	                    <input type="text" name="masters_year" class="form-control" value="{{$alumni->masters_year}}">
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-8">
	                    <label>Doctoral's Degree</label>
	                    <input type="text" name="doctors_degree" class="form-control" value="{{$alumni->doctors_degree}}">
	                </div>
	                <div class="col-sm-4">
	                    <label>Year Graduated</label>
	                    <input type="text" name="doctors_year" class="form-control" value="{{$alumni->doctors_year}}">
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-6">
	                    <label>Seminars & Trainings</label>
	                    <textarea class="form-control" name="seminars">{{$alumni->seminars}}</textarea>
	                </div>
	                <div class="col-sm-6">
	                    <label>IT Certifications</label>
	                    <textarea class="form-control" name="certificates" placeholder="e.g MCP, CCNA, CS, BA etc">{{$alumni->certificates}}</textarea>
	                </div>
	            </div>
	        </div>
	        <div class="border-bottom pt-3 mb-4">
	            <h4 class="text-monospace">Create Account</h4>
	            <div class="form-group row">
	                <div class="col-sm-12">
	                    <label>Email</label>
	                    <input id="email" type="email" class="form-control" name="email" value="{{$alumni->email}}" required >
	                </div>
	            </div>
	            <div class="form-group row">
	                <div class="col-sm-12">
	                    <label>Password</label>
	                    <input id="password" type="password" class="form-control" name="password" required>
	                </div>
	            </div>
	        </div>
	        <div class="row justify-content-center mt-3 mb-3">
	            <div class="col-sm-6 text-center">
	                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
	            </div>
	        </div>
	    </form>
	</section>
	</form>
@endsection