@foreach($books as $book)
    <div class="book">
        <h2>{{ $book->title }}</h2>
        <p>{{ $book->author }}</p>
        <p>{{$book->publication_year}}</p>
        <p>{{$book->genre}}</p>
        <p>{{$book->library_id}}</p>
    </div>
@endforeach