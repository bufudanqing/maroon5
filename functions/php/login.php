
<?php

session_start();

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

 $row = $res ->fetch_assoc();

  if(!$email & !$pass){
     	echo "All fields required";
     }elseif(!$email){
     	echo "Email required";
     }elseif (!$pass) {
     	echo "Password required";
     }elseif ($num == 0) {
     	echo "邮箱或密码不正确";
     }else{
     	// echo "success";
     	$_SESSION['id'] = $row['id'];
     	?>
         <li class="user-profile">
            <a class="" >
                <img src = "<?php echo $row["pic"] ?>" />
                <span class="user-username"><?php echo $row["username"]; ?></span>
            </a>
            <ul class="menu-dropdown">
                <li class="user-pro"><a class="user-parent-profile" href="">VIEW PROFILE</a></li>
                <li class="user-verify-account"> <a class="user-parent-account" href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>VERIFY ACCOUNT</a></li>
                <li class="user-logout"><a class="user-parent-logout" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a></li>
            </ul>
        </li>

     	<?php
     }

?>