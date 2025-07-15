<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
</head>
<body style="margin: 0; padding: 40px; background-color: #f4f4f4; font-family: Arial, sans-serif; color: #000000;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
        <h2 style="margin-top: 0; margin-bottom: 20px;">Hi {{ $name }},</h2>

        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 15px;">
            Thank you for reaching out! I've received your message and will get back to you as soon as I can.
        </p>

        <p style="font-size: 16px; margin-bottom: 10px">Here's what you wrote:</p>

        <div style="background-color: #f9f9f9; border-left: 4px solid #7b9b9c; padding: 15px; margin: 20px 0;white-space: pre-line; color: #444; border-radius: 4px;">
            {{ $messageContent }}
        </div>

        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 30px;">
            In the meantime, feel free to check out my portfolio or connect with me on social media.
        </p>

        <hr style="border: none; border-top: 1px solid #ccc; margin: 30px 0;">

        <p style="font-size: 14px; color: #888; margin: 0;">
            Shem de los Reyes<br>
            Portfolio Website
        </p>
    </div>
</body>
</html>
