<?php
//Uili.Net
//Make By 不朽千秋
include("mysql.php");
if(isset($_GET['user']) and  isset($_GET['key'])  )
{	
$key=md5(htmlentities($_GET['key']));
$user=htmlentities($_GET['user']);
$mysql="SELECT * FROM `test` WHERE `user` = '$user' ORDER BY `user` ASC ";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['user'])
{
}else{
//账号不存在2
echo '2';
exit;	
}
}	
$mysql="SELECT * FROM `test` WHERE `key`  = '$key' ORDER BY `key` ASC ";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['key'])
{
//登录成功1
echo '1';
exit;
}else{
echo '3';//密码错误登录失败3
exit;	
}	
echo '-1';//未知错误-1
?>