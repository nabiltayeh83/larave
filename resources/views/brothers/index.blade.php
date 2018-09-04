@extends('/app')

@section('title', 'Brothers')


@section('content')
<br><b><a href="/brothers">Brothers</a></b> / <a href="/brothers/create">Create</a><br><br>

@if(isset($results))
	
    @foreach($results as $r)
    {{$r->name}}
    <br>
    <a href="/brothers/{{$r->id}}">Show</a> | 
    <a href="/brothers/{{$r->id}}/edit">Edit</a> |     
    <a href="/brothers/delete/{{$r->id}}/">Delete</a>    
    <hr><br>
    @endforeach

@endif

@endsection