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
                    <div class="">
                    <!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div clas="col-xl-9">
s
        <h1 class="text-white mb-4">Add a Job</h1>
<form action="{{route('jobs.store')}}" method="post">
    @csrf
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Title</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="title" class="form-control form-control-lg" />

              </div>
            </div>

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Location</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="location" class="form-control form-control-lg" />

              </div>
            </div>

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Experience</h6>

              </div>
              <div class="col-md-9 pe-5">
              <select class="form-select" aria-label="Default select example" name="experience">
  <option selected>select experience</option>
  <option value="Junior" >Junior</option>
  <option value="Senior" >Senior</option>
  <option value="Team Ladear" >Team Ladear </option>
  
</select>
              </div>
            </div>


            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Role Type</h6>

              </div>
              <div class="col-md-9 pe-5">
              <select class="form-select" aria-label="Default select example" name="role_type">
  <option selected>role types</option>
  <option value="Full time" >Full Time</option>
  <option value="Part time" >Part Time</option>
  <option value="Remote" >Remote</option>
  
</select>
              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0"> Description	</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" name="description"></textarea>

              </div>
            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Responsibilites</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" name="responsibilites"></textarea>

              </div>
            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Offers</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" name="offers"></textarea>

              </div>
            </div>
            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">Send application</button>
            </div>

          </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
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
