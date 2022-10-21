<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>
    <div id="container">

    <form action="{{'insert'}}"method="Post">
        @csrf
        <input id="typing" type="text" name="name" >
        <input id="click" type="submit" name="submit">
    </form>
</div>
</body>
</html>