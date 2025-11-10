<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email dari {{ $data['name'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4F46E5;
            color: white;
            padding: 20px;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9fafb;
            padding: 30px;
            border: 1px solid #e5e7eb;
            border-radius: 0 0 5px 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2 style="margin: 0;">Pesan dari {{ $data['name'] }}</h2>
    </div>
    
    <div class="content">
        <p><strong>Dari:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        
        <hr style="border: 1px solid #e5e7eb; margin: 20px 0;">
        
        <div style="white-space: pre-wrap;">{{ $data['body'] }}</div>
    </div>
    
    <div class="footer">
        <p>Email ini dikirim melalui Laravel Mail System</p>
        <p>&copy; {{ date('Y') }} - Laravel Application</p>
    </div>
</body>
</html>