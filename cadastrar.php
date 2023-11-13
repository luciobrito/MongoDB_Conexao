<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">

    <title>Resultado</title>
</head>

<?php
require 'vendor/autoload.php';
//Para se conectar ao banco:
$client = new MongoDB\Client("mongodb://localhost:27017");
//Seleciona a coleção do MongoDB
$collection = $client->test->usuarios;

$result = $collection->insertOne(
    ['nome' => $_POST['nome'], 
    'email' => $_POST['email'],
    'username'=> $_POST['username']
    ]);

echo "<p>Usuario cadastrado com sucesso!</p>
      <br/>
      <p>Id: '{$result->getInsertedId()}' </p> ";