function elementPosition (element) {
  let positionY = element.offsetTop;
  return positionY;
}
let buttonSizeGuide = document.getElementById("sizeguide");
let contentSizeGuide = document.getElementById("contentSizeGuide");
let closeGuide= document.getElementById("closeGuide");
buttonSizeGuide.addEventListener("click", function(){
    contentSizeGuide.classList.toggle("display-none");
    let positionButton = elementPosition(buttonSizeGuide);
    let positionTop = Object.values(positionButton);
    contentSizeGuide.style.top = positionTop[0]+"px";
});
closeGuide.addEventListener("click", function(){
  contentSizeGuide.classList.toggle("display-none");
});



