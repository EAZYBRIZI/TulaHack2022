<?php
#Чистка полей и приём значений из инпутов________________________
$Email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$Fname = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$PwD = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$CPwD = filter_var(trim($_POST['Cpassword']), FILTER_SANITIZE_STRING);
$PwD = md5($PwD."ldflwfnmxtnsht");$CPwD = md5($CPwD."ldflwfnmxtnsht");
#Проверки корректности данных________________________________________________________________НУЖНО ДОПИСАТЬ ДЛЯ ДРУГИХ ПОЛЕЙ ПОТОМ
#Проверка валидности почты______________________________
if (filter_var($Email, FILTER_VALIDATE_EMAIL) == false)
{
    echo "проверка email на правильность НЕ пройдена";
    exit();
  
}
else
{
if ($PwD === $CPwD){
#Подключение к бд и регистрация пользователя______________________________________________
$mysql = new mysqli('127.0.0.1','root','','hackaton');
$mysql->query("INSERT INTO `users` (`emails`, `names`, `lastnames`, `passwordes`,`CheckPas`)
VALUES ('$Email','$Fname','$lname','$PwD','$CPwD')");
$mysql->close();}


else{
    echo "Пароли не совпадают";
    exit();
}
}
header("Location: Profile.php");
?>