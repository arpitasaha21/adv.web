@extends('layouts.loggedin')
@section('me')

<html>
<div id="qualification">
        <h2>Qualification</h2>
        <table>
            <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th>Result</th>
                <th>Year</th>
            </tr>
            @foreach($education as $e)
            <tr>
                <td>{{$e->Degree}}</td>
                <td>{{$e->Institution}}</td>
                <td>{{$e->Result}}</td>
                <td>{{$e->Year}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    </html>
    @endsection