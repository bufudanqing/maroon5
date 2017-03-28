<?php
   session_start();
    

   if (!isset($_SESSION["id"])) {
   
   	    echo "0";//未登录
   	    
   	
   }else{
     	echo "1";//已登陆
     	//获取news_id
        $id= $_POST["id"];
        // //获取用户id
        $userid = $_SESSION["id"];
        // echo "string";
        $conn = mysqli_connect("localhost", "root", "", "maroon5");
        $sql2 = "SELECT * FROM fav WHERE user_id = $userid AND news_id = $id ";
        $res2 = mysqli_query($conn, $sql2);
        
        if (mysqli_num_rows($res2) == 0) {
        	//把获取的新闻id和用户id插入like数据表
            $sql = " INSERT INTO fav (news_id,  user_id) 
                 VALUES ('$id', '$userid') ";
            $res = mysqli_query($conn, $sql);
        }else{
        	$sql_remove = "DELETE FROM fav WHERE user_id = $userid";
        	$res_remove = mysqli_query($conn, $sql_remove);
        	// echo ",AAA";
        }
 
        
        // echo "count++";
        // print_r($res);
        //从数据库获取count
        $sql1 = " SELECT * FROM fav WHERE news_id=$id ";
        $res1 = mysqli_query($conn, $sql1);
        $nums = mysqli_num_rows($res1);
        echo ",";
        echo $nums;
   
   }
   


?>