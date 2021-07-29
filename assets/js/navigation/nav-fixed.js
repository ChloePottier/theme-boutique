
window.onscroll = function() {
    stickyToScroll();
};

const menuBurger = document.getElementById('burger');
let isClosed1 = document.getElementById('burger1');
let isClosed2 = document.getElementById('burger2');
let isClosed3 = document.getElementById('burger3');
let sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
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