@extends('/app')


@section('title', 'Photos')


@section('content')
<br><b>Photos</b> / <a href="/photos/create">Create</a>
<br><br>

	@if(isset($results))
    	@foreach($results as $r)
        <b>{{$r->photo}}</b><br>
        <a href="/photos/{{$r->id}}">Show</a> |
        <a href="/photos/{{$r->id}}/edit">Edit</a> |
        <a href="/photos/delete/{{$r->id}}">Delete</a> |        
        <hr><br>
        @endforeach
    @endif

@endsection