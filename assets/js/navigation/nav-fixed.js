window.onscroll = function() {
    stickyToScroll();
};
var navbar = document.getElementById('navbar');
var menuHeader = document.getElementById('menu-header');
var menuShop = document.getElementById('menu-shop');
var sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
        navbar.classList.add('bg-white');
        navbar.classList.add('fondu');
        navbar.classList.remove('text-shadow');
        navbar.classList.add('box-shadow');
        menuHeader.classList.add('menu-down');
        menuHeader.classList.remove('menu');
        menuShop.classList.add('menu-down');
        menuShop.classList.remove('menu');
    } 
    else {
        navbar.classList.remove('bg-white');
        navbar.classList.remove('fondu');
        navbar.classList.remove('box-shadow');
        navbar.classList.add('text-shadow');
        menuHeader.classList.remove('menu-down');
        menuHeader.classList.add('menu');
        menuShop.classList.remove('menu-down');
        menuShop.classList.add('menu');
    }
}