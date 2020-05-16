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
                                <td class="text-center"><button class="confirm btn btn-info btn-sm" id="{{$row->id}}">confirm</button>
                                <button class=" delete btn btn-danger btn btn-sm" id="{{$row->id}}"><i class="fa fa-trash-o mr-1"></i>delete</button>
                                <button class=" view btn btn-warning btn btn-sm" id="{{$row->id}}"><i class="fa fa-eye-o mr-1"></i>view</button></td>
                                @endforeach
                            </tr>
                        </tbody>   
                    </table>
                    @include('vendor.multiauth.admin.view')
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#alumni').DataTable();
    });
    // delete grade
    $(document).on('click', '.delete', function(event){
      event.preventDefault();
      var id = $(this).attr('id');
      var ok = confirm('Are you sure you want to this alumni?');
      if (ok == true) {
        $.ajax({
          url: "/admin/alumni/"+id,
          success:function(data){
            alertify.set('notifier','position', 'top-right');
            alertify.error(data.success, 3);
            location.reload(true);
          }
        });
      }
     })

    // confirm alumni
    $(document).on('click', '.confirm', function(event){
      event.preventDefault();
      var id = $(this).attr('id');
      var ok = confirm('Are you sure you want confirm this alumni?');
      if (ok == true) {
        $.ajax({
          url: "/admin/home/"+id,
          success:function(data){
            alertify.set('notifier','position', 'top-right');
            alertify.success(data.success, 3);
            location.reload(true);
          }
        });
      }
     })

    //  view alumni
    $(document).on('click', '.view', function(){
      var id = $(this).attr('id');
        $.ajax({
            url: "/admin/home/"+id+"/edit",
            method: "GET",
            data:{id:id},
            dataType: "json",
            success: function(data){
                $('#name').val(data.result.name);
                $('#gender').val(data.result.gender);
                $('#civil_status').val(data.result.civil_status);
                $('#year').val(data.result.year);
                $('#degree').val(data.result.degree);
                $('#emp_status').val(data.result.emp_status);
                $('#job_type').val(data.result.job_type);
                $('#position').val(data.result.position);
                $('#part_time').val(data.result.part_time);
                $('#tenure').val(data.result.tenure);
                $('#salary').val(data.result.salary);
                $('#comp_type').val(data.result.comp_type);
                $('#private').val(data.result.private);
                $('#job_search').val(data.result.job_search);
                $('#venture').val(data.result.venture);
                $('#knowledge').val(data.result.knowledge);
                $('#skills').val(data.result.skills);
                $('#curriculum').val(data.result.curriculum);
                $('#faculty').val(data.result.faculty);
                $('#facilities').val(data.result.facilities);
                $('#masters_degree').val(data.result.masters_degree);
                $('#masters_year').val(data.result.masters_year);
                $('#doctors_degree').val(data.result.doctors_degree);
                $('#doctors_year').val(data.result.doctors_year);
                $('#seminars').val(data.result.seminars);
                $('#certificates').val(data.result.certificates);
                $('.bd-example-modal-lg').modal('show');
            }
        });
     })
</script>
@endsection