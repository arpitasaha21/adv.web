@extends('layouts.loggedin')
@section('me')
<html>
<div id="refrence">
        <h2>Refrences</h2>
        @foreach($refrence as $r)
        
                <p>Name:{{$r->Name}}<p><br>
                <p>$prof:{{$r->prof}}</p><br>
                <p>Contact Number:{{$r->PhoneNo}}</p><br>
        
        @endforeach
    </div>
   
    </html>
    @endsection