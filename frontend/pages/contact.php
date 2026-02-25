<?php
$contact = "SELECT * FROM contact LIMIT 1";
$resultcontact = mysqli_query($connect, $contact);

if (!$resultcontact) {
    die("Query error: " . mysqli_error($connect));
}

$item = mysqli_fetch_object($resultcontact);
?>