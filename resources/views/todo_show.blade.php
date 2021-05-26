<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
</br>
<a href="todo_create">Add New Records</a></br>
{{session('msg')}}
<!-- <a href="todo_create" class="btn btn-primary stretched-link">Add Record</a> -->
    
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($todoArr as $todo)
    <tr>
      <th scope="col">{{$todo->id}}</th>
      <th scope="col">{{$todo->name}}</th>
      <th scope="col">{{$todo->created_at}}</th>
      <th scope="col">
      <a href="todo_delete/{{$todo->id}}">Delete</a>
      <a href="todo_edit/{{$todo->id}}">Edit</a>
      </th>
    </tr>
    @endforeach
    
    </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>