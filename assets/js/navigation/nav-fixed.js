window.onscroll = function() {
    stickyToScroll();
};
var navbar = document.getElementById('navbar');
// var navbarTop = document.getElementById('navbarTop');
var sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky && window.matchMedia('(min-width: 767px)').matches) {
        navbar.classList.add('bg-white');
        navbar.classList.add('fondu');

    } 
    else {
        navbar.classList.remove('bg-white');


    }
}