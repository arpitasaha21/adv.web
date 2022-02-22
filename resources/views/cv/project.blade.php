@extends('layouts.loggedin')
@section('me')
<html>
<body>
<div id="project">
        <h2>Projects</h2>
        @foreach($project as $pr)
        
           <ol>  
        <li>C:{{$pr->C}}</li>
        <li>JAVA:{{$pr->JAVA}}</li>
        <li>Database:{{$pr->Database}}</li>
        <li>Csharp:{{$pr->Csharp}}</li>
        <li>SoftwareEngineering:{{$pr->SoftwareEngineering}}</li>
</ol>

@endforeach
</body>
</html>
@endsection