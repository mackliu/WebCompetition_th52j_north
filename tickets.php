<?php
//建立連線資料庫所需資訊，DB命名請依競賽當天公告規定
$dsn="mysql:host=localhost;charset=utf8;dbname=db01";

//建立PDO連線物件
$pdo=new PDO($dsn,'root','mack1007');

//建立SQL新增資料語法
$sql="INSERT INTO `tickets` (`first_name`,`last_name`,`phone`,`pw`) VALUES('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['phone']}','{$_POST['pw']}')";

//連線資料庫並執行SQL語法完成新增功能
$pdo->exec($sql);

//將頁面導向首頁
header("location:home.html");

?>