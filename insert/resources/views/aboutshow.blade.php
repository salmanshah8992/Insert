<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
       
       <section>
           <div class="container">
               <h3 class="text-center">About </h3>
               <a href="{{URL::to('/about')}}" class="btn btn-info" style="text-decoration: none;">About Form Page</a>
                <table class="table table-bordered m-5">
                    <thead>
                        <tr>
                            <th>fullname</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($about as $abouts)
                       <tr>
                        <td>{{ $abouts->fullname }}</td>
                        <td>{{ $abouts->email }}</td>
                        <td>{{ $abouts->phone }}</td>
                        <td>{{ $abouts->password }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Detete</a>
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
           </div>
       </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>