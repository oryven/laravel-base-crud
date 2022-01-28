@extends('layout.main-layout')

@section('content')

{{-- <h1>films</h1>
<ul>
    
    @foreach ($movies as $movie)
    <li>
        <a href="{{ route('movie', $movie->id)}}">{{$movie -> title }} {{$movie -> release_date}}</a>
    </li>      
    @endforeach
</ul> --}}
        
@endsection