@extends('/app')

@section('title', 'Create Exam')


@section('content')

<h3><a href="/exams">Exams</a> / Create</h3>

<div class="jumbotron">


{!! Form::open(['route' => 'exams.store' , 'method' => 'POST']) !!}
{{csrf_field()}}

{{ Form::label('title_itm', 'Name') }}
{{ Form::text('name','', ['class' => 'form-control', 'autofocus' => 'autofocus', 'style' => 'margin:5px' ]) }}

{{ Form::label('title_itm', 'Result') }}
{{ Form::text('result', '', ['class' => 'form-control', 'style' => 'margin:5px']) }}

{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
<a class="btn btn-default" href="/exams">Cancle</a>


{!!  Form::close() !!}
</div>

@endsection