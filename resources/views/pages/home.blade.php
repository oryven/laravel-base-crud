@extends('layout.main-layout')

@section('content')

<h1>comics</h1>
<ul>
    
    @foreach ($Comics as $comic)
    <li>
        <a href="{{ route('comic', $comic->id)}}">{{$comic -> title }}, {{$comic -> author }}, {{$comic -> pages}} {{$comic -> release_date}}</a>
    </li>      
    @endforeach
</ul>
        
@endsection