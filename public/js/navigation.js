let burgerBar = document.querySelector('.burger-bar .fa-bars');
let xMark = document.querySelector('.burger-bar .fa-x');
let menuInner = document.querySelector('.menu-inner');

burgerBar.addEventListener('click', function() {
    this.classList.add('hidden');
    xMark.classList.remove('hidden');
    menuInner.classList.remove('hidden');
});

xMark.addEventListener('click', function() {
    this.classList.add('hidden');
    burgerBar.classList.remove('hidden');
    menuInner.classList.add('hidden');
});
