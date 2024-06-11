document.querySelector('.burger-menu').addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
    document.querySelector('.overlay').classList.toggle('active');
});

document.querySelector('.overlay').addEventListener('click', function() {
    document.querySelector('.main-nav').classList.remove('active');
    document.querySelector('.overlay').classList.remove('active');
});