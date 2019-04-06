<?php
//Uili.Net
//Make By 不朽千秋
include 'mysql.php';
mysql_query("set names 'utf8'");
if(isset($_GET['user']) and  isset($_GET['key']) and  isset($_GET['info']) and  isset($_GET['email']) )
{
$key=md5(htmlentities($_GET['key']));
$user=htmlentities($_GET['user']);
$info=htmlentities($_GET['info']);
$email=htmlentities($_GET['email']);
$text1=htmlentities($_GET['text1']);
$text2=htmlentities($_GET['text2']);
$text3=htmlentities($_GET['text3']);
$mysql = "SELECT * FROM `test` WHERE `user` = '$user' ORDER BY `id` ASC ";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['user'])
{
//账号重复0
echo '0';
exit;
}	
$mysql="SELECT * FROM `test` WHERE `info` = '$info'";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['info'])
{
//info重复2
echo '2';
exit;
}	
$mysql="SELECT * FROM  `test` WHERE  `email` =  '$email'";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['email'])
{
//email重复3
echo '3';
exit;
}	
$mysql="INSERT INTO `s5152396`.`test` (`id`, `user`, `key`, `info`, `email`, `text1`, `text2`, `text3`, `state`) VALUES (NULL, '$user', '$key', '$info', '$email', '$text1', '$text2', '$text3', '0');";
$ret=mysql_query($mysql);
if($ret){
//'注册成功'
	echo '1';
exit;
}else{
//'注册失败'
	echo '-1';
exit;
}
}
?>


