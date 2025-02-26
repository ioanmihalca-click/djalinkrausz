<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj nou de contact</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(to right, #6366f1, #a855f7);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .field {
            margin-bottom: 15px;
        }

        .field-name {
            font-weight: bold;
            color: #6366f1;
        }

        .message-box {
            background-color: #f8f9fa;
            border-left: 4px solid #6366f1;
            padding: 15px;
            margin-top: 20px;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Mesaj nou de contact</h1>
        </div>
        <div class="content">
            <p>Ai primit un nou mesaj de la formularul de contact de pe site-ul DJ Alin Krausz:</p>

            <div class="field">
                <span class="field-name">Nume:</span> {{ $data['name'] }}
            </div>

            <div class="field">
                <span class="field-name">Email:</span> {{ $data['email'] }}
            </div>

            <div class="field">
                <span class="field-name">Telefon:</span> {{ $data['phone'] }}
            </div>

            <div class="field">
                <span class="field-name">Tip eveniment:</span>
                @if ($data['event_type'] == 'wedding')
                    Nuntă
                @elseif($data['event_type'] == 'corporate')
                    Eveniment Corporate
                @elseif($data['event_type'] == 'club')
                    Club / Festival
                @elseif($data['event_type'] == 'private')
                    Eveniment Privat
                @else
                    Altul
                @endif
            </div>

            <div class="message-box">
                <span class="field-name">Mesaj:</span>
                <p>{{ $data['message'] }}</p>
            </div>
        </div>
        <div class="footer">
            <p>Acest email a fost trimis automat de pe site-ul djalinkrausz.ro</p>
        </div>
    </div>
</body>

</html>
