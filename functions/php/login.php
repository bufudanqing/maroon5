
<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

define ("root",$_SERVER['DOCUMENT_ROOT']);
// echo root;
include root.'/maroon5/includes/dbh.php';
// var_dump($_REQUEST);

$email = $_POST['email'];
$pass = $_POST['pass'];

 $conn = mysqli_connect("localhost", "root", "", "maroon5");
 $sql = "SELECT * FROM user WHERE email= '$email' AND pass='$pass'  ";
 $res = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($res);

  if(!$email & !$pass){
     	echo "All fields required";
     }elseif(!$email){
     	echo "Email required";
     }elseif (!$pass) {
     	echo "Password required";
     }elseif ($num == 0) {
     	echo "Incorrect credentials";
     }else{
     	echo "success";
     }

?>