<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
        }
        .header {
            background: #dc2626;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: white;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #dc2626;
        }
        .message-box {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>📧 Nouveau message de contact</h2>
            <p>Association de Bienfaisance</p>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">👤 Nom :</span>
                <p>{{ $data['nom'] }}</p>
            </div>
            
            <div class="field">
                <span class="label">📧 Email :</span>
                <p>{{ $data['email'] }}</p>
            </div>
            
            <div class="field">
                <span class="label">📞 Téléphone :</span>
                <p>{{ $data['telephone'] }}</p>
            </div>
            
            <div class="field">
                <span class="label">💬 Message :</span>
                <div class="message-box">
                    {{ nl2br(e($data['message'])) }}
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Cet email a été envoyé depuis le formulaire de contact de votre site.</p>
            <p>Répondez directement à cet email pour contacter {{ $data['nom'] }}</p>
        </div>
    </div>
</body>
</html>
