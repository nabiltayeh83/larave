@extends('/app')


@section('title', 'Edit Dream')



@section('content')

<h3><a href="/dreams">Dreams</a> / Edit</h3> 

@if(isset($result))
	@foreach($result as $r)

<div class="jumbotron">

{!! Form::open(['route' => ['dreams.update', $r->id], 'method' => 'POST']) !!}
{{ csrf_field() }}
{{ method_field('PUT') }}

{{ Form::label('title_itm', 'Dream') }}
{{ Form::text('dream', $r->dream, ['class' => 'form-control', 'style' => 'margin:10px;']) }}

{{ Form::label('title_itm', 'Result') }}
{{ Form::text('details', $r->details, ['class' => 'form-control']) }}
{{ Form::submit('Edit', ['class' => 'btn btn-primary', 'style' => 'margin:10px;']) }}

<a class="btn btn-default" href="/dreams">Cancle</a>
{!! Form::close() !!}

</div>
    @endforeach
@endif

@endsection