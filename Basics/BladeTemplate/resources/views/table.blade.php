<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

{{------------------------------------------------------------------------------------------}}
{{-- if there is more than 0 promotions in our table will be loop on the promotions --}}
@if (count($table) > 0)
    <ul>
        @foreach ($table as $promotions)
        <li>{{ $promotions['name'] }}</li>
        @endforeach
    </ul>
@else 
{{-- else if there is no promotions in our table will will dispay this message ! --}}
    <p>there are no names to display</p>
@endif
{{------------------------------------------------------------------------------------------}}


</body>
</html>