<?php

    session_start();
    define("root",  $_SERVER['DOCUMENT_ROOT']);
    include root."/maroon5/includes/dbh.php";

    $sql = " SELECT * FROM tour LIMIT 0,8 ";
    $res = mysqli_query($conn, $sql);
    while ($row = $res->fetch_assoc()) {
    	?>
         
         <div class="view-news-events  <?php  echo $row['color'] ?>">      
	        <div class="group-left">
	            <div class="group-left-wrapper">
	                <span class="month"><?php  echo $row['month'] ?></span><br/>
	                <span class="day"><?php  echo $row['day'] ?></span>
	            </div>
	            
	        </div>
	        <div class="group-right">
	            <div class="field_item_1">
	                <span class="locality"><?php  echo $row['city'];echo $row['country'] ?> </span><br/>
	                <span class="area"> <?php  echo $row['location'] ?></span>
	            </div>
                <br/>
                <div class="tickets">

	                <a class="button tickets"href="http://www.bandsintown.com/event/12143855/buy_tickets?app_id=maroon5&artist=Maroon%205&came_from=67&app_id=maroon5&artist=Maroon%205&came_from=67" target="_blank"><i class="fa fa-ticket" aria-hidden="true"></i> TICKETS</a>
                </div>
            </div>
	        
	     </div> 
        

   <?php
    }

?>