</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<h1>All Information About Devices</h1>

@foreach ($usermob as $device)
<li> {{ $device}}  </li>
@endforeach


@foreach ($usermob as $device)
name
<li> {{ $device->name}}  </li>

@endforeach



@foreach ($usermob as $device)
email
<li> {{ $device->email}}  </li>
@endforeach

@foreach ($usermob as $device)
phone number
<li> {{ $device->mobil}}  </li>
@endforeach
    
</body>
</html>