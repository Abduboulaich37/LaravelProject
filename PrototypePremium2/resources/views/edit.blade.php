@foreach ($data as $promotions)
    
<form action="{{url('update')}}/{{$promotions->id}}" method="post">
    @csrf
    <input type="text" value="{{$promotions->name}}" name="name">
    <button>Update</button>
</form>
@endforeach