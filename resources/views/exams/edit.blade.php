@extends('/app')


@section('title', 'Edit Exam')



@section('content')

<h3><a href="/exams">Exams</a> / Edit</h3> 

@if(isset($result))
	@foreach($result as $r)



<div class="jumbotron">

{!! Form::open(['route' => ['exams.update', $r->id], 'method' => 'POST']) !!}
{{ csrf_field() }}
{{ method_field('PUT') }}

{{ Form::label('title_itm', 'Name') }}
{{ Form::text('name', $r->name, ['class' => 'form-control', 'style' => 'margin:10px;']) }}

{{ Form::label('title_itm', 'Result') }}
{{ Form::text('result', $r->result, ['class' => 'form-control', 'style' => 'margin:10px;']) }}

{{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
<a class="btn btn-default" href="/exams">Cancle</a>

{!! Form::close() !!}

</div>

    @endforeach
@endif

@endsection