@extends('layouts.loggedin')
@section('me')

<html>
<div id="Contact">
        <h2>Contact</h2>
        @foreach($contact as $con)
        <ul>
            <li><b>PhoneNo:</b>{{$con->PhoneNo}}</li>
            <li><b>Email :</b>{{$con->Email}}</li>
            <li><b>Address:</b>{{$con->Address}}</li>
            
        </ul>
        @endforeach
    </div>
    </html>
@endsection