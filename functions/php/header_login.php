<!-- 解决刷新页面时候自动退出的问题 -->
<!-- 如果已经设置session，则根据sessionid去数据库查找该用户名并显示 -->
<?php 
   // session_start();

   $conn = mysqli_connect("localhost", "root", "", "maroon5");
   $sql = "SELECT * FROM user WHERE id= '". $_SESSION['id'] ."' ";

    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    $row = $res ->fetch_assoc();

    echo "<li class='user-profile'>
            <a >
                <img src = ";
    echo        $row["pic"].">
                <span class='user-username'>";
    echo  $row["username"]."</span>
            </a>
            <ul class='menu-dropdown'>
                <li class='user-pro'><a class='user-parent-profile' ><i class='fa fa-user-o' aria-hidden='true'></i>  VIEW PROFILE</a></li>
                <li class='user-verify-account'> <a class='user-parent-account' ><i class='fa fa-envelope-o' aria-hidden='true'></i>  VERIFY ACCOUNT</a></li>
                <li class='user-logout'><a class='user-parent-logout' ><i class='fa fa-sign-out' aria-hidden='true'></i>  LOGOUT</a></li>
            </ul>
        </li>";

?>