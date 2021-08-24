let sizeGuide = document.getElementById('sizeguide'),
    contentSizeGuide = document.getElementById('contentSizeGuide');
    sizeGuide.addEventListener('click', function(){
        contentSizeGuide.classList.toggle('display-flex');
        contentSizeGuide.classList.toggle('display-none');
    });
let closeGuide= document.getElementById('closeGuide');
closeGuide.addEventListener('click', function(){
    contentSizeGuide.classList.toggle('display-none');
    contentSizeGuide.classList.toggle('display-flex');
});