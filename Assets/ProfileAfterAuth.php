<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?= $_SESSION['user']['Namae'] ?> </h2>
   <a href="../index.php"> <button type="submit"> Выход</button></a>
</body>
</html>


