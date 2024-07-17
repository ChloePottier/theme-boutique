window.addEventListener("load", function() {
    megaMenu();
});

let header = document.querySelector("header");
let burger = document.getElementById("burger");
let nav = document.getElementById("main-nav");
let mainNavContainer = document.getElementById("navbar");
let itemsMenu = document.querySelectorAll(".menu-header-container li.menu-item-has-children");
let subMenu = document.querySelectorAll(".menu-header-container ul.sub-menu");
burger.addEventListener("click", function(e){
	nav.classList.toggle("is-open");
	nav.classList.add("fondu");
    burger.classList.toggle("isopen");
    burger1.classList.toggle("isopen-burger1");
    burger2.classList.toggle("isopen-burger2");
    burger3.classList.toggle("isopen-burger3");
});

function megaMenu(){
    for (itemHasChildren of itemsMenu){
        let buttonArrowDownMenu = document.createElement("button");
        buttonArrowDownMenu.setAttribute("type", "button");
        buttonArrowDownMenu.setAttribute("aria-label", "ouvrir le menu");
        buttonArrowDownMenu.setAttribute("class", "arrow-menu-down");
        let idItemParent = itemHasChildren.getAttribute("id");
        let aItemChild = itemHasChildren.querySelector("a");
        aItemChild.after(buttonArrowDownMenu);
        for ( subMenuItems of subMenu) {
            subMenuItems.classList.add("display-none");
            subMenuItems.classList.remove("display-flex");
        }
        buttonArrowDownMenu.addEventListener("click", function (e) {
            buttonArrowDownMenu.classList.toggle(idItemParent);
            buttonArrowDownMenu.classList.toggle("arrow-menu-down");
            buttonArrowDownMenu.classList.toggle("arrow-menu-up");
            let parentMenuActive = document.querySelectorAll("#menu-header li." + idItemParent);
            let subMenuActive = parentMenuActive.item(0);
            subMenuActive.childNodes[3].classList.toggle("display-flex");
            subMenuActive.childNodes[3].classList.toggle("display-none");
            document.addEventListener("scroll", () => {
                subMenuActive.childNodes[3].classList.add("display-none");
                subMenuActive.childNodes[3].classList.remove("display-flex");
                buttonArrowDownMenu.classList.add("arrow-menu-down");
                buttonArrowDownMenu.classList.remove("arrow-menu-up");
            });
        });
    }
}