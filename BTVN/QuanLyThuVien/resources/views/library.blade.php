@foreach($libraries as $library)
    <div class="library">
        <h2>{{ $library->name }}</h2>
        <p>{{ $library->address }}</p>
        <p>{{$library->contact_number}}</p>
    </div>
@endforeach