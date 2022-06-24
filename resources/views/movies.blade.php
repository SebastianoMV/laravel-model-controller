@extends('layout.main')


@section('content')

  <div class="container d-flex flex-wrap">

    @foreach($movies as $movie)
      <div class="card text-center p-3">
    
        <h3>{{$movie->title}}</h3>

        <p>
          Titolo originale:
          <br>
          {{$movie->original_title}}
        </p>

        <div class="my-3">
          @for($i = 1; $i < 5; $i++)
            @if($i <= (round($movie->vote) / 2))
              <label for="star-5" class="star">
              <i class="fas fa-star"span class="star star--gold"></span></i>
              </label>
            @else
            @endif
          @endfor
        </div>

        <p>
          Uscita:
          <br>
          {{$movie->date}}
        </p>
    
      </div>
    @endforeach

 </div> 

@endsection