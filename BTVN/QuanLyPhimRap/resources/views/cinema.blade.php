@foreach($cinemas as $cinema)
    <h1>{{ $cinema->name }}</h1>
    <p>{{$cinema->location}}</p>
    <p>{{$cinema->total_seats}}</p>
@endforeach