
@extends('layout.app')
@section('content3')
@endsection

@section('content')
@endsection

@section('content2')
@endsection

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