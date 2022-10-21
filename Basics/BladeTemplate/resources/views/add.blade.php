<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="{{route('index')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('add')}}">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('table')}}">Table</a>
  </li>
</ul>
<br>
<div class="d-flex justify-content-center">
  <form action="/welcome.blade.php" method="POST">
      <input type="text" name="promotion" placeholder="Name of Promotion">
      <input type="submit" name="submit" >
      @csrf
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
  </form>
</div>
</body>
</html>