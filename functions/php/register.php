<?php
    session_start();
    
    define("root", $_SERVER['DOCUMENT_ROOT']);
    include root.'/maroon5/includes/dbh.php';
    //获取表单
    $regemail =$_POST['regemail'];
    $username =$_POST['username'];
    $pwd1 =$_POST['pwd1'];
    $pwd2 =$_POST['pwd2'];
    $postcode =$_POST['postcode'];
    // var_dump($_REQUEST);

    if($pwd1 !== $pwd2){
    	echo "pwd are not the same";
    	exit();//终止运行
    }else{
    	echo "success";
    }

    //链接数据库并插入表单数据
    // $conn = mysqli_connect("localhost", "root", "", "maroon5");
    $sql = "INSERT INTO user (username, pass, email, post, pic) 
            VALUES ('$username', '$pwd1', '$regemail', '$postcode', 'images/userpic/0.jpg') ";
    $res = mysqli_query($conn, $sql);
    
    
  

?>