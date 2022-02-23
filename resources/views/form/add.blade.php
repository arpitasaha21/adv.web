@extends('layouts.loggedin')
@section('me')
<table>
<form action="{{route('add.submit')}}" method="post">
    {{csrf_field()}}
    Name:
    <input type= "text" name="name" ></br></br>
   @error('name')
   <span class="text-danger">{{$message}}</span><br>
   @enderror
   Id:
    <input type= "text" name="id"></br></br>
    @error('id')
   <span class="text-danger">{{$message}}</span><br>
   @enderror
   CGPA:
    <input type= "text" name="cgpa" ></br></br>
    @error('cgpa')
   <span class="text-danger">{{$message}}</span><br>
   @enderror
    <p>select your gender</p>
    <label><input name="gender" type="radio" value="male">Male </label>
    <label><input name="gender" type="radio" value="female">Female</label><br>
    @error('gender')
   <span class="text-danger">{{$message}}</span><br>
   @enderror
    <p>Choose your hobby</p>
    <label><input name="hobby" type="checkbox" value="gardening">gardening </label>
    <label><input name="hobby" type="checkbox" value="bookReading">Book Reading</label>
    @error('hobby')
   <span class="text-danger">{{$message}}</span><br>
   @enderror
   <br>
   Date of birth:
    <input type= "date" name="dob" placeholder= "Date of birth"></br><br>
    @error('dob')
   <span class="text-danger">{{$message}}</span><br>
   @enderror
   <br>
    <input type= "submit" value= "Add">
</form>
</table>
@endsection