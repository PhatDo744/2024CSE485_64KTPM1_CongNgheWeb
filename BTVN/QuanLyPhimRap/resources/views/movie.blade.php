@foreach($movies as $movie)
    <h1>{{ $movie->title }}</h1>
    <p>{{$movie->director}}</p>
    <p>{{$movie->release_date}}</p>
    <p>{{$movie->duration}}</p>
    <p>{{$movie->cinema_id}}</p>
@endforeach