<?php
$conn = mysqli_connect("localhost", "root", "", "maroon5");
if(!$conn){
	die ("Connect failed:".mysqli_connect_error());
}

$page = isset($_GET['page'])?$_GET['page']:0;
$per_page = 9;
$startLimit = ($page-1)*9;
$sql = "SELECT * FROM tour LIMIT $startLimit,9 ";
$result = mysqli_query($conn, $sql);
// print_r($result);
while ($row = $result ->fetch_assoc()) {
	?>
      <div class="view-events <?php echo $row['color']; ?>">      
            <div class="group-left">
                <span class="month"><?php echo $row['month'] ?></span>
                <span class="day"><?php echo $row['day'] ?></span>
            </div>
            <div class="group-middle">
                <div class="field_item_1">
                    <span class="locality"><?php echo $row["city"] ?> ,</span>
                    <span class="area"> <?php echo $row["country"] ?></span>
                </div>
                <div class="field_item_2"><?php echo $row["location"] ?>
                </div>
                <div class="field_item_3">
                    <div class="field_item_3_label">
                    Opening:
                    </div>
                    <div class="field_item_3_location"><?php echo $row["opening"] ?></div>
                </div>
            </div>
            <div class="group-right">
                <div class="tickets">

                    <a class="button tickets"href="http://www.bandsintown.com/event/12143855/buy_tickets?app_id=maroon5&artist=Maroon%205&came_from=67&app_id=maroon5&artist=Maroon%205&came_from=67" target="_blank"><i class="fa fa-ticket" aria-hidden="true"></i> TICKETS</a>
                </div>
            </div>
            
         </div>


	<?php
}

?>