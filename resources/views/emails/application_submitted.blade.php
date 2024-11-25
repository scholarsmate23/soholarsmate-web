<html>

<head>
    <style>
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        .email-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            padding: 20px 0;
        }

        .header img {
            max-width: 150px;
        }

        .content {
            text-align: left;
            color: #333;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="https://www.scholarsmate.co.in/assets/source/images/about/LOGO.jpg" alt="Institution Logo">
        </div>
        <div class="email-card">
            <div class="content">
                <h1>Thank You for Applying in Scholar's Mate, {{ $applicant->name }}!</h1>
                <p>Dear {{ $applicant->name }},</p>
                <p>
                    Thank you for Enrollment in {{$applicant->course }} at our institution . Our representative will reach out to you shortly to guide you through the next steps.
                </p>
                <p>Best regards,<br>The Admissions Team <br> Scholar's Mate <br> Bhagalpur</p>
            </div>
        </div>
        <div class="footer">
            <p class="mb-0 text-white">Copyright &copy;
                <a href="https://www.scholarsmate.co.in" class="text-muted"><strong>Scholar's Mate</strong></a>
            </p>
        </div>
    </div>
</body>

</html>