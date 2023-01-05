<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- INCLUDE 1 --}}
    @include('partials.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">


    <div class="wrapper">
        
        {{-- INCLUDE 2 --}}

        @include('partials.navbar')
        {{-- INCLUDE 3 --}}

        @include('partials.siderbar')
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                 
                    <div class="card" style="width:1000px;">
                    @foreach($jobs as $job)
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">

<h2>{{$job->title}}</h2> 
<p>{{$job->created_at->diffForHumans()}}</p>
 <p class="card-text">{{$job->experience}} ( {{$job->role_type}})</p>
    <a href="{{route('jobs.show',$job->id)}}" class="btn btn-primary">Go somewhere</a>
    <hr>
  </div>
@endforeach
              
                    </div>
                </div>
            </section>
        </div>
        
        {{-- INCLUDE 4 --}}

        @include('partials.footer')

    </div>

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);

    </script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>

    @stack('js')
</body>

</html>
