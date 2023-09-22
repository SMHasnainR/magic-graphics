<!DOCTYPE html>
<html>
<head>
    <title>Client Request for Specific Plans</title>
</head>
<body>
    <h1>Client Request for Specific Plans</h1>
    <p>Dear {{ $clientDetails['name'] }},</p>
    <p>Thank you for your request for specific plans. Below are the details of your request:</p>
    <ul>
        <li><strong>Plan Name:</strong> {{ $package['name'] }}</li>
        <li><strong>Requested Features:</strong></li>
        <ul>
            @foreach($package['features'] as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>
    </ul>
    <p>If you have any additional comments or questions, please feel free to contact us.</p>
    <p>Best regards,<br>Your Company Name</p>
</body>
</html>
