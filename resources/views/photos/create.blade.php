@extends('/app')


@section('title', 'Create')


@section('content')
<br><a href="/photos/"><b>Photos</b></a>
<br><br>

<form action="/photos" method="post">
{{csrf_field()}}
Photo<br>
<input type="text" name="photo" />
<br><br>

Details<br>
<input type="text" name="details" />
<br><br>

<input type="submit" value="Create" />

</form>

@endsection