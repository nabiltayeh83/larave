@extends('/app')

@section('title', 'Create Dream')


@section('content')

<h3><a href="/dreams">Dreams</a> / Create</h3>

<div class="jumbotron">


{!! Form::open(['route' => 'dreams.store', 'method' => 'POST']) !!}
{{csrf_field()}}

{{ Form::label('title_itm', 'Dream') }}
{{ Form::text('dream', '' , ['class' => 'form-control', 'autofocus' => 'autofocus', 'style' => 'margin:10px;']) }}

{{ Form::label('title_itm', 'Details') }}
{{ Form::text('details', '', ['class' => 'form-control', 'style' => 'margin:10px;']) }}

{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}

<a class="btn btn-default" href="/dreams">Cancle</a>

{!! Form::close() !!}

</div>

@endsection