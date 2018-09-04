@extends('/app')

@section('title', 'Brothers Create')


@section('content')
<br><b><a href="/brothers">Brothers</a></b> / 

<form action="/brothers/" method="post">
{{csrf_field()}}

Name: <br>
<input type="text" name="name"> <br><br>

Age: <br>
<input type="text" name="age"> <br><br>

<input type="submit" value="Create">

</form>

@endsection