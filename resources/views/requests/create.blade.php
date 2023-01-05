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
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Add a Job</h1>
<form action="{{route('request.store',$id)}}" method="post">
    @csrf
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="fullname" class="form-control form-control-lg" />

              </div>
            </div>
       
            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0"> Email	</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input  type="email" class="form-control" rows="3" name="email">

              </div>
            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Phone</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input  type="text" class="form-control" rows="3" name="phone">


              </div>
            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">addres</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input  type="text" class="form-control" rows="3" name="addres">


              </div>
            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Linked In</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input  type="text" class="form-control" rows="3" name="linkedin">
              </div>
            </div>
            <hr class="mx-n3">
            <div class="col-md-9 pe-5">


            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Linked In</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input class="form-control form-control-lg" id="formFileLg" type="file" name="cv_file" />
<div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
  size 50 MB</div>

</div>
              </div>
            </div>  

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