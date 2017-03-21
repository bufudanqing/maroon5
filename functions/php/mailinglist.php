<?php
// include "functions/php/dbh.php";
$conn = new mysqli("localhost", "root", "","maroon5");

$email_address = $_POST['email_address'];
$zip_code = $_POST['zip_code'];

$sql = "INSERT INTO sub_email (id, email, zipcode, MAR, IR, UMG) VALUES (2,'{$email_address}', '{$zip_code}',1,1,1)";
$result = mysqli_query($conn,$sql);


?>