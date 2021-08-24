let navHeader = document.querySelector('#menu-header'),
    itemsMenu = navHeader.querySelectorAll('li.menu-item-has-children');
    // console.log(itemsMenu);

    //masquer tous les sous menus du menu header
let subMenu = document.querySelectorAll('ul.sub-menu');
for(let subMenuItems of subMenu){
    subMenuItems.classList.add('display-none');
    subMenuItems.classList.remove('display-block');
}





    // subMenu = document.querySelectorAll('ul.sub-menu');
    // menuHeader = document.querySelector('#menu-header'),
    // itemMenu = document.querySelectorAll('li.menu-item-has-children'); // ne sélectionne que sur le 1er
    // ne sélectionne que sur le 1er

   //  itemMenu = document.getElementsByClassName('menu-item-has-children');
    // subMenu.classList.add('display-none');


// function arrayItemsMenu(e){
//     console.log(e);
// }
//     itemsMenu.forEach(arrayItemsMenu);





// n'affiche rien dans la console. Les sous menu sont masqué
// function eventMenuMouse(el){
//     function displayBlock(e){
//         e.classList.add('display-block');
//         e.classList.remove('display-none');
//         // console.log(e +'afficher');
//     }
//     // subMenu.forEach(displayBlock);
    
//     function displayNone(e){
//         e.classList.add('display-none');
//         e.classList.remove('display-block');
//         // console.log(e + 'masquer');
//     }
//     // subMenu.forEach(displayNone);
//     el.addEventListener('mouseenter', subMenu.forEach(displayBlock));
//     el.addEventListener('mouseleave', subMenu.forEach(displayNone));
// }
// itemsMenu.forEach(eventMenuMouse);



// add ne fonctionne pas. Par contre les console log oui
// function displayBlock(e){
//     // e.classList.add('display-block');
//     // e.classList.remove('display-none');
//     // console.log(e +'afficher');
// }
// subMenu.forEach(displayBlock);

// function displayNone(e){
//     // e.classList.add('display-none');
//     // e.classList.remove('display-block');
//     // console.log(e + 'masquer');
// }
// subMenu.forEach(displayNone);

// function eventMenuMouse(el){
//     el.addEventListener('mouseenter', displayBlock);
//     el.addEventListener('mouseleave', displayNone);
//     // el.addEventListener('mouseenter', function(){modifyText("quatre")}, false);
//     // el.addEventListener('mouseleave', function(){modifyText("quatre")}, false);
// }
// itemsMenu.forEach(eventMenuMouse);




// n'affiche ou ne masque que le dernier subMenu
// for (let itemMenu of itemsMenu){
//     // console.log(itemMenu);
//     itemMenu.addEventListener('mouseenter',  () =>{
//        console.log(itemMenu);
//        let subMenu = itemMenu.querySelectorAll('ul.sub-menu');
//        console.log(subMenu);
//     //     for(let subMenuItems of subMenu){
//     //         console.log(subMenuItems);
//     //         subMenuItems.classList.add('display-block');
//     //         subMenuItems.classList.remove('display-none');
//     //     }
//     });

//     itemMenu.addEventListener('mouseleave',  () =>{
//            console.log(itemMenu);
//            let subMenu = itemMenu.querySelectorAll('ul.sub-menu');
//            console.log(subMenu);

//         //     for(let subMenuItems of subMenu){
//         //         console.log(subMenuItems);
//         //         subMenuItems.classList.add('display-none');
//         //         subMenuItems.classList.remove('display-block');
//         //     }
//         });
// }








// ne marche que pour 1 sous menu

    // itemMenu.addEventListener('mouseenter', () => {
    //     subMenu.classList.add('display-block');
    //     subMenu.classList.remove('display-none');

    // });
    // itemMenu.addEventListener('mouseleave', () => {
    //     subMenu.classList.remove('display-block');
    //     subMenu.classList.add('display-none');
    // });
