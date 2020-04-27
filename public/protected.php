<?php
require '../vendor/autoload.php';

use \Firebase\JWT\JWT;

if (!isset($_SERVER['HTTP_AUTHORIZATION'])) {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Unauthorized!';
    exit;
}

// get the authorisation token from the request
$jwt = str_replace('Bearer ', '', $_SERVER['HTTP_AUTHORIZATION']);

// set the key
$key = "example_key";

// decode the token
try {
    $decoded = JWT::decode($jwt, $key, array('HS256'));
} catch (\Exception $exception) {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Unauthorized!';
    exit;
}


// send response
echo 'Hello ' . $decoded->name . ' with ID:' . $decoded->sub;
