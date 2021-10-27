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
    
  <div class="container">


    <form action="{{ route('store.contact') }}" method="POST">
        @csrf


        @if (session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
    <p class="text-center">{{ session('success')}}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
   @endif
   
      <h1 class="text-center mt-5">Contact Form</h1>

      <a href="{{URL::to('/show.contact')}}" class="btn btn-info" style="text-decoration: none;">Contact Show Page</a>
      <a href="{{URL::to('/about')}}" class="btn btn-info" style="text-decoration: none;">About Form Page</a>
   
      
      <div class="row">

      <div class="col-md-6 offet-md-3 m-5">

       
        <div class="mb-3">
            <label for="firstname">First Name </label>
            <input type="text" class="form-control" id="firstname"name="firstname" placeholder="Enter First Name">
        </div>
        <div class="mb-3">
        <label for="lastname">Last Name </label>
        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name">
    </div>
    <div class="mb-3">
        <label for="fullname">Full Name </label>
        <input type="text" class="form-control" name="fullname"id="fullname" placeholder="Enter Full Name">
    </div>
    <div class="mb-3">
        <label for="username">UserName </label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter UserName">
    @error('username')
    <small class="text-danger"> {{$message}}</small>
    @enderror
    </div>
    <div class="mb-3">
        <label for="email">Email </label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email ">
    </div>
    <div class="mb-3">
        <label for="phone">Phone Number </label>
        <input type="text"name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
    </div>
    <div class="mb-3">


        <label for="subject">Subject </label>
    <select name="subject" id="subject" class="form-select" >
        <option  selected disabled value="">Choose Subject</option>
      {{-- <option value="">Subject</option> --}}
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="CEN">CEN</option>
       
    
       </select>

       <div class="mb-3">
           <label for="message">Message</label>
       <textarea class="form-control" name="message" id="message"style="height:200px; width:100%;" placeholder="Write something.."></textarea>
    </div>
       <div class="mb-3">
        <label for="password">Password </label>
        <input type="password" class="form-control" name="password" id="password" placeholder="password">
    </div>
       <div class="mb-3">
        <label for="repeatpassword">Repeat Password </label>
        <input type="password" class="form-control"name="repeatpassword" id="repeatpassword" placeholder="repeatpassword">
    </div>
     <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </form>

    
  </div>












    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>