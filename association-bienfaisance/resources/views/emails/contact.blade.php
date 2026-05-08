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
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: #dc2626;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0 0;
            opacity: 0.9;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .label {
            font-weight: bold;
            color: #dc2626;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #555;
            margin: 0;
        }
        .message-box {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
            border-left: 4px solid #dc2626;
        }
        .footer {
            background: #f4f4f4;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #ddd;
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
                <span class="label">👤 Nom complet</span>
                <p class="value">{{ $data['nom'] }}</p>
            </div>
            
            <div class="field">
                <span class="label">📧 Adresse email</span>
                <p class="value">{{ $data['email'] }}</p>
            </div>
            
            <div class="field">
                <span class="label">📞 Numéro de téléphone</span>
                <p class="value">{{ $data['telephone'] }}</p>
            </div>
            
            <div class="field">
                <span class="label">💬 Message</span>
                <div class="message-box">
                    {{ nl2br(e($data['message'])) }}
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Cet email a été envoyé depuis le formulaire de contact de votre site.</p>
            <p>Répondez à {{ $data['email'] }} pour contacter {{ $data['nom'] }}</p>
        </div>
    </div>
</body>
</html>
