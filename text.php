<?php
//Uili.Net
//Make By 不朽千秋
include("mysql.php");
if(isset($_GET['user']) and  isset($_GET['key'])  )
{
$key=md5(htmlentities($_GET['key']));
$user=htmlentities($_GET['user']);
$mysql="SELECT * FROM  `test` WHERE  `user` =  '$user'";
$ret=mysql_query($mysql);
$row=mysql_fetch_array($ret);
if($row['user']==$user and $row['key'] == $key)
{
//查询成功
echo "info:".$row['info'] . "\n"."email:".$row['email']. "\n". "text1:".$row['text1']. "\n". "text2:".$row['text2']. "\n". "text3:".$row['text3'];
exit;
}
echo '0';//查询失败
}
?>