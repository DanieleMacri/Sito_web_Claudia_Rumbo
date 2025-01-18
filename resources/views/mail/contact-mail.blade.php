<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Risposta automatica</title>
</head>
<body>
    <h1>
        Hai ricevuto un messaggio.
    </h1>
    <p>Nome: {{$body['name']}}</p>
    <p>Email: {{$body['email']}}</p>
    <p>Messaggio: {{$body['message']}}</p>
</body>
</html>