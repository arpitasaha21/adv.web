@entends('layouts.loggedin')
@section('me')
<form action="{route('add.submit')}}" method="post">
    {{csrf_field()}}
    <input type= "text" name="name" placeholder= "Name"></br>
    <input type= "text" name="id" placeholder= "Id"></br>
    <input type= "text" name="cgpa" placeholder= "Cgpa"></br>
    <input type= "radio" name="gender" placeholder= "Gender"></br>
    <input type= "checked" name="hobbies" placeholder= "Hobbies"></br>
    <input type= "date" name="dob" placeholder= "Date of birth"></br>
    <input type= "submit" value= "Add">
</form>
@endsection