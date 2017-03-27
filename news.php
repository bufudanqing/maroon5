<?php
   session_start();

   // include "maroon5/includes/dbh.php";
   define ("root",$_SERVER['DOCUMENT_ROOT']);//定义根目录为常量
   include root."maroon5/includes/dbh.php";

  
    // if (isset($_SESSION["id"])) {
    //     //显示用户名
    //     // echo $_SESSION["id"];
    //     require("functions/php/header_login.php");

    //     echo "<script type='text/javascript'>";
    //     echo "window.onload = function(){";   
    //     echo "var login = document.getElementById('login-li');"  ;
    //     echo " login.style.display = 'none'; ";    
    //     echo "}";    
    //     echo " </script>" ;
    // } else {
    //     //显示register
    //     require("index.php");

    // }

   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Maroon5 | Official Site</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <!--File Normalize Css-->
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript">
    </script>
    

</head>
<body>
<!-- 页面左下角图标 ASD-->
   <!--  <div class="compaign-container">
        <div class="td-col">
            <div class="compaign-avatar-container">
                <img class="avatar-img" src="images/icon/avatar.jpg" />
            </div>
            <span class="compaign-avatar-callout">
                <i class="fa fa-commenting" aria-hidden="true"></i> -->
                <!-- <i class="fa fa-commenting-o" aria-hidden="true"></i> -->
        <!--     </span>
        </div>
       
        <div class="td-col-content"> -->
         <!-- 文字提示2 -->
           <!--  <div class="td-end">
                <div class="td-end-wrapper">                    
                    <span>Close  </span>
                    <i class="fa fa-close"></i>
                </div>
            </div>
            
            <div class="td-row"> -->
                <!-- 文字提示1 -->
              <!--   <div class="td-row-wrapper">
                    <div class="td-row-1">Don't miss another update from us!</div>
                    <div class="td-row-2">Sign up to join our mailing list and receive exclusive offers and updates.</div>
                </div> -->
                <!-- 文字提示2 -->
            <!--     <a class="td-row-facebook">
                    <span class="td-row-icon"><i class="fa fa-facebook"></i></span>
                    <span class="td-row-des">SIGN UP WITH FACEBOOK</span>
                </a>
                
            </div> -->
            <!-- 文字提示2 -->
    <!--         <div class="td-footer">
                <a href="#">We're <i class="fa fa-bolt" aria-hidden="true"></i>
                  by ToneDen</a>
            </div>
        </div>
    </div> -->
<!-- login，register,登录和注册部分 -->
    <div id="popup-box1" class="popup-position">
        <div class="user-login-register" id="user-login-register">
            <a id="l-r-close" href="" class="close" >×</a>
            <ul class="tabs">
                <li>
                    <input type="radio" name="tabs" id="tab-1" checked="checked">
                    <label for="tab-1">
                        <h2>LOGIN</h2>
                        <span>with your existing account</span>
                    </label>
                    <div class="tab-content">
                        <section class="social-links">
                            <a class="ae-link login facebook" href="#">
                                <i class="fa fa-facebook"></i>
                                <span class="label">
                                    <span class="auth-action">Login</span>
                                    <span class="with"> with </span>
                                    <span class="social">Facebook</span>
                                </span>
                            </a>
                       
                            <a class="ae-link login twitter" href="#">
                                <i class="fa fa-twitter "></i>
                                <span class="label">
                                    <span class="auth-action">Login</span>
                                    <span class="with"> with </span>
                                    <span class="social">Twitter</span>
                                </span>
                            </a>
                        
                            <a class="ae-link login google" href="#">
                                <i class="fa fa-google"></i>
                                <span class="label">
                                    <span class="auth-action">Login</span>
                                    <span class="with"> with </span>
                                    <span class="social">Google</span>
                                </span>
                            </a>
                        </section>
                        <div class="social-sep">
                            <span></span>
                            <p>or</p>
                            <span></span>
                        </div>
