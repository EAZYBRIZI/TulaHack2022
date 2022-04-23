<?php
session_start();
$mysql = new mysqli('127.0.0.1','root','','hackaton');


$Email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$PwD = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$PwD = md5($PwD."ldflwfnmxtnsht");

$CHeckUser = $mysql->query("SELECT * FROM `users` WHERE `emails` = '$Email' AND `passwordes` = '$PwD'");
if (mysqli_num_rows($CHeckUser) > 0){
$User = mysqli_fetch_assoc($CHeckUser);

$_SESSION['user'] = [
    "Namae" => $User['names'],
    "LastNamae" => $User['lastnames'],
];

header("Location: forms/LKForm/PersonalAreaAuth.php");

}
else{
    echo "Данный пользователь не найден";
}











?>