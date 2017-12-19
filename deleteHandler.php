<?php

include('database.php');

$ID = $_POST['ID'];

$sql = "DELETE FROM listing WHERE listingID='$ID'";
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: account.php');


?>