<!-- 用户名密码登录 -->
                        <section class="user-login-forms">
                            <div class="login-pass">
                                <form id="userid"  class="user-login-id" >
                                    <div style="height: 204px;">
                                        <div class="form-name form-it">
                                            <label for="edit-name" style="font-family: fontello;">
                                                E-mail Address<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="edit-name" class="form-text-req" type="text" name="email" maxlength="60" />
                                        </div>
                                        <div class="form-pass form-it" id="it">
                                            <label for="edit-pass">
                                                Password<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="edit-pass" class="form-text-req" type="text" name="pass" maxlength="60" />
                                        </div>
                                        <!-- login按钮 -->
                                        <div class="form-ac">
                                            <button id="submit">login</button>
                                            <!-- <input id="bolero-user-login" class="form-submit" type="submit"  value="Login"> -->
                                            <div id="result"></div>
                                            <div class="pass-reset-link">
                                                <a class="resetpass" href="#">Reset</a>
                                                <span>your password if you're unable to login.</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </li>
        <!-- 注册部分 -->
                <li>
                    <input type="radio" name="tabs" id="tab-2">
                    <label for="tab-2">
                        <h2>REGISTER</h2>
                        <span>to create a new account</span>
                    </label>
                    <div class="tab-content">
                        <section class="social-links">
                            <a class="ae-link register facebook" href="#">
                                <i class="fa fa-facebook"></i>
                                <span class="label">
                                    <span class="auth-action">Register</span>
                                    <span class="with"> with </span>
                                    <span class="social">Facebook</span>
                                </span>
                            </a>
                       
                            <a class="ae-link register twitter" href="#">
                                <i class="fa fa-twitter "></i>
                                <span class="label">
                                    <span class="auth-action">Register</span>
                                    <span class="with"> with </span>
                                    <span class="social">Twitter</span>
                                </span>
                            </a>
                        
                            <a class="ae-link register google" href="#">
                                <i class="fa fa-google"></i>
                                <span class="label">
                                    <span class="auth-action">Register</span>
                                    <span class="with"> with </span>
                                    <span class="social">Google</span>
                                </span>
                            </a>
                        </section>
                        <div class="social-sep">
                            <span></span>
                            <p>or</p>
                            <span></span>
                        </div>
                     <!--注册 -->
                        <section class="user-register-forms">
                            <div class="register-pass">
                                <form id=""  class="user-reg-id" >
                                    <div style="height: 204px;">
                                        <div class="form-name form-it">
                                            <label for="reg-email" style="font-family: fontello;">
                                                E-mail Address<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="reg-email" required="required" class="form-text-req" type="email" name="regemail" maxlength="60" />
                                        </div>
                                        <div class="form-pass form-it" id="it">
                                            <label for="edit-name-2">
                                                USERNAME<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="edit-name-2" required="required" class="form-text-req" type="text" name="username" maxlength="60" />
                                        </div>
                                        <div class="form-name form-it">
                                            <label for="edit-pass-pass1" style="font-family: fontello;">
                                                PASSWORD<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="edit-pass-pass1" required="required" class="form-text-req" type="password" name="pwd1" maxlength="60" />
                                        </div>
                                        <div class="form-name form-it">
                                            <label for="edit-pass-pass2" style="font-family: fontello;">
                                               CONFIRM PASSWORD<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="edit-pass-pass2" required="required" class="form-text-req" type="password" name="pwd2" maxlength="60" />
                                        </div>
                                        <div class="form-name form-it">
                                            <label for="edit-post" style="font-family: fontello;">
                                                POSTAL CODE<span style="color: red;">*</span><br/>

                                            </label>
                                             <input id="edit-post" required="required" class="form-text-req" type="text" name="postcode" maxlength="60" />
                                        </div>
                                        <!-- 注册按钮 -->
                                        <div class="form-ac">
                                            <!-- <input  id="bolero-user-register-submit" class="form-submit" type="submit" name="" value="Create New Account"> -->
                                            <button id="reg-submit">Create New Account</button>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </li>
            </ul>
            
            <div></div>
            <section></section>
            <!-- 确保min-height可用 -->
            <!-- <div class="clear"></div> -->
        </div>    
    </div>
    <header>
        <section class="header-top">
            <!-- 顶层社交导航 -->
            <div class="region-header">
                <nav id="social-menu">
                   <!--社交导航  -->
                    <div class="follow-socials">
                        <ul >

                            <li class="first expand menu">
                                <a class="mail-content" href="https://www.facebook.com/maroon5" target="_blank"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                                <ul class="menu">
                                    <li class="first leaf"><a href="https://www.facebook.com/OfficialAdamLevine" target="_blank"><i class="fa fa-facebook"></i>Adam</a></li>
                                    <li class="leaf-1"><a href="https://www.facebook.com/jamesvalentine" target="_blank"><i class="fa fa-facebook"></i>James</a></li>
                                    <li class="leaf-2"><a href="https://www.facebook.com/thepjmorton/?fref=ts" target="_blank"><i class="fa fa-facebook"></i>PJ</a></li>
                                    <li class="leaf-3"><a href="https://www.facebook.com/jesse.carmichael.581?fref=ts" target="_blank"><i class="fa fa-facebook"></i>Jesse</a></li>
                                    <li class="leaf-4"><a href="https://www.facebook.com/samfarrar" target="_blank"><i class="fa fa-facebook"></i>Sam Farrar</a></li>
                                </ul>
                            </li>
                            <li class="second expand menu">
                                <a class="mail-content" href="https://www.facebook.com/maroon5" target="_blank"><i class="fa fa-twitter" aria-hidden="true"> </i></a>
                                <ul class="menu">
                                    <li class="first leaf"><a href="https://www.facebook.com/OfficialAdamLevine" target="_blank"><i class="fa fa-twitter"></i>Adam</a></li>
                                    <li class="leaf-1"><a href="https://www.facebook.com/jamesvalentine" target="_blank"><i class="fa fa-twitter"></i>James</a></li>
                                    <li class="leaf-2"><a href="https://www.facebook.com/thepjmorton/?fref=ts" target="_blank"><i class="fa fa-twitter"></i>PJ</a></li>
                                    <li class="leaf-3"><a href="https://www.facebook.com/jesse.carmichael.581?fref=ts" target="_blank"><i class="fa fa-twitter"></i>Jesse</a></li>
                                    <li class="leaf-4"><a href="https://www.facebook.com/samfarrar" target="_blank"><i class="fa fa-twitter"></i>Sam Farrar</a></li>
                                </ul>
                            </li>
                            <li class="third expand menu">
                                <a class="mail-content" href="https://www.facebook.com/maroon5" target="_blank"><i class="fa fa-instagram" aria-hidden="true"> </i></a>
                                <ul class="menu">
                                    <li class="first leaf"><a href="https://www.facebook.com/OfficialAdamLevine" target="_blank"><i class="fa fa-instagram"></i>Adam</a></li>
                                    <li class="leaf-1"><a href="https://www.facebook.com/jamesvalentine" target="_blank"><i class="fa fa-instagram"></i>James</a></li>
                                    <li class="leaf-2"><a href="https://www.facebook.com/thepjmorton/?fref=ts" target="_blank"><i class="fa fa-instagram"></i>PJ</a></li>
                                    <li class="leaf-3"><a href="https://www.facebook.com/jesse.carmichael.581?fref=ts" target="_blank"><i class="fa fa-instagram"></i>Jesse</a></li>
                                    <li class="leaf-4"><a href="https://www.facebook.com/samfarrar" target="_blank"><i class="fa fa-instagram"></i>Sam Farrar</a></li>
                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <!-- mail-nav导航到主页面下端的updates mail部分 -->
                    <!-- 非主页面时候，点击mail-nav弹出updates mail窗口 -->
                    <div id="mail-nav">
                        <a class="mail-content" href="#mailing-list" ><i class="fa fa-envelope-square " aria-hidden="true"> </i></a>
                    </div>
                </nav>
            </div>
            <!-- logo和菜单导航 -->
            <div class="nav-header">
                <nav class="navigation">
                    <div class="branding"><a href="index.php" title="Home"><img src="images/logo.png"></a></div>
                    <div class="menu-navigation">
                        <nav id="menu-wrap">
                            <ul class="menu">
                                <li class="first menu"><a href="news.php">NEWS</a></li>
                                <li class="second menu"><a href="shows.php">SHOWS</a></li>
                                <li class="third menu"><a href="music.php">MUSIC</a></li>
                                <li class="forth menu"><a href="videos.php">VIDEOS</a></li>
                                <li class="fifth menu"><a href="photos.php">PHOTOS</a></li>
                                <li class="sixth menu"><a href="bio.php">BIO</a></li>
                                <li class="seventh menu"><a href="social.php">SOCIAL</a></li>
                                <li class="eighth menu"><a href="http://www.fanfire.com/cgi-bin/WebObjects/Store.woa/wa/artist?artistName=Maroon+5&sourceCode=MARWEBWWUSD">SHOP</a></li>
                            </ul>
                        </nav>
                        <!-- LOGIN 和 LOGOUT -->
                        <nav id="user-menu-nav">
                            <ul class="user-menu">
                                <li class="user-link-login" id="login-li" >
                                    <a href="javascript:void(0)" class="user-login"  id="user-login" onclick="toggle_visibility('popup-box1');"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                                </li>
                                <!-- 显示用户名和用户菜单 -->
                                <!-- <li class="user-profile">
                                        <a class="user-profile" >
                                            <img src = "images/userpic/0.jpg" />
                                            <span class="user-username"></span>
                                        </a>
                                        <ul class="menu-dropdown">
                                            <li class="user-pro" style="color: pink;"><a class="user-parent-profile" href="">VIEW PROFILE</a></li>
                                            <li class="user-verify-account"> <a class="user-parent-account" href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>VERIFY ACCOUNT</a></li>
                                            <li class="user-logout"><a class="user-parent-logout" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a></li>
                                        </ul>
                                </li> -->
                                <!-- 刷新后保持登录 -->
                                <?php
                                 
                                    if (isset($_SESSION["id"])) {
                                        //显示用户名
                                        // echo $_SESSION["id"];
                                        require("functions/php/header_login.php");

                                        echo "<script type='text/javascript'>";
                                        echo "window.onload = function(){";   
                                        echo "var login = document.getElementById('login-li');"  ;
                                        echo " login.style.display = 'none'; ";    
                                        echo "}";    
                                        echo " </script>" ;
                                    } else {
                                        //显示register
                                        // require("index.php");

                                    }

                                ?>
                            </ul>
  
                        </nav>

                    </div>
                </nav>
                
            </div>
        </section>
    </header>


