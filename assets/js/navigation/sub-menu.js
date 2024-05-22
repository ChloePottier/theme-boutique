let navHeader = document.querySelector("#menu-header");
let itemsMenu = navHeader.querySelectorAll("li.menu-item-has-children");
let subMenu = document.querySelectorAll("ul.sub-menu");
if (window.matchMedia("(min-width: 992px)").matches) {
    for(let subMenuItems of subMenu){
        subMenuItems.classList.add("display-none");
        subMenuItems.classList.remove("display-block");
    }
    function eventMenuMouse(el){
        el.addEventListener("mouseenter", () =>{
            el.childNodes[2].classList.add("display-block");
            el.childNodes[2].classList.remove("display-none");
        });
        el.addEventListener("mouseleave", () =>{
            el.childNodes[2].classList.remove("display-block");
            el.childNodes[2].classList.add("display-none");
        });
        }
        itemsMenu.forEach(eventMenuMouse);
    }