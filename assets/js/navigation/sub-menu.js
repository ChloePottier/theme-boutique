let subMenu = document.querySelector('ul.sub-menu'),
    menuHeader = document.querySelector('#menu-header'),
    itemMenu = document.querySelector('li.menu-item-has-children'); // ne sélectionne que sur le 1er
   //  itemMenu = document.getElementsByClassName('menu-item-has-children');
    subMenu.classList.add('display-none');

    console.log(itemMenu);

    itemMenu.addEventListener('mouseenter', () => {
        subMenu.classList.add('display-block');
        subMenu.classList.remove('display-none');

    });
    itemMenu.addEventListener('mouseleave', () => {
        subMenu.classList.remove('display-block');
        subMenu.classList.add('display-none');
    });
