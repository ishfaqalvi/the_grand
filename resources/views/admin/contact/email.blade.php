@if($type == 'User')
<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h2>Dear {{ $name }},</h2>
    <p>{{ $thankuMessage }}</p>
    <p><strong>Subject:</strong> {{ $subject }}</p>
    <p><strong>Message:</strong> {{ $text }}</p>
    <p>{{ $processingTime }}</p>
    <p>We appreciate your patience and understanding.</p>
    <p>Best Regards,</p>
    <p>The Grand</p>
</body>
</html>
@else
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Message</title>
</head>
<body>
    <h2>You have a new message from: {{ $name }}</h2>
    <p>Email: {{ $email }}</p>
    <p>Number: {{ $number }}</p>
    <p>Subject: {{ $subject }}</p>
    <p>Message: {{ $text }}</p>
</body>
</html>
@endif