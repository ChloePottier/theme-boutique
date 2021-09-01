let navHeader = document.querySelector('#menu-header'),
    itemsMenu = navHeader.querySelectorAll('li.menu-item-has-children'),
    subMenu = document.querySelectorAll('ul.sub-menu');
if (window.matchMedia("(min-width: 992px)").matches) {
    //masquer tous les sous menus du menu header
    for(let subMenuItems of subMenu){
        subMenuItems.classList.add('display-none');
        subMenuItems.classList.remove('display-block');
        }
        function eventMenuMouse(el){
        el.addEventListener('mouseenter', () =>{
            //ajouter la classe sur l'enfant [2] de l'élément (objet) au survole
            el.childNodes[2].classList.add('display-block');
            el.childNodes[2].classList.remove('display-none');
        });
        el.addEventListener('mouseleave', () =>{
            el.childNodes[2].classList.remove('display-block');
            el.childNodes[2].classList.add('display-none');
        });
        }
        itemsMenu.forEach(eventMenuMouse);//appliquer la fonction sur l'onglet survolé
    } 




