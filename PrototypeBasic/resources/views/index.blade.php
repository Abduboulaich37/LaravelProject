
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>action</th>
    </thead>
    <tbody>
        @foreach($data as $promotions)
        <tr>
            <td>{{$promotions->id}}</td>
            <td>{{$promotions->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>