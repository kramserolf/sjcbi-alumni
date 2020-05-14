@extends('layouts.alumni')

@section('content')
@php($alumni = App\User::latest()->simplePaginate(1))
<div class="container">
    <div class="row justify-content-end">
      <div class="col-sm-3">
          <select class="custom-select">
              <option selected>2020</option>
              @for($year = 2010; $year < 2021; $year++)
              <option value="{{$year}}">{{$year}}</option>
              @endfor
          </select>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <div class="container">
                    <div class="row">
                     @foreach($alumni as $row)
                     <div class="col-sm-3">
                       <span>{{$row->name}}</span><br>
                       <span>Batch {{$row->year}}</span><br>
                       <span>{{$row->degree}}</span>
                     </div>
                     @endforeach
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <ul class="pagination pagination-sm">
                    {{$alumni->links()}}
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
