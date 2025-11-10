<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 40px 30px;
        }
        .welcome-message {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }
        .user-info {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 25px 0;
            border-radius: 5px;
        }
        .user-info h3 {
            margin-top: 0;
            color: #667eea;
            font-size: 18px;
        }
        .info-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: bold;
            color: #666;
            width: 150px;
            flex-shrink: 0;
        }
        .info-value {
            color: #333;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
            transition: transform 0.2s;
        }
        .cta-button:hover {
            transform: translateY(-2px);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 25px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .footer p {
            margin: 5px 0;
        }
        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, #667eea, transparent);
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>🎉 Selamat Datang!</h1>
            <p style="margin: 10px 0 0 0; font-size: 16px;">Terima kasih telah bergabung dengan kami</p>
        </div>

        <!-- Content -->
        <div class="content">
            <p class="welcome-message">
                Halo <strong>{{ $user->name }}</strong>,
            </p>
            
            <p>
                Selamat! Akun Anda telah berhasil didaftarkan di aplikasi kami. 
                Kami sangat senang Anda bergabung dengan komunitas kami.
            </p>

            <div class="divider"></div>

            <!-- User Information -->
            <div class="user-info">
                <h3>📋 Informasi Akun Anda</h3>
                
                <div class="info-row">
                    <div class="info-label">Nama Lengkap:</div>
                    <div class="info-value">{{ $user->name }}</div>
                </div>
                
                <div class="info-row">
                    <div class="info-label">Email:</div>
                    <div class="info-value">{{ $user->email }}</div>
                </div>
                
                <div class="info-row">
                    <div class="info-label">Role:</div>
                    <div class="info-value">
                        <span style="background-color: {{ $user->role === 'admin' ? '#28a745' : '#007bff' }}; 
                                     color: white; 
                                     padding: 4px 12px; 
                                     border-radius: 15px; 
                                     font-size: 12px;">
                            {{ ucfirst($user->role) }}
                        </span>
                    </div>
                </div>
                
                <div class="info-row">
                    <div class="info-label">Tanggal Daftar:</div>
                    <div class="info-value">{{ $user->created_at->format('d M Y, H:i') }} WIB</div>
                </div>
            </div>

            <div class="divider"></div>

            <p style="margin-top: 30px;">
                Anda sekarang dapat login dan mengakses semua fitur yang tersedia di aplikasi kami.
            </p>

            <center>
                <a href="{{ url('/login') }}" class="cta-button">
                    🚀 Mulai Sekarang
                </a>
            </center>

            <p style="color: #6c757d; font-size: 14px; margin-top: 30px;">
                <strong>Tips:</strong> Simpan email ini sebagai referensi untuk informasi akun Anda.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>{{ config('app.name') }}</strong></p>
            <p>Email ini dikirim secara otomatis, mohon jangan membalas email ini.</p>
            <p style="margin-top: 15px;">
                Jika Anda memiliki pertanyaan, silakan hubungi tim support kami.
            </p>
            <p style="color: #999; font-size: 12px; margin-top: 15px;">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
