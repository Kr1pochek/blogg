document.querySelector('.burger-menu').addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
    document.querySelector('.overlay').classList.toggle('active');
});
document.querySelector('.overlay').addEventListener('click', function() {
    document.querySelector('.main-nav').classList.remove('active');
    document.querySelector('.overlay').classList.remove('active');
});
document.addEventListener("DOMContentLoaded", function() {
    // Обработка нажатия на кнопку "Зарегистрироваться"
    document.querySelector("#switch_to_register").addEventListener("click", function() {
        document.querySelector(".login").classList.remove("active"); // Скрыть форму входа
        document.querySelector(".register").classList.add("active"); // Показать форму регистрации
    });
    // Обработка нажатия на кнопку "Войти"
    document.querySelector("#switch_to_login").addEventListener("click", function() {
        document.querySelector(".register").classList.remove("active"); // Скрыть форму регистрации
        document.querySelector(".login").classList.add("active"); // Показать форму входа
    });
    // Обработка нажатия на бургер-меню
    document.querySelector(".burger-menu").addEventListener("click", function() {
        document.querySelector(".main-nav").classList.toggle("active"); // Показать или скрыть навигационное меню
        document.querySelector(".overlay").classList.toggle("active"); // Показать или скрыть затемнение фона
    });
});

document.querySelector("popup_message").addEventListener("click", function (){
    this.classList.remove(active);
});