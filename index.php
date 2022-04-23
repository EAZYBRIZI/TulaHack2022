<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/media.css">
    <title>TulaHack2022</title>
</head>
<body>
    <div  class="LoginFormTabAuth"><div class="CloseIt1"></div>
    <div class="LoginForm">
       <form class="" action="Assets/Auth.php" method="post">
      <h1>Вход</h1>
      <div class="FormInputMailBox">
         <h3 for="MailBox">Email</h3>
          <input  class="InputSize"type="text" name="email" id="" placeholder=" " autocomplete="off" class="MailBoxInput"/>
        </div>
     
      
      <div class="FormForPassword">
        <h3 for="password">Пароль</h3>
        <input class="InputSize" type="password" name="password" id="" placeholder=" " autocomplete="off" class="UserPassword"  />
       
      </div>
      
        <div class="ButtonPosition">
          <button type="submit" class="ButtonSubmit">Авторизоваться</button>
       </div>
       </form>
    </div>
</div>
    <div class="LoginFormTab"><div class="CloseIt"></div>
        <div class="LoginForm">
           <form class="" action="Assets/PhPFormCheck.php" method="post">
          <h1>Регистрация</h1>
          <div class="FormInputMailBox">
             <h3 for="MailBox">Email</h3>
              <input  class="InputSize"type="text" name="email" id="" placeholder=" " autocomplete="off" class="MailBoxInput"/>
            </div>
          <div class="FormInputUserName"> 
            <h3 for="username">Имя</h3>
            <input class="InputSize" type="text" name="name" id="" placeholder=" " autocomplete="off" class="UserNameinput" />
           
          </div>
          <div class="FormInputUserNameLast"> 
            <h3 for="username">Фамилия</h3>
            <input class="InputSize" type="text" name="lastname" id="" placeholder=" " autocomplete="off" class="UserNameinput" />
           
          </div>
          
          <div class="FormForPassword">
            <h3 for="password">Пароль</h3>
            <input class="InputSize" type="password" name="password" id="" placeholder=" " autocomplete="off" class="UserPassword"  />
           
          </div>
          <div class="FormForPasswordСonfirmation">
            <h3 for="password">Подтверждение пароля</h3>
              <input class="InputSize" type="password" name="Cpassword" id="" placeholder=" " autocomplete="off" class="UserPasswordConfirmation"  />
            </div><br>
            <div class="ButtonPosition">
              <button type="submit" class="ButtonSubmit">Зарегестрироваться</button>
           </div>
           </form>
        </div>
    </div>
    
    <header>
        <div class="title">
            <div class="logo">
                <img src="img\Phone_Icon.png" alt="" id="logotype">
                <div class="input">
                    <input type="text" placeholder="Поиск резюме">
                </div>
            </div>
            <div class="RegAuth">
                <div class="buttonforreg" id="button">Регистрация</div>
                <div  class="AuthFor" id="button">Авторизация</div>
            </div>
        </div>

        <div class="about">
            <div class="samnazovi">
                <h1 id="FIO">Разместите здесь своё партфолио</h1>
                <h2 id="path"></h2>
            </div>

            <div class="LogoLang">
                <img src="img/cSharp.png" alt="" id="ExmpLang">
                <img src="img/c++.png" alt="" id="ExmpLang">
                <img src="img/JS.png" alt="" id="ExmpLang">
            </div>
        </div>

        <div class="nav">
            <div class="NavButtons">
                <a href=""><h3 id="Navigation">Портфель</h3></a>
                <a href=""><h3 id="Navigation">Обо мне</h3></a>
                <a href=""><h3 id="Navigation">Опыт работы</h3></a>
                <a href=""><h3 id="Navigation">Навыки</h3></a>
                <a href=""><h3 id="Navigation">Контакты</h3></a>
            </div>
        </div>
    </header>

    <main>
        <div class="MainBlock">
            <img src="https://cdnapi.smotrim.ru/api/v1/pictures/2077524/xw/redirect" alt="" id="portfolio">
            <div class="SomeText">
                <h3>Это мой первый САЙТ!</h3>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit animi nihil officia possimus qui autem facere nostrum officiis! Recusandae, in. Debitis, ex. Sapiente esse voluptatum ipsum modi tempore inventore.</h4>
            </div>
        </div>

        <div class="MainBlock">
            <img src="https://cdnapi.smotrim.ru/api/v1/pictures/2077524/xw/redirect" alt="" id="portfolio">
            <div class="SomeText">
                <h3>Это мой первый САЙТ!</h3>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit animi nihil officia possimus qui autem facere nostrum officiis! Recusandae, in. Debitis, ex. Sapiente esse voluptatum ipsum modi tempore inventore.</h4>
            </div>
        </div>

        <div class="MainBlock">
            <img src="https://cdnapi.smotrim.ru/api/v1/pictures/2077524/xw/redirect" alt="" id="portfolio">
            <div class="SomeText">
                <h3>Это мой первый САЙТ!</h3>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit animi nihil officia possimus qui autem facere nostrum officiis! Recusandae, in. Debitis, ex. Sapiente esse voluptatum ipsum modi tempore inventore.</h4>
            </div>
        </div>
        
    </main>
   <script src="script/scripts.js"></script>
</body>
</html>