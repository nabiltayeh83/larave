@extends('layouts.app')

@section('content')

<div class="container">

<h1>Thumbnail Image Uploading Demo</h1>

@if (count($errors) > 0)

	<div class="alert alert-danger">

		<strong>Whoops!</strong> There were some problems with your input.<br><br>

		<ul>

			@foreach ($errors->all() as $error)

				<li>{{ $error }}</li>

			@endforeach

		</ul>

	</div>

@endif

@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

    <strong>{{ $message }}</strong>

</div>

<div class="row">

	<div class="col-md-12">

		<strong>Original Image:</strong>

		<br/>

		<img src="/images/{{ Session::get('imageName') }}" width="500px" />

	</div>

	<div class="col-md-12">

		<strong>Thumbnail Image:</strong>

		<br/>

		<img src="/images/thumbnail/{{ Session::get('imageName') }}" />

	</div>

</div>

@endif

{!! Form::open(array('route' => 'thumbnailImagePost','enctype' => 'multipart/form-data')) !!}

	<div class="row">

		<div class="col-md-4">

			<strong>Add Title:</strong>

			{!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Add Title')) !!}

		</div>

		<div class="col-md-12">

			<strong>Add Image:</strong>

			{!! Form::file('image', array('class' => 'image')) !!}

		</div>

		<div class="col-md-12">

			<br/>

			<button type="submit" class="btn btn-success">Upload Image</button>

		</div>

	</div>

{!! Form::close() !!}

</div>

@endsection