<?php
session_start();
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edit.css">
    <title>TulaHack2022</title>
</head>
<body>

    <main>
        <div class="LeftColumn">
            <div class="person">
                <img src="img/MyPhoto.jpg" alt="" id="ProfilePhoto">
                <div id="FIO"><?=$_SESSION['user']['Namae'],' ',$_SESSION['user']['LastNamae']?></div>
            </div>
            <div class="buttons">
                <a href="#EditProfile" onclick="OpenProfile('EditProfile')" id="button">Профиль</a>
                <a href="#EditAbout" onclick="OpenAbout('EditAbout')" id="button">Обо мне</a>
                <a href="#EditPortfolio" onclick="OpenPortfolio('EditPortfolio')" id="button">Портфолио</a>
                <a href="#EditJob" onclick="OpenJob('EditJob')" id="button">Опыт работы</a>
                <a href="PersonalAreaAuth.php"> <button  id="exit">Выход</button></a>
            </div>
        </div>
        
        <div class="RightColumn">
            <div class="MainText">
                Редактирование профиля
            </div>
            <!-- Профиль -->
            <div id="EditProfile" >
                <div class="LeftGrid">
                    <form action="Profile.php" method="post">
                    <div class="city">
                        <h2 id="tags">*Город</h2>
                        <input type="text" name="city" id="inputs">
                    </div>
    
                    <div class="age">
                        <h2 id="tags">*Возраст</h2>
                        <input type="text" name="age" id="inputs">
                    </div>

                    <div class="skills">
                        <h2 id="tags">*Ваш стэк</h2>
                        <input type="text" name="stek" id="inputs">
                    </div>
    
                    <div class="contacts">
                        <h2 id="tags">*Моб. телефон</h2>
                        <input type="text" name="phone" id="inputs">
                    </div>
    
                    <div class="email">
                        <h2 id="tags">*E-Mail</h2>
                        <input type="text" name="Email" id="inputs">
                    </div>

                    <div class="SaveChanges">
                        <button  type="submit"id="save">Сохранить</button>
                    </div>
                </div>
                <div class="RightGrid">
                    <img src="img/MyPhoto.jpg" alt="" id="DemoProfilePhoto">
                    <button id="UploadPhoto">Загрузить аватар</button>
                </div>
</form>
            </div>

            <!-- Обо мне -->

            <div id="EditAbout">
                <div class="AboutMe">
                    <h2 id="tags">*Обо мне</h2>
                    <textarea cols="51" rows="17" type="text" id="InputAbout"></textarea>
                </div>
                <div class="SaveChanges">
                    <a id="save">Сохранить</a>
                </div>
            </div>

            <!-- Портфолио -->

            <div id="EditPortfolio">
                <form action="Achivements.php" method="post">
                <div class="Portfolio">
                    <h2 id="tags">*Портфолио</h2>
                    <h3 id="tags">*Название</h3>
                    <input type="text" name="article" id="inputs"><br>
                    <h3 id="tags">*Описание</h3>
                    <textarea type="text" name="description" id="inputs"></textarea><br>
                    <h3 id="tags">*Стэк</h3>
                    <input type="text" name="Stek" id="inputs"><br>
                </div>
                <div class="SaveChanges">
                    <button  type="submit" id="save">Сохранить</button>
                </div>
</form>
            </div>

            <!-- Опыт работы -->

            <div id="EditJob">
                <div class="Job">
                    <h2 id="tags">*Опыт работы</h2>
                    <input type="text" id="inputs">
                </div>
                <div class="SaveChanges">
                    <a id="save">Сохранить</a>
                </div>
            </div>

        </div>

    </main>
<script src="scripts/edit.js"></script>
</body>
</html>