@foreach($laptops as $laptop)
    <p>This is laptop {{ $laptop->id }}</p>
    <p> {{ $laptop->brand }}</p>
    <p> {{ $laptop->model }}</p>
    <p> {{ $laptop->specifications }}</p>
    <p> {{ $laptop->rental_status }}</p>
    <p> {{ $laptop->renter_id }}</p>
    <hr>
@endforeach
