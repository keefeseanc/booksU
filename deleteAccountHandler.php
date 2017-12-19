<?php

session_start();
include('database.php');

$email = $_SESSION['email'];

echo $email;

$sql = "SELECT * FROM user WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
$user = $stmt->fetchAll();

foreach($user as $users){
    $userID = $users['userID'];
}

$sql = "DELETE FROM user WHERE userID='$userID'";
$stmt = $conn->prepare($sql);
$stmt->execute();

session_start();
session_destroy();
header('location:index.html');


?>