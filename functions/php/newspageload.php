<?php
   
    $conn = mysqli_connect("localhost", "root", "", "maroon5");
    //$page 1  0,3
    //$Page 2  3,3
    $page = $_GET['page'];
    $startLimit = ($page -1)*3;
    $sql = " SELECT * FROM news LIMIT $startLimit,3  ";
    $result = mysqli_query($conn, $sql);

    while($row = $result -> fetch_assoc()){
     ?> 
        <article class="grid-news">
            <header class="feature-wrapper">
                <div class="feature-background">
                    <a href="#">
                        <img src="images/news/<?php echo $row['id'];  ?>.jpg" />
                    </a>
                    
                </div>
            </header>
            <div class="ds-card">
                <div>
                    <h5>
                    <!-- rel属性作为news_id -->
                        <a class="ds-subtitle" href="#" rel="<?php echo $row['id'];  ?>">Watch Maroon 5 performing on Fallon tomorrow!</a>
                    </h5>
                </div>
                <div class="summary">
                    <div class="post-name">
                        <span>Mar </span>
                        <span>23rd </span>
                        <span>2017 </span><br />
                    </div>
                    <div class="post-body">
                        <p>We're announcing two new shows in Punta Cana, Dominican Republic &amp; Panama City, Panama....</p>
                    </div>
               
                </div>

                
            </div>
    <!-- 动态获取点赞数目并显示 -->
        <?php

       
        //从数据库获取count
        $sql1 = " SELECT * FROM fav WHERE news_id=$row[id] ";
        $res1 = mysqli_query($conn, $sql1);
        $nums = mysqli_num_rows($res1);
        
        ?>
        <div class="post-footer">
            <div class="flag">
                <span class="flag-wrapper">
                    <a class="flag-action" href="#">
                        <i class="fa fa-heart-o" ></i>
                        <?php
                          echo "<span class='count'>". $nums  ."</span>";
                        ?>
                        <!-- <span class="count">0</span> -->
                        <span class="flag-text" >Like this news post</span>
                    </a>
                </span>
            </div>
        </div>
    </article>
      <?php

    }


?>