

@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                
                <h3 class="card-title">ADD NEW STUDENT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('save_new_student')}}"method="POST">
                @csrf
                <div class="card-body">
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
                  <div class="row">
                    <div class="col-6">
                      <label for="name">Student name</label>
                      <input type="name" class="form-control" id="name" name="name">
                  </div>
               
                  <div class="col-6">
                    <label for="name">parent name</label>
                    <input type="name" class="form-control" id="name" name="parent_name">
                  </div>
                </div>
                <div class="row">

                <div class="col-6">
                    <label for="name">mobile number</label>
                    <input type="name" class="form-control" id="name" name="mobile">
                  </div>
                  <div class="col-6">
                    <label for="name">email</label>
                    <input type="email" class="form-control" id="name" name="email">
                  </div>

               </div>
               <div class="row">
               <div class="col-6">
                   <label for="name">class</label>
                    <input type="name" class="form-control" id="name" name="class">
                </div>
                <div class="col-6">
                    <label for="name">section</label>
                    <input type="name" class="form-control" id="name" name="section">
                  </div>
                </div>
              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           
            </div>







@endsection

