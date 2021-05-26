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
<a href="todo_show">Back</a>
<div>
<form method="POST" action="{{route('todo.update',[$todoArr->id])}}">
 @csrf
    <table class="table">
    <tr>
        <td>Name</td>
        <td><input type="textname" name="name" value="{{$todoArr->name}}"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="update"></td>
    </tr>
    </table>
</div>  
</body> 
</html>