@foreach($it_centers as $itcenter)
    <p>{{ $itcenter->name }}</p>
    <p>{{ $itcenter->location }}</p>
    <p>{{ $itcenter->contact_email }}</p>
    <hr>
@endforeach