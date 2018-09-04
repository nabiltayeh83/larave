@extends('/app')

@section('title', 'Show Exam')


@section('content')

<h3><a href="/exams">Exams</a> / Show</h3> 




@if(isset($result))
	@foreach($result as $r)

<div class="jumbotron">
  <h1>{{$r->name}}</h1>
  <p>({{$r->result}}%)</p>
  <p><a class="btn btn-primary btn-lg" href="/exams/{{$r->id}}/edit" role="button">Edit Exam</a></p>
</div>

    @endforeach
@endif

@endsection