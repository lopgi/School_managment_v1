<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <!-- Custom Styles -->
  <style>
    body {
      position: relative; /* Ensure positioning of absolute overlay */
      background: url('/dist/img/vidyapth.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(180, 200, 200, 0.3); /* Adjust opacity as needed */
      filter: blur(20px); /* Adjust the blur intensity as needed */
      z-index: -1; /* Ensure the overlay is behind other content */
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="background-overlay"></div> <!-- Background overlay div -->
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Ancient</b>vidyapith</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
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
                                    <h3>Forgot password</h3>
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('check_password')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email"name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Forgot</button>
            <a href="" >Login</a>
          </div>
         
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

     
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html> 