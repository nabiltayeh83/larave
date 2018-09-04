@extends('/app')

@section('title', 'Brothers Show')


@section('content')
<br><b><a href="/brothers">Brothers</a></b> / <br><br>

@if(isset($result))

	@foreach($result as $r)
    {{$r->name}} (<a href="/brothers/{{$r->id}}/edit">Edit</a> | <a href="/brothers/delete/{{$r->id}}/">Delete</a>)<br>
    {{$r->age}}
    @endforeach

@endif

@endsection