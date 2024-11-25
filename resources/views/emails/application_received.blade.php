<!DOCTYPE html>
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
        <div class="header" style="text-align: center; margin-bottom: 20px;">
            <img src="https://www.scholarsmate.co.in/assets/source/images/about/LOGO.jpg" alt="Institution Logo" style="max-width: 150px;">
        </div>
        <div class="email-card" style="background: #f9f9f9; padding: 20px; border-radius: 10px; font-family: Arial, sans-serif; color: #333;">
            <div class="content">
                <h1 style="color: #007BFF;">Thank You for Applying at Scholar's Mate, {{ $application->name }}!</h1>
                <p>Dear {{ $application->name }},</p>
                <p>
                    We have successfully received your application for the <strong>{{ $application->career->position }}</strong> role at Scholar's Mate.
                    Our recruitment team will review your application and reach out to you for further steps.
                </p>
                <p>
                    Attached is a copy of the resume you uploaded for your records. If you have any questions, please feel free to contact us.
                    You can also respond to this email or reach us at your convenience.
                </p>
                <p>Best regards,<br>The Recruitment Team<br>Scholar's Mate<br>Bhagalpur</p>
            </div>
        </div>
        <div class="footer" style="text-align: center; margin-top: 20px;">
            <p style="font-size: 12px; color: #555;">
                Copyright &copy;
                <a href="https://www.scholarsmate.co.in" style="text-decoration: none; color: #007BFF;">
                    Scholar's Mate
                </a>
            </p>
        </div>
    </div>
</body>

</html>