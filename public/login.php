<?php
// require the autoload.php file, that will take care for requiring all packages for you
require '../vendor/autoload.php';

// we're going to use the JWT class from the Firebase package
use \Firebase\JWT\JWT;

// set all the user's data (usually this comes from database)
$user = [
    'id' => 123456,
    'username' => 'johndoe',
    'password' => 'secret',
    'name' => 'John Doe'
];

// don't proceed if the username and password are not sent at all
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Username and password are required in order to get token!';
    exit;
}

// don't proceed if the username and password doesn't match
if ($_POST['username'] !== $user['username'] || $_POST['password'] !== $user['password']) {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Username or password are invalid!';
    exit;
}

// set the encryption key
$key = "example_key";

// set the JWT's payload
$payload = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000,
    "sub" => $user['id'],
    "name" => $user['name']
);

// return the generated JWT to the client
echo JWT::encode($payload, $key);