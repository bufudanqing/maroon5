<!-- 登录验证页面 -->
<?php
// echo "__DIR__: ".__DIR__;//获取当前文件路径
// echo "<br />";
// echo $_SERVER['DOCUMENT_ROOT'];//获取文件根目录
define ("root",$_SERVER['DOCUMENT_ROOT']);//定义根目录为常量
// echo root;
include root.'/maroon5/includes/dbh.php';

// 获取登录页面数据
$email = $_POST["email"];
$pwd = $_POST["pass"];

echo "$email";

?>