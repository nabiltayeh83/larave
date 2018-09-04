@extends('/app')


@section('title', 'Login')



@section('content')
<b>Login</b><hr><br>

Please Enter Your No. (More than 50)<br><br>


<form action="exams" method="post">
{{csrf_field()}}

Student No.<br>
<input type="text" name="student_no"><br><br>
<input type="submit" value="Login">

</form>	

@endsection