<?php
   session_start();

   define("root", $_SERVER['DOCUMENT_ROOT']);
   include root."/maroon5/includes/dbh.php";

   $userid = $_SESSION['id'];
   // echo $userid;
   
   $sql = " SELECT news.title FROM fav,news 
            WHERE fav.user_id = $userid 
            AND news.id = fav.news_id ";

    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);

    // echo "$num";

    while ($row = $res->fetch_assoc()){
    	// $str = $row["title"];
    	// $strlen = strlen($str);
    	// if($strlen <20){
    	// 	return $str;
    	// 	console.log();
    	// }else{
    	// 	$str=substr($str, 0, 20);
    	// 	return $str;
    	// }
    	// echo $str;
        
       ?>
       
      <div class="fav-list-title"> <a href="" style="text-decoration: none;"> <?php  echo $row["title"];echo "<br/>"; ?></a><!-- <a href="">READ MORE<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</a> --></div>
      
      <br/>

       <?php
    }




?>