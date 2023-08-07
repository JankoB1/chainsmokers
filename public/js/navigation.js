let burgerBar = document.querySelector('.burger-bar .fa-bars');
let xMark = document.querySelector('.burger-bar .fa-x');
let menuInner = document.querySelector('.menu-inner');
let navigation = document.querySelector('.navigation');

burgerBar.addEventListener('click', function() {
    this.classList.add('hidden');
    xMark.classList.remove('hidden');
    menuInner.classList.remove('hidden');
    navigation.classList.add('active');
});

xMark.addEventListener('click', function() {
    this.classList.add('hidden');
    burgerBar.classList.remove('hidden');
    menuInner.classList.add('hidden');
    navigation.classList.remove('active');
});