<!-- 主要内容 -->

<?php
$conn = mysqli_connect("localhost", "root", "", "maroon5");
$sql = "select * from tour";
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
$per_page = 9;
$total=ceil($count/$per_page);
// echo $total;
?> 
            <div class="inner-wrapper">
            <!-- 左边新闻部分 -->
                <div class="view-id-news">
                    <div class="view-header">
                        <h2 class="block_title">NEWS</h2>
                    </div>
                    <div class="view-news">
                        <article class="grid-news">
                            <header class="feature-wrapper">
                                <div class="feature-background">
                                    <a href="#">
                                        <img src="images/news/1.jpg" />
                                    </a>
                                    
                                </div>
                            </header>
                            <div class="ds-card">
                                <div>
                                    <h5>
                                    <!-- rel属性作为news_id -->
                                        <a class="ds-subtitle" href="#" rel="1">Maroon 5 & Kendrick Lamar's 'Don't Wanna Know' Tops Pop Songs Chart</a>
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
                            <div class="post-footer">
                                    <div class="flag">
                                        <span class="flag-wrapper">
                                            <a class="flag-action" href="#">
                                                <i class="fa fa-heart-o" ></i>
                                                <span class="count">0</span>
                                                <span class="flag-text" >Like this news post</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                        </article>
                    </div>
                </div>

            <!-- 右侧日程 -->
                <aside class="sidebar">
                    
                </aside>


            <!-- 页数 -->
                       
                <div class="tour_pages">
                <?php
                    for($i=1;$i<=$total;$i++){
                        ?>
                         <li id="<?php echo $i; ?>"><?php echo $i; ?></li>
                        <?php
                    }

                ?>
                
                </div>

            </div>   
            <!-- 本页主体内容结束 -->
        </div>        
    </div>
<!-- footer -->


<script type="text/javascript" src="functions/js/jquery.js"></script>
<script type="text/javascript" src="functions/js/global.js"></script>
</body>
</html>