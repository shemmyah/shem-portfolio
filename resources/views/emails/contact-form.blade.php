<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact</title>
</head>
<body style="margin: 0; padding: 40px; background-color: #f4f4f4; font-family: Arial, sans-serif; color: #000000;">
    
    <h2 style="margin-top: 0; margin-bottom: 20px;">New Contact Message</h2>
    
    <p style="font-size: 16px; line-height: 1.6; margin-bottom: 15px;">Name: {{ $name }}</p>
    <p style="font-size: 16px; margin-bottom: 10px">Email: {{ $email }}</p>
    <div style="background-color: #f9f9f9; border-left: 4px solid #7b9b9c; padding: 15px; margin: 20px 0;white-space: pre-line; color: #444; border-radius: 4px;">
        Message:
        <p>{{ $messageContent }}</p>
    </div>
</body>
</html>


