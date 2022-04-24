<?php
$mysql = new mysqli('127.0.0.1','root','','hackaton');
$City = $_POST['city'];
$Age = $_POST['age'];
$Stek = $_POST['stek'];
$Phone = $_POST['phone'];
$Mail = $_POST['Email'];

$Zapros = $mysql->query("INSERT INTO `profile` (`city`, `age`,`stek`, `phone`, `Email`)
VALUES ('$City','$Age','$Stek','$Phone','$Mail')");
header("Location: PersonalAreaAuth.php");







?>
