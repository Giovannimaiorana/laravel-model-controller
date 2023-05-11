@extends('layouts.generalLayout')
@section('page_title','Movie')

@section('content')
    
   <h1>lista film</h1>
   <ul>
    @foreach ($movies as $movie)
        <li>{{$movie->title}} - {{$movie->original_title}} - {{$movie->nationality}}</li>
    @endforeach
</ul>


@endsection
