@extends('/app')


@section('title', 'Edit')


@section('content')
<br><a href="/photos/"><b>Photos</b></a>
<br><br>

@if(isset($result))
@foreach($result as $r)
<form action="/photos/{{$r->id}}/" method="post">

{{csrf_field()}}
<input type="hidden" name="_method" value="put" />

Photo<br>
<input type="text" name="photo" value="{{$r->photo}}" />
<br><br>

Details<br>
<input type="text" name="details" value="{{$r->details}}" />
<br><br>

<input type="submit" value="Edit" />
</form>
@endforeach
@endif

@endsection