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
        @if($clientDetails['package_id'] == 1)
            <li>
                Upto to {{ $clientDetails['features']['creatives'] }} creatives per month
            </li>
            <li>
                {{ $clientDetails['features']['graphicDesigners'] }} dedicated graphic designer
            </li>
            <li>
                {{ $clientDetails['features']['motionGraphicDesigner'] }} dedicated motion/graphic designer
            </li>
            <li>
                {{ $clientDetails['features']['videos'] }} Videos upto {{ $clientDetails['features']['mins'] }} mins  
            </li>
            <li>
                {{ $clientDetails['features']['revisions'] }} Revisions
            </li>
            <li>
                {{ $clientDetails['features']['brands'] }} Brands
            </li>

            {{-- @foreach($clientDetails['features'] as $key => $feature)
                <li>{{ $feature }}</li>
            @endforeach --}}
        @else
            @foreach($package['features'] as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        @endif

    </ul>
</body>
</html>
