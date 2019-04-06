<?php 
//Uili.Net
//Make By 不朽千秋
$mysql_server="数据库地址";
$mysql_username="数据库用户名";
$mysql_password="数据库密码";
$mysql_database="数据库名";
$con = mysql_connect("$mysql_server","$mysql_username","$mysql_password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($mysql_database,$con);
mysql_query("set names 'utf8'");
$result=mysql_query("SELECT * FROM `test` ORDER BY `id` ASC ");

?>