<?php
   
   $conn = mysqli_connect("localhost", "root", "", "maroon5");
   if(!$conn){
   	die ("Connect failed:".mysqli_connect_error());
   }

   //从ajax提交的数据获取$page值
   $page = isset($_GET['page'])?$_GET['page']:0;
   $pageNo = $page;

   //设置查询的起始位置
   //$page = 1   0,6
   //$page = 2   6,6
   //$page = 3   12,6
   $startLimit = ($page-1)*8;
   $sql = "SELECT * FROM news LIMIT $startLimit,8 ";

   $result = mysqli_query($conn, $sql);

   while ($row = $result -> fetch_assoc()) {
   	?>
    <article>
        <section>
            <div class="front">
                <div id="field_item_wrapper" class="<?php echo $row["color"] ?>">
                    <div class="field_item"><?php echo $row["date"]; ?></div>
                </div>
            </div>
            <div class="overlay">
                <div>
                    <img src="<?php echo $row["img"]; ?>">
                </div>
            </div>

        </section>
        <footer class="region-footer">
            <h5 class="<?php echo $row["color"] ?>">
                <a href="#"><?php echo $row["title"]; ?></a>
            </h5>
        </footer>
    </article>  

   	<?php
   }

?>