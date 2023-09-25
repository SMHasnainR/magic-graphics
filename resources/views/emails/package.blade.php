<!DOCTYPE html>
<html>
<head>
    <title>Client Request for Plans</title>
</head>
<body>
    <h1>Client Request for Plans</h1>
    <h3>Client Details</h3>
    <p>Client Name: {{ $clientDetails['name'] }}</p>
    <p>Email: {{ $clientDetails['email'] }}</p>
    <p>Phone: {{ $clientDetails['phone_no'] }}</p>
    <hr>
    <hr>
    <p>Plan: <b>{{ $package['name'] }}</b> </p>
    <p>Requested Features:</p>
    <ul>
        @foreach($package['features'] as $feature)
            <li>{{ $feature }}</li>
        @endforeach
    </ul>
</body>
</html>
