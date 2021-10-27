<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        {{-- {{ dd($contacts)}} --}}
       <section>
           <div class="container">
               <h3 class="text-center">Contact form manage</h3>
               <a href="{{URL::to('/')}}" class="btn btn-info" style="text-decoration: none;">Contact Form Page</a>
                <table class="table table-bordered m-5">
                    <thead>
                        <tr>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>fullname</th>
                            <th>username</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>message</th>
                            <th>fullname</th>
                            <th>password</th>
                            <th>repeatpassword</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($contacts as $contact)
                       <tr>
                        <td>{{ $contact->firstname }}</td>
                        <td>{{ $contact->lastname }}</td>
                        <td>{{ $contact->fullname }}</td>
                        <td>{{ $contact->username }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->password }}</td>
                        <td>{{ $contact->repeatpassword }}</td>
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
</html>