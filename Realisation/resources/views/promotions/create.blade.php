<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
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
                    <div class="col-sm-8"><h2><b>Add</b>Promotion</h2></div>
                            
                    <div class="col-sm-4">
                        
                    </div>
                </div>
            </div>
            <div class="search-box">
                <form action="{{route('promotions.store')}}" method="post">
                    @csrf
                    <input class="form-control" type="text" name="name">
                    <br>
                    <div id="Addbtn">
                        <a href="{{route('promotions.create')}}">
                        <button type="submit" class="btn btn-info add-new" >
                            Add
                        </button>
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>     
</body>
</html>