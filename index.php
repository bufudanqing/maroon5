<?php
   session_start();

   // include "maroon5/includes/dbh.php";
   define ("root",$_SERVER['DOCUMENT_ROOT']);//定义根目录为常量
   include root."maroon5/includes/dbh.php";

   if(isset($_SESSION['id'])){
       // echo $_SESSION['id'];
    // header("Location:index.php");

   }
   
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
    <div class="compaign-container">
        <div class="td-col">
            <div class="compaign-avatar-container">
                <img class="avatar-img" src="images/icon/avatar.jpg" />
            </div>
            <span class="compaign-avatar-callout">
                <i class="fa fa-commenting" aria-hidden="true"></i>
                <!-- <i class="fa fa-commenting-o" aria-hidden="true"></i> -->
            </span>
        </div>
       
        <div class="td-col-content">
         <!-- 文字提示2 -->
            <div class="td-end">
                <div class="td-end-wrapper">                    
                    <span>Close  </span>
                    <i class="fa fa-close"></i>
                </div>
            </div>
            
            <div class="td-row">
                <!-- 文字提示1 -->
                <div class="td-row-wrapper">
                    <div class="td-row-1">Don't miss another update from us!</div>
                    <div class="td-row-2">Sign up to join our mailing list and receive exclusive offers and updates.</div>
                </div>
                <!-- 文字提示2 -->
                <a class="td-row-facebook">
                    <span class="td-row-icon"><i class="fa fa-facebook"></i></span>
                    <span class="td-row-des">SIGN UP WITH FACEBOOK</span>
                </a>
                
            </div>
            <!-- 文字提示2 -->
            <div class="td-footer">
                <a href="#">We're <i class="fa fa-bolt" aria-hidden="true"></i>
                  by ToneDen</a>
            </div>
        </div>
    </div>
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
                                <li class="user-link-login" >
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
                            </ul>
                          <?php
                                if (isset($_SESSION[id])) {
                                    //显示用户名
                                     echo $_SESSION['id'];
                                } else {
                                    //显示register

                                }
                            ?>  
                        </nav>

                    </div>
                </nav>
    			
    		</div>
    	</section>
    </header>
    <!-- 展板 -->

    <section class="banner">

   
    <!-- <img src="images/slider1.jpg" /> -->
   
        <div class = "wrapper">
            <div id="slider">
                <img id="1" src="images/slider1.jpg" />
                <img id="2" src="images/slider2.jpg" />
                
            </div>
            <a href="#" class="left" onclick="prev();return false;"><i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a href="#" class="right" onclick="next();return false;"><i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            
        </div>
    </section>
