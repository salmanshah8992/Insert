<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <div class="container mt-3">

              @if (session('success'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-center">{{ session('success')}}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
              @endif

        <h2>About Form</h2>
        <a href="{{URL::to('/show.about')}}" class="btn btn-info" style="text-decoration: none;">About Show Page</a>
        <a href="{{URL::to('/')}}" class="btn btn-info" style="text-decoration: none;">Contact Form Page</a>
        
        <form action="{{ route('store.about')}}" method="POST">
            @csrf
          <div class="mb-3 mt-3">
            <label for="fullname">Fullname:</label>
            <input type="fullname" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname">
          </div>
          <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control"@error('email') is-invalid @enderror id="email" placeholder="Enter email" name="email">
            @error('email')
            <small class="text-danger"> {{$message}}</small>
            @enderror
        
        </div>
          <div class="mb-3 mt-3">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        <a href="{{URL::to('/show.about')}}" class="btn btn-info" style="text-decoration: none;">About Show Page</a>
      </div>
      




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>