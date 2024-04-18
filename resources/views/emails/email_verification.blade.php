<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        /* Reset styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        /* Heading */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            /* Center align */
        }

        /* Paragraph */
        p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        /* Button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background-color: #4285f4;
            border-radius: 4px;
        }

        /* Verification Code */
        .verification-code {
            font-size: 24px;
            font-weight: bold;
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
            border-radius: 4px;
        }

        /* Footer */
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Verify Your Email Address</h1>
        <p>Hi there,</p>
        <p>Welcome to {{ env('APP_NAME') }}! To complete your registration and access all the features of our platform,
            please verify your email address by entering the 4-digit verification code below:</p>
        <!-- Replace XXXX with the actual 4-digit verification code -->
        <div class="verification-code">{{ $verificationCode ?? '' }}</div>
        <p class="footer">If you didn't create an account with us, you can safely ignore this email.</p>
        <p class="footer">Thank you,<br>{{ env('APP_NAME') }}</p>
    </div>
</body>

</html>
