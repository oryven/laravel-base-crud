@extends('layout.main-layout')

@section('content')

<h1>{{$comic -> title }}</h1>

<p>{{$comic -> release_date}}, {{$comic -> author }}, {{$comic -> pages}}</p>  
        
@endsection