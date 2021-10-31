<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin form</title>
</head>
<body>
  

   
    <div class="container mt-3">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         <p class="text-center">{{ session('success')}}</p>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
   @endif

        <h1 class="text-center mt-5">Admin Form</h1>

        <form action="{{ route('admin') }}" method="POST">
            @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control"@error('email') is-invalid @enderror  id="email" name="email" placeholder="Enter email">
        @error('email')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" @error('password') is-invalid @enderror name="password" placeholder="Enter password">
        @error('password')
        <small class="text-danger"> {{$message}}</small>
        @enderror
    </div>
      <div class="mb-3">
        <label for="des" class="form-label">Write Something</label>
        <textarea class="form-control" id="des" name="des" rows="3"></textarea>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="CSE" checked>
        <label class="form-check-label" for="check2">CSE</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="SWE" >
        <label class="form-check-label" for="check1">SWE</label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="male" checked>
        <label class="form-check-label" for="radio1">Male</label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="female">
        <label class="form-check-label" for="radio2">Female</label>
      </div>
      <div >
          <input type="submit" class="btn btn-info" value="Submit">
      </div>
      </div>

    </form>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>