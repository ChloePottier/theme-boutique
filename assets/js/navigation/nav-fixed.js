
window.onscroll = function() {
    stickyToScroll();
};
let navbar = document.getElementById('navbar');
let menuHeader = document.getElementById('menu-header');
let menuShop = document.getElementById('menu-shop');
const menuBurger = document.getElementById('burger');
let isClosed1 = document.getElementById('burger1');
let isClosed2 = document.getElementById('burger2');
let isClosed3 = document.getElementById('burger3');

let sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
        navbar.classList.remove('text-shadow');
        navbar.classList.add('bg-white','fondu','box-shadow');
        menuHeader.classList.add('menu-down');
        menuHeader.classList.remove('menu');
        menuShop.classList.add('menu-down');
        menuShop.classList.remove('menu');
        menuBurger.classList.remove('text-white');
        menuBurger.classList.add('text-grey-dark');
        isClosed1.classList.remove('bg-white');
        isClosed1.classList.add('bg-grey-dark');
        isClosed2.classList.remove('bg-white');
        isClosed2.classList.add('bg-grey-dark');
        isClosed3.classList.remove('bg-white');
        isClosed3.classList.add('bg-grey-dark');

    } 
    else {
        navbar.classList.remove('bg-white','fondu','box-shadow');
        navbar.classList.add('text-shadow');
        menuHeader.classList.remove('menu-down');
        menuHeader.classList.add('menu');
        menuShop.classList.remove('menu-down');
        menuShop.classList.add('menu');
        menuBurger.classList.add('text-white');
        menuBurger.classList.remove('text-grey-dark');
        isClosed1.classList.add('bg-white');
        isClosed1.classList.remove('bg-grey-dark');
        isClosed2.classList.add('bg-white');
        isClosed2.classList.remove('bg-grey-dark');
        isClosed3.classList.add('bg-white');
        isClosed3.classList.remove('bg-grey-dark');

    }
}