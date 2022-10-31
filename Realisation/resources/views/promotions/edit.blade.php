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
                    <div class="col-sm-8"><h2><b>Update</b> Promotion</h2></div>
                            
                </div>
            </div>
            <div class="search-box">
                <form action="{{route('promotions.update',['promotion'=>$promotion->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <input class="form-control" value="{{$promotion->name}}" type="text" name="name">
                    <br>
                    <div id="Addbtn">
                        <button type="submit" class="btn btn-info add-new" >
                            Update
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
            <br>

            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                    <div class="search-box">
                        <input name="search" id="search" type="text" class="form-control" placeholder="Search&hellip;">
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20%">First Name</th>
                                <th style="width: 20%">Last Name</th>
                                <th style="width: 40%">Email</th>
                                <th id="action" style="width: 10%">Edit</th>
                                <th id="action" style="width: 10%">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="table1">
                            @foreach($apprenants as $values)
                                <tr > 
                                    <td>{{ $values['Prenom'] }}</td>
                                    <td>{{ $values['Nom'] }}</td>
                                    <td>{{ $values['Email'] }}</td> 
                                    
                                    <td>
                                        <a class="edit" title="Edit" data-toggle="tooltip" href="{{ route('gestion.editstudent',[$values['id']]) }}"><button  class="btn btn-success" type="submit"><i class="material-icons">&#xE254;</i></button></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('gestionstud.destroy',[$values['id']]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a class="delete" title="Delete" data-toggle="tooltip"><button  class="btn btn-danger" type="submit"><i class="material-icons">&#xE872;</i></button></a>
                                        <td> <input id="pp" type="hidden" value="{{$values['PromotionID']}}"></td>
                                        </form>
                                    </td>
                                     
                                </tr>
                            @endforeach      
                        </tbody>
                     {{-- table serch vid --}}
                     <tbody id="Content" class="table2">
                    </tbody>
                </table>
                <div id="Addbtn">
                <a  class="btn btn-info add-new" href="{{route('gestion.insert', $promotion->id)}}"> Ajouter apprenant</a>
                </div>
                {{-- for search student --}}
                
                <script type="text/javascript">
                    $('#searchstudent').on('keyup',function(){
                        $value=$(this).val();
                        $idp=$('#pp').val();
                        if($value){
                            $('.table1').hide();
                            $('.table2').show();
                        }
                        else{
                            $('.table1').show();
                            $('.table2').hide();
                        }
                        $.ajax({
                            type:'get',
                            url:'{{URL::to("searchstudent")}}',
                            data:{'search':$value,'PromotionID':$idp},
                            success:function(data){
                                console.log(data);
                                $('#Content').html(data);
                            }
                        });
                    })
                    </script>
                    
                </div>
            </div>


</body>
</html>