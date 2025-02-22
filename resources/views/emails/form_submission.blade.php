<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Confirmation</title>
</head>
<body>
    <h1>Thank you for your submission!</h1>
    <p>Hi {{ $submission['name'] }},</p>
    <p>Thank you for reaching out. We have received your submission and will get back to you shortly.</p>
    <p><strong>Details:</strong></p>
    <ul>
        <li>Name: {{ $submission['name'] }}</li>
        <li>Email: {{ $submission['email'] }}</li>
        <li>Subject: {{ $submission['subject'] }}</li>
        <li>Category: {{ $submission['category'] }}</li>
    </ul>
</body>
</html>
