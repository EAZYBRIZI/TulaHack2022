<?php
$mysql = new mysqli('127.0.0.1','root','','hackaton');
$Article = $_POST['article'];
$Description = $_POST['description'];
$Stek = $_POST['Stek'];


$Zapros = $mysql->query("INSERT INTO `achivements` (`article`,`description`,`Stek`)
VALUES ('$Article','$Description','$Stek')");
header("Location: PersonalAreaAuth.php");

$Render = $mysql->query("SELECT * FROM `achivements`");
global $RenderAch;
$RenderAch = mysqli_fetch_assoc($Render);










?>