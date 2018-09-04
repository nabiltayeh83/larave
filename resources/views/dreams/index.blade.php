@extends('/app')

@section('title', 'Dreams')


@section('content')
<h3>Dreams</h3> 
<a href="/dreams/create" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create a New</a>


@if(isset($results))

<br /><br /><div class="jumbotron">
@foreach($results as $r)    

  <h3>{{$r->dream}}</h3>
 
    <a href="/dreams/{{$r->id}}" type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
    <a href="/dreams/{{$r->id}}/edit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
    <a href="/dreams/delete/{{$r->id}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> 
    <hr /><br />
 
@endforeach
</div>

@endif

@endsection