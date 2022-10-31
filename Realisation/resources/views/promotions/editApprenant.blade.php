

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Update Apprenant</title>
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
                    <div class="col-sm-8"><h2><b>Update</b> Apprenant</h2></div>
                </div>
            </div>
            <br>
            <div id="Addbtn">
                <form action="{{route('gestionstud.update',[$apprenant->id])}}" method="post">
                    @csrf
                    @method('PUT')
                 <input name="Prenom" value="{{$apprenant->Prenom}}" type="text" placeholder="Prenom" >
                 <br><br>
                 <input name="Nom" value="{{$apprenant->Nom}}" type="text" placeholder="Nom" >
                 <br><br>
                 <input name="Email" value="{{$apprenant->Email}}" type="email" placeholder="Email" >
                 <br><br>
                 <input type="hidden" name="PromotionID" value="{{$apprenant->PromotionID}}" placeholder="idpromotion">
                 <br><br>
                 <div id="Addbtn">
                    <button type="submit" class="btn btn-info add-new">Update</button>
                    </div>
                </form>
                </div>
            
        </div>
    </div>     
</body>
</html>