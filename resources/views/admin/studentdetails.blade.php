

@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

              <div class="card">
              <div class="card-header">
              @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{Session::get('success')}}
                      </div>
                      @endif
                      @if(Session::has('error'))
                                  <div class="alert alert-success">
                                      {{Session::get('error')}}
                                  </div>
                      @endif
                      @if(Session::has('fail'))
                          <div class="alert alert-danger">
                          {{Session::get('fail')}}
                          </div>
                      @endif
                <a href="/new_student" class="btn btn-primary">Add Student</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Student name</th>
                    <th>Parent name</th>

                    <th>Mob</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                  <tr>
                    @foreach($data as $value)
                    <td>{{$value->student_name}}</td>
                    <td>{{$value->parent_name}}</td>
                    <td>{{$value->mobile}}</td>
                    <td>{{$value->class}}</td>
                    <td>{{$value->sections}}</td>
                    <td><a href="{{ url('edit_student_details', ['id' => $value->id]) }}" class="btn btn-primary">Edit</a> <a href="{{ url('delete_data', ['id' => $value->id]) }}"class="btn btn-danger">Delete</a></td>

                  </tr>
                  @endforeach
                  
                  
                  
                  </tbody>
                  
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>

    </div>







@endsection

