
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Datatable CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <title>Promotions</title>
</head>
<body>
<table id="myTable">
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
            <td>
                <a href="Edit/{{$promotions->id}}"><button>Edit</button></a>
                <a href="Delete/{{$promotions->id}}"><button>Delete</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('Add')}}">Add new Promotion</a>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>