<!-- 主要内容 -->
    <div class="main">
        <div class="news">
            <div class="block_content">
                <div class="view-header">
                    <h2>NEWS</h2>
                </div>
                <br /><br />
                <div class="view-content">
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="pink">
                                    <div class="field_item">15 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/1.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="pink">
                                <a href="#">PUT YOURSELF IN THE COLD MUSIC VIDEO</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="purple">
                                    <div class="field_item">15 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/2.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="purple">
                                <a href="#">WORLD PREMIERE ALERT: WATCH OUR VIDEO FOR COLD, Ft. FUTURE ON VEVO NOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="red">
                                    <div class="field_item">15 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/3.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="red">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="green">
                                    <div class="field_item">14 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/4.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="green">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="blue">
                                    <div class="field_item">10 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/5.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="blue">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="pink">
                                    <div class="field_item">8 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/6.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="pink">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="purple">
                                    <div class="field_item">2 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/7.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="purple">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="red">
                                    <div class="field_item">1 FEB</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/8.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="red">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="green">
                                    <div class="field_item">27 JAN</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/9.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="green">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="blue">
                                    <div class="field_item">17 JAN</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/10.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="blue">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="pink">
                                    <div class="field_item">6 JAN</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/11.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="pink">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    <article>
                        <section>
                            <div class="front">
                                <div id="field_item_wrapper" class="purple">
                                    <div class="field_item">1 JAN</div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <img src="images/news/12.jpg">
                                </div>
                            </div>

                        </section>
                        <footer class="region-footer">
                            <h5 class="purple">
                                <a href="#">WATCH THE LIVE WORLD PREMIERE OF 'COLD' FROM THE ELLEN DEGENERES SHOW</a>
                            </h5>
                        </footer>
                    </article>
                    
                    <div id="showdata"></div>
                </div>
                <ul class="load-more">
                    <li class="pager-next">
                        <input type="hidden" id="currentresult" value="1" />
                        <!-- <a href="#">LOAD MORE<i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                        <button id="show">Load more<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="music">
            <h2 class="music-title">MUSIC</h2>
            <span class="music_prev"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="music_next"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <div class="block_content">
                <div class="view-content">
                    <div class="view-rows">
                        <article class="music_article">
                            <section class="front-back">
                                <div class="background">
                                    <img src="images/music/1.jpg"/>
                                </div>
                                <div class="overlay-region">
                                    <div class="field_title">
                                        <h5 style="color: white">Cold</h5>
                                    </div>
                                    <div class="field_item1">
                                        <a href="">LISTEN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="music_article">
                            <section class="front-back">
                                <div class="background">
                                    <img src="images/music/2.jpg"/>
                                </div>
                                <div class="overlay-region">
                                    <div class="field_title">
                                        <h5 style="color: white">Cold</h5>
                                    </div>
                                    <div class="field_item1">
                                        <a href="">LISTEN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="music_article">
                            <section class="front-back">
                                <div class="background">
                                    <img src="images/music/3.jpg"/>
                                </div>
                                <div class="overlay-region">
                                    <div class="field_title">
                                        <h5 style="color: white">Cold</h5>
                                    </div>
                                    <div class="field_item1">
                                        <a href="">LISTEN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="music_article">
                            <section class="front-back">
                                <div class="background">
                                    <img src="images/music/4.jpg"/>
                                </div>
                                <div class="overlay-region">
                                    <div class="field_title">
                                        <h5 style="color: white">Cold</h5>
                                    </div>
                                    <div class="field_item1">
                                        <a href="">LISTEN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="music_article">
                            <section class="front-back">
                                <div class="background">
                                    <img src="images/music/5.png"/>
                                </div>
                                <div class="overlay-region">
                                    <div class="field_title">
                                        <h5 style="color: white">Cold</h5>
                                    </div>
                                    <div class="field_item1">
                                        <a href="">LISTEN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="music_article">
                            <section class="front-back">
                                <div class="background">
                                    <img src="images/music/6.png"/>
                                </div>
                                <div class="overlay-region">
                                    <div class="field_title">
                                        <h5 style="color: white">Cold</h5>
                                    </div>
                                    <div class="field_item1">
                                        <a href="">LISTEN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                  
               
                </div>
                 <div class="click-dots">
                     <div class="current" ></div>
                     <div ></div>
                 </div>
            </div>
        </div>
        <div class="video">
            <h2 class="music-title">LATEST VIDEOS</h2>
            <span class="video_next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <span class="video_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <div class="block_video">
                <div class="view-video">
                    <div class="view-rows">
                        <article class="video_article">
                            <video src="video/Maroon 5 - Cold ft. Future.mp4" preload controls ></video>
                            <div class="field_date">
                                <span>Feb </span>
                                <span>18th </span>
                                <span>2017</span>
                            </div>
                            <div class="field_name">
                                <h4>Maroon 5 - Cold ft. Future</h4>
                            </div>
                            <div class="share">
                                <span style="color: white">Share</span>
                                <ul>
                                    <li class="share-facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="share-twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-google"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-tumblr"><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="video_article">
                            <video src="video/Maroon 5 - Cold (Audio) ft. Future.mp4" preload controls ></video>
                            <div class="field_date">
                                <span>Feb </span>
                                <span>18th </span>
                                <span>2017</span>
                            </div>
                            <div class="field_name">
                                <h4>Maroon 5 - Cold (Audio) ft. Future</h4>
                            </div>
                            <div class="share">
                                <span style="color: white">Share</span>
                                <ul>
                                    <li class="share-facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="share-twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-google"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-tumblr"><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <!-- <div class="view-rows">
                        <article class="video_article">
                            <video src="video/Maroon 5 - Don't Wanna Know.mp4" preload controls ></video>
                            <div class="field_date">
                                <span>Feb </span>
                                <span>18th </span>
                                <span>2017</span>
                            </div>
                            <div class="field_name">
                                <h4>Maroon 5 - Don't Wanna Know.mp4</h4>
                            </div>
                            <div class="share">
                                <span style="color: white">Share</span>
                                <ul>
                                    <li class="share-facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="share-twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-google"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-tumblr"><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="video_article">
                            <video src="video/Maroon 5 - Animals (Victoria's Secret Swim Special).mp4" preload controls ></video>
                            <div class="field_date">
                                <span>Feb </span>
                                <span>18th </span>
                                <span>2017</span>
                            </div>
                            <div class="field_name">
                                <h4>Maroon 5 - Animals (Victoria's Secret Swim Special).mp4</h4>
                            </div>
                            <div class="share">
                                <span style="color: white">Share</span>
                                <ul>
                                    <li class="share-facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="share-twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-google"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-tumblr"><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="video_article">
                            <video src="video/Maroon 5 - Don't Wanna Know (Behind The Scenes).mp4" preload controls ></video>
                            <div class="field_date">
                                <span>Feb </span>
                                <span>18th </span>
                                <span>2017</span>
                            </div>
                            <div class="field_name">
                                <h4>Maroon 5 - Don't Wanna Know (Behind The Scenes).mp4</h4>
                            </div>
                            <div class="share">
                                <span style="color: white">Share</span>
                                <ul>
                                    <li class="share-facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="share-twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-google"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-tumblr"><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="view-rows">
                        <article class="video_article">
                            <video src="video/Maroon 5 - Sugar.mp4" preload controls ></video>
                            <div class="field_date">
                                <span>Feb </span>
                                <span>18th </span>
                                <span>2017</span>
                            </div>
                            <div class="field_name">
                                <h4>Maroon 5 - Sugar.mp4</h4>
                            </div>
                            <div class="share">
                                <span style="color: white">Share</span>
                                <ul>
                                    <li class="share-facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="share-twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-google"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-tumblr"><a href="#" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="share-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div> -->
                </div>
                <div class="click-dots">
                     <div class="v-current" ></div>
                     <div ></div>
                     <div ></div>
                     <div ></div>
                     <div ></div>
                </div>
                </div>
                

                </div>
<!-- 日程安排部分 -->

<?php
$conn = mysqli_connect("localhost", "root", "", "maroon5");
$sql = "select * from tour";
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
$per_page = 9;
$total=ceil($count/$per_page);
// echo $total;
?> 
            <div class="dates">
                 <h2 class="music-title">ON TOUR</h2>
                  
                 <div class="block_content">
                     <div class="view-content">
                       <!--   <div class="view-events blue">      
                            <div class="group-left">
                                <span class="month">DEC</span>
                                <span class="day">30</span>
                            </div>
                            <div class="group-middle">
                                <div class="field_item_1">
                                    <span class="locality">Las Vegas ,</span>
                                    <span class="area"> NV, USA</span>
                                </div>
                                <div class="field_item_2">Events Center At Mandalay Bay
                                </div>
                                <div class="field_item_3">
                                    <div class="field_item_3_label">
                                    Opening:
                                    </div>
                                    <div class="field_item_3_location">PJ,PRTON</div>
                                </div>
                            </div>
                            <div class="group-right">
                                <div class="tickets">

                                    <a class="button tickets"href="http://www.bandsintown.com/event/12143855/buy_tickets?app_id=maroon5&artist=Maroon%205&came_from=67&app_id=maroon5&artist=Maroon%205&came_from=67" target="_blank"><i class="fa fa-ticket" aria-hidden="true"></i> TICKETS</a>
                                </div>
                            </div>
                            
                         </div> -->
                         <!-- 页数 -->
                        </div>
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
               
            </div>
            
            </div>
        </div>
        
    </div>
<!-- footer -->
<footer class="footer">
    <img src="images/footer.jpg"/>
    <div class="first-region">
        <div id="mailing-list" class="block_mailing">
            <h2>UPDATES FROM MAROON5</h2>
            <div class="block_content">
                <div class="webform-wrapper">
                    <form class="webform-client" >
                        <div>
                        <!-- email input -->
                            <div class="webform-emailaddress">
                                <label style="color: #fff;">EMAIL ADDRESS
                                <span class="form-required" title="This field is required.">*</span>
                                </label>
                                
                                <input class="email-text" id="email-text"  type="email" name="email_address" required="required" placeholder="Email Address(Required)" />
                            </div>
                            <!-- zipcode input -->
                            <div class="webform-zipcode">
                                <label style="color: #fff;">ZIP CODE
                                <span class="form-required" title="This field is required.">*</span>
                                </label>
                                
                                <input class="zip-text" id="zipcode" type="text" name="zip_code" required="required" placeholder="Zip Code(Required)" />
                            </div>
                            <fieldset class="edit-list">
                                <div class="fieldset-wrapper">
                                    <div class="fieldset-description">
                                        <h4 >Subscribe to Email Updates From:</h4>
                                    </div>
                                    <div class="form-item form-item-2134920">
                                        <input class="get_value et-list-2134920" type="checkbox" checked="checked" value="Maroon5" />
                                        <label class="option" for="edit-2134920" style="color: #fff;">Maroon5</label>
                                    </div>
                                    <div class="form-item form-item-3541827">
                                        <input class="get_value et-list-3541827" type="checkbox" checked="checked" value="Interscope Records" />
                                        <label class="option" for="edit-3541827" style="color: #fff;">Interscope Records</label>
                                    </div>
                                    <div class="form-item form-item-4050085">
                                        <input class="get_value et-list-4050085" type="checkbox" checked="checked" value="Universal Music Group"  />
                                        <label class="option" for="edit-4050085" style="color: #fff;">Universal Music Group</label>
                                    </div>

                                </div>
                            </fieldset>
                            <!--隐私保护声明 -->
                            <div class="disclaimer">
                                By submitting this form, you agree to the <a href = "#"> Universal Music Group Privacy Policy.</a>

                            </div>
                            <div class="form-actions">
                                <input type="submit" class="webform-submit" id="edit-submit"  value="Subscribe"  />
                                <img id="loading" src="images/icon/default.gif" />
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class=""></nav>
</footer>
<div class="subscribed_tip">
    You're now subscribed to:

    <div class="close">×</div>
</div>
<script type="text/javascript" src="functions/js/jquery.js"></script>
<script type="text/javascript" src="functions/js/global.js"></script>
</body>
</html>