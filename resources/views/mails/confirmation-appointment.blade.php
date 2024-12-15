<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Your appointment has been confirmed</h1>
    <div class="container">
        <h2>Hello, {{  $name  }}</h2>
        <h3>You have successfully booked an appointment with {{  $appointment->doctor->name  }}</h3>
        <h5><a href="{{ $appointment->doctor->location }}" target="_blank">Location of the clinic</a></h5>
        <h3>Date: {{  $appointment->appointment_date  }}</h3>
    </div>
    <h5>"Enjoy the experience of booking easy and fast appointments,
        and always keep in touch with your favorite doctors!"</h5>
</body>
</html>