<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promotions</title>
</head>
<body>
<table >
    <tbody id="data">
        @foreach($data as $promotions)
        <tr>
            <td>{{$promotions->id}}</td>
            <td>{{$promotions->name}}</td>
            <td>
                <a href="Edit/{{$promotions->id}}"><button>Edit</button></a>
                <a href="Delete/{{$promotions->id}}"><button>Delete</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="/app.js"></script>
</body>
</html>