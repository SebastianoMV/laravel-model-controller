@extends('layout.main')


@section('content')

  <h1>Movies</h1>

  @foreach($movies as $movie)
    <div class="card">
    
      {{$movie->title}}
    
    </div>
  @endforeach

@endsection