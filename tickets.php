<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=db01";
$pdo=new PDO($dsn,'root','mack1007');

$sql="INSERT INTO `tickets` (`first_name`,`last_name`,`phone`,`pw`) VALUES('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['phone']}','{$_POST['pw']}')";

$pdo->exec($sql);
echo $sql;
//header("location:home.html");



?>