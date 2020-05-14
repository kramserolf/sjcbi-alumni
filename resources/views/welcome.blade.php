@extends('layouts.app')
@section('content')
<section id="message">
<div class="container bg-white ">
    <div class="row justify-content-center">
            <div class=" col-sm-10 text-justify">
                <h4>ALUMNI TRACKING and SURVEY FORM</h4><br>
                <p>Dear Alumna/Alumnus,</p>
                <p>The St. Joseph's College of Baggao Inc. family would like to get information about your work life after graduation and feedback about the quality of education you received from us. We would like to strengthen our ties with you and involved you in the activities of the Institution. May we then request that you accomplish this survey form? The data and information you will write will be very valuable for our current tracer study and other program we are conceptualizing especially in the research and outreach areas.</p>
                <p>Thank you.</p>
                <p>SJCBI Management</p>
            </div>
        </div>
        <div class="row mb-3 mt-2">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <a href="{{route('register')}}" class="btn btn-primary btn-sm">Continue <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        {{-- <div class="row mb-4">
            <div class="col-sm-1">
                
            </div>
            <div class="col-sm-6">
                <span>Registered alumni already? Click <a href="{{route('login')}}">here.</a></span>
            </div>
        </div> --}}
</div>
@endsection