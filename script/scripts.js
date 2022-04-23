//передаем объекты из html кода в переменные js
let RegistrationButton = document.querySelector(".buttonforreg");
let AuthButton = document.querySelector(".AuthFor");
let Form = document.querySelector(".LoginFormTab");
let FormAuth = document.querySelector(".LoginFormTabAuth");
let shadow = document.querySelector('.CloseIt')
let shadow1 = document.querySelector('.CloseIt1')
//Функция скрытия модальных окошек
function closer() {
    shadow.onclick= function(){
        shadow.style.display =('none')
        Form.style.display =('none')
        FormAuth.style.display =('none')
    }
}
function closer1() {
    shadow1.onclick= function(){
        shadow1.style.display =('none')
        Form.style.display =('none')
        FormAuth.style.display =('none')
    }
}
//Открытие модального окошка с регистрацией и атунтификацией
RegistrationButton.onclick = function(){
    Form.style.display = ('flex');
    shadow.style.display =('block');
    closer();
}
AuthButton.onclick = function(){
    FormAuth.style.display = ('flex');
    shadow1.style.display =('block');
    closer1();
}


