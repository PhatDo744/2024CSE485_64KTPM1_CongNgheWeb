@foreach ($renters as $renter)
    <p>This is user {{ $renter->id }}</p>
    <p> {{ $renter->name }}</p>
    <p>{{ $renter->phone_number }}</p>
    <p>{{ $renter->email }}</p>
    <hr>
@endforeach