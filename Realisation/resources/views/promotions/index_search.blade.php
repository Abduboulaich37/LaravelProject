<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Promotions</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/firstpage.css'); }} " >

<body>
            <table class="table table-bordered" id="data">
                <tbody class="table1">
                    @foreach ($promotions as $promotion)
                    <tr>
                        <td >{{ $promotion->id }}</td>
                        <td >{{ $promotion->name }}</td>
                        <td >
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="{{route('promotions.edit',$promotion->id)}}"><i class="material-icons">&#xE254;</i></a>
                            <a href="Delete/{{$promotion->id}}" class="delete" title="Delete" type="submit" data-toggle="tooltip" value="Supprimer"><i class="material-icons">&#xE872;</i></a>

                        </td>
                    </tr>
                    @endforeach      
                </tbody>
            </table>
            <script src="/app.js"></script>
        </div>
    </div>     
</body>
</html>