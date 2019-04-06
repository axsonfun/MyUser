<?php
//Uili.Net
//Make By 不朽千秋
include("mysql.php");
if(isset($_GET['user'])){
$user=htmlentities($_GET['user']);
} else {
exit;
}
if(isset($_GET['key'])){
$key=md5(htmlentities($_GET['key']));	
}else{
exit;
}
$mysql="SELECT * FROM  `test` WHERE  `user` =  '$user' ORDER BY `id` ASC ";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['user'])
{
}else{
//账号不存在
echo '2';
exit;	
}
if($row['key'] != $key){
//密码错误	
echo '3';
exit;	
}
$id=$row['id'];
//----------------------获取数据---------------------------------
$new_key=htmlentities($_GET['new_key']);
$new_user=htmlentities($_GET['new_user']);	
$info=htmlentities($_GET['info']);
$email=htmlentities($_GET['email']);	
$text1=htmlentities($_GET['text1']);
$text2=htmlentities($_GET['text2']);
$text3=htmlentities($_GET['text3']);
//-----------------------------------------------------------------------
$mysql="SELECT * FROM  `test` WHERE  `user` =  '$new_user' ORDER BY `id` ASC ";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['user'])
{
//账号重复
echo '4';
exit;
}	
$mysql="SELECT * FROM  `test` WHERE  `info` =  '$info' ORDER BY `id` ASC ";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['info'])
{
//info重复
echo '5';
exit;
}	
$mysql="SELECT * FROM  `test` WHERE  `email` LIKE  '$email'";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['email'])
{
//email重复
echo '6';
exit;
}	
if(empty($new_key)){
//echo 'new_key 为空';	
}else{
$new_key=md5($new_key);
$mysql="UPDATE `s5152396`.`test` SET  `key` =  '$new_key' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
//echo mysql_affected_rows();
if (mysql_affected_rows()< 0 ){
//修改密码失败	
echo '7';
exit;
}
}
if(empty($new_user)){
//echo 'new_user 为空';	
}else{
$mysql="UPDATE `s5152396`.`test` SET  `user` =  '$new_user' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
if (mysql_affected_rows()< 0 ){
//修改账号失败	
echo '8';
exit;
}
}
if(empty($info)){
//echo 'info 为空';	
}else{
$mysql="UPDATE `s5152396`.`test` SET  `info` =  '$info' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
if (mysql_affected_rows()> 0 ){
}else{
//修改info失败	
echo '9';
exit;
}
}
if(empty($email)){
//echo 'email 为空';	
}else{
$mysql="UPDATE `s5152396`.`test` SET  `email` =  '$email' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
if (mysql_affected_rows()> 0 ){
}else{
//修改Email失败	
echo '10';
exit;
}
}
if(empty($text1)){
//echo 'text1 为空';	
}else{
$mysql="UPDATE `s5152396`.`test` SET  `text1` =  '$text1' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
if (mysql_affected_rows()> 0 ){
}else{
//修改text1失败	
echo '11';
exit;
}
}
if(empty($text2)){
//echo 'text2 为空';	
}else{
$mysql="UPDATE `s5152396`.`test` SET  `text2` =  '$text2' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
if (mysql_affected_rows()> 0 ){
}else{
//修改text2失败	
echo '12';
exit;
}
}
if(empty($text3)){
//echo 'text3 为空';	
}else{
$mysql="UPDATE `s5152396`.`test` SET  `text3` =  '$text3' WHERE  `test`.`id` =$id;";
mysql_query($mysql);
if (mysql_affected_rows()> 0 ){
}else{
//修改text3失败	
echo '13';
exit;
}	
}


if (mysql_affected_rows()> 0 ){
echo '1';
};
?>