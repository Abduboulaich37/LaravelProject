<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Promotions Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/firstpage.css'); }} " >

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Promotions</b> Table</h2></div>
                            
                    <div class="col-sm-4">
                        <a href="{{route('promotions.create')}}"><button type="button" class="btn btn-info add-new" ><i class="fa fa-plus"></i> Add New</button></a>
                    </div>
                </div>
            </div>
            <div class="search-box">
                <input name="search" id="search" type="text" class="form-control" placeholder="Search&hellip;">
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10%">ID</th>
                        <th style="width: 70%">Promotion</th>
                        <th id="action" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody id="data" class="table1">
                    @foreach ($promotions as $promotion)
                    <tr>
                        <td >{{ $promotion->id }}</td>
                        <td >{{ $promotion->name }}</td>
                        <td >
                            {{-- href="{{route('promotions.apprenent',$promotion->id)}}" --}}
                            <a class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
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