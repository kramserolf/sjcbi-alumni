@extends('multiauth::layouts.app')
@section('content')
@php($alumni = App\User::where('alumni_status', 'pending')->latest()->get())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.confirm')}}">Alumni</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pending</li>
                  </ol>
                </nav>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="alumni">
                        <thead class="thead-light">
                            <th>Name</th>
                            <th>Course</th>
                            <th>Batch</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($alumni as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->degree}}</td>
                                <td>{{$row->year}}</td>
                                <td>{{$row->alumni_status}}</td>
                                <td><a href="/admin/home/{{$row->id}}" class="btn btn-info btn-sm" id="{{$row->id}}">confirm</a></td>
                                @endforeach
                            </tr>
                        </tbody>   
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#alumni').DataTable();
    } );
</script>
@endsection