@extends('layouts.loggedin')
@section('me')

<html> 
    <body>
    <div id="aboutMe">
        <h2>Profile</h2>
      
@foreach($profile as $p)

   <p>Name:{{$p->Name}}</p>
   <p>Id:{{$p->Id}}</p>

@endforeach

    

   
</body>
   </html>

@endsection