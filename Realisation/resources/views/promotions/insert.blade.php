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
                    <div class="col-sm-8"><h2><b>Add</b> Apprenant in {{$id}}</h2></div>
                            
                </div>
            </div>
            <br>
            <div id="Addbtn">
                <form action="{{Route('gestionstud.store')}}" method="POST">
                    @csrf
                    <input type="text" name="Prenom" placeholder="Prenom" >
                    <br>
                    <br>
                    <input type="text" name="Nom" placeholder="Nom">
                    <br>
                    <br>
                    <input type="email" name="Email" placeholder="Email">
                    <br><br>
                    <input type="hidden" name="PromotionID" value="{{$id}}"><br><br>
                    {{-- {{dd($id)}} --}} 
                    <div class="btnn" style="text-align: center">
                        <button  class="btn btn-success" type="submit">Ajouter</button>
                    </div>
                    </form>
                </div>
            
        </div>
    </div>     
</body>
</html>


