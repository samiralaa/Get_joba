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
                 
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">

<h2>{{$id->title}}</h2> 
<h5>{{$id->created_at->diffForHumans()}}</h5>
 <h5 class="card-text">{{$id->experience}} ( {{$id->role_type}})</h5>
 <h5>Description</h5>
 <pre class="card-text" >{{$id->description}}</pre>
 <h5>responsibilites</h5>

 <pre class="card-text" >{{$id->responsibilites}}</pre>
 <h5>offers</h5>
 <pre class="card-text" >{{$id->offers}}</pre>
 <a href="{{ route('request.create',$id->id) }}" class="btn btn-primary">
                <i class="btn btn-primary"></i>
                Apply</a>
  </div>

              
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
