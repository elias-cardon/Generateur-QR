<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Générateur de QR Code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form>
    <div>
        <input type="text" id="input" placeholder="Entrez du texte"/>
    </div>
    <div>
        <input type="button" id="generate" value="Générer le QR code" onclick="qrgenerate();"/>
    </div>
    <br/><br/>
    <div id="qr"></div>
    <script src="qrcode.min.js"></script>
    <script src="script.js"></script>
</form>
</body>
</html>