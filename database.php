<?php

$dbname = 'booksbyudb';
$userName = 'username';
$password = 'password';
$serverName = 'booksbyu.chkn9wqfjo8t.us-west-2.rds.amazonaws.com:3306';

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName,$password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>
