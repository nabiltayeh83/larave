@extends('/app')


@section('title', 'Show')


@section('content')
<br><a href="/photos/"><b>Photos</b></a>
<br><br>

	@if(isset($result))
    	@foreach($result as $r)
        <b>{{$r->photo}}</b><br><br>
       {{$r->details}}
        
        <hr><br>
        @endforeach
    @endif

@endsection