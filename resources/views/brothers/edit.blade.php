@extends('/app')

@section('title', 'Brothers Edit')


@section('content')
<br><b><a href="/brothers">Brothers</a></b> / <br><br>

@if(isset($result))

@foreach($result as $r)

<form action="/brothers/{{$r->id}}" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value="put">


Name <br>
<input type="text" name="name" value="{{$r->name}}"><br><br>


Age <br>
<input type="text" name="age" value="{{$r->age}}"><br><br>

<input type="submit" value="Edit">

</form>

@endforeach
@endif


@endsection