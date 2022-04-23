<?php
session_start();
$mysql = new mysqli('127.0.0.1','root','','hackaton');
#Чистка полей и приём значений из инпутов________________________
$Email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$Fname = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$PwD = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$CPwD = filter_var(trim($_POST['Cpassword']), FILTER_SANITIZE_STRING);
$PwD = md5($PwD."ldflwfnmxtnsht");$CPwD = md5($CPwD."ldflwfnmxtnsht");
#Проверки корректности данных________________________________________________________________НУЖНО ДОПИСАТЬ ДЛЯ ДРУГИХ ПОЛЕЙ ПОТОМ
#Проверка валидности почты______________________________



if (filter_var($Email, FILTER_VALIDATE_EMAIL) == false){
        echo "проверка email на правильность НЕ пройдена";
         exit();
  
}

elseif ($PwD != $CPwD){
    echo "Пароли не совпадают";
    exit();
    
}

else{
#Подключение к бд и регистрация пользователя______________________________________________

$mysql->query("INSERT INTO `users` (`emails`, `names`, `lastnames`, `passwordes`,`CheckPas`)
VALUES ('$Email','$Fname','$lname','$PwD','$CPwD')");

}
$CHeckNewUser = $mysql->query("SELECT * FROM `users` WHERE `emails` = '$Email' AND `passwordes` = '$PwD'");

$NewUser = mysqli_fetch_assoc($CHeckNewUser);
$_SESSION['New'] = [
    "Name" => $NewUser['names'],
    "Las_name" => $NewUser['lastnames'],
];




header("Location: forms/LKForm/PersonalArea.php");
?>