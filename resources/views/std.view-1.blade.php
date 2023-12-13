<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container"mt-5>
        <center>
        <h1>students records update</h1>
    </center>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($stddata-1 as $value)
              <tr>
                <th scope="row">{{$value->id}}</th>
                <th scope="row">{{$value->name}}</th>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
                <td><a href="{{url('/')}}/std/dlt/{{$value->id}}">Delete</a></td>
                <td><a href="{{url('/')}}/std/update/{{$value->id}}">update</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</body>
</html>