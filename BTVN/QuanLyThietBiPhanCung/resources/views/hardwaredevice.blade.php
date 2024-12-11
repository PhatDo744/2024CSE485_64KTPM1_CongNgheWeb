@foreach($hardware_devices as $hardwaredevice)
    <p>{{ $hardwaredevice->device_name }}</p>
    <p>{{ $hardwaredevice->type }}</p>
    <p>{{ $hardwaredevice->note }}</p>
    <p>{{ $hardwaredevice->status }}</p>
    <p>{{ $hardwaredevice->center_id }}</p>
    <hr>
@endforeach