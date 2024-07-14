<?php
$apiUrl = "https://jsonplaceholder.typicode.com/users";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de API com PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuários</h1>
        <div id="user-list"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>