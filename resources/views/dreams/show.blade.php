@extends('/app')

@section('title', 'Show Dream')


@section('content')

<h3><a href="/dreams">dreams</a> / Show</h3> 




@if(isset($result))
	@foreach($result as $r)

<div class="jumbotron">
  <h1>{{$r->dream}}</h1>
  <p>{{$r->details}}</p>
  <p><a class="btn btn-primary btn-lg" href="/dreams/{{$r->id}}/edit" role="button">Edit Dream</a></p>
</div>

    @endforeach
@endif

@endsection