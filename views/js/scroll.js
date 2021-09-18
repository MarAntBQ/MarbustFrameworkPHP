var about = document.getElementById("about");
var aboutLink = document.getElementById("AboutLink");


function ScrollFnts() {
    var scrollTop = document.documentElement.scrollTop;
    var aboutTop = about.offsetTop;
    var aboutFinal = aboutTop - 60;
 
    if (aboutFinal < scrollTop) {
        setTimeout(function () {
            aboutLink.classList.add("link-active");
        }, 200);

    } else {
        setTimeout(function () {
            aboutLink.classList.remove("link-active");
        }, 200);
    }    
}

window.addEventListener('scroll', ScrollFnts);
