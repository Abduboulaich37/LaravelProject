<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Page</title>

</head>
<body>
    <div id="container">

    <form action="{{'insert'}}"method="Post">
        @csrf
        <input id="typing" type="text" name="name" >
        <input id="click" type="submit" name="submit">
    </form>
    <br>
    <a href="{{route('index')}}">All Promotions</a>
</div>
</body>
</html>