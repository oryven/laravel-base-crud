@extends('layout.main-layout')

@section('content')

<h1>{{$comic -> title }}</h1>

<h4>{{$comic -> release_date}}</h4>  
        
@endsection