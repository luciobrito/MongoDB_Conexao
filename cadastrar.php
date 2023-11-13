<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->test->usuarios;

$result = $collection->insertOne(['nome' => $_POST['nome'], 'email' => $_POST['email']]);

echo "Inserted with Object ID '{$result->getInsertedId()}'";