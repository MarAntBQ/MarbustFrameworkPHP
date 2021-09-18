function menudisplayer() {
    //window.alert("Display Message");
    var menubtn = document.getElementById("nav");
    if (menubtn.classList == "" || menubtn.classList == "desactivate-menu") {
        menubtn.classList.remove("desactivate-menu");
        menubtn.classList.add("active-menu");
    } else {
        menubtn.classList.add("desactivate-menu");
        setTimeout(function(){menubtn.classList.remove("active-menu"); menubtn.classList.remove("desactivate-menu");}, 500);
    }
}

function destroymenu() {
    //window.alert("Display Message");
    var menubtn = document.getElementById("nav");
    if (menubtn.classList == "" || menubtn.classList == "desactivate-menu") {
        menubtn.classList.remove("desactivate-menu");
        menubtn.classList.add("active-menu");
    } else {
        menubtn.classList.add("desactivate-menu");
        setTimeout(function(){menubtn.classList.remove("active-menu"); menubtn.classList.remove("desactivate-menu");}, 500);
    }
}

function destroymenu2() {
    //window.alert("Display Message");
    var menubtn = document.getElementById("nav");
    if (menubtn.classList == "") {
        
    }
    else {
        menubtn.classList.add("desactivate-menu");
        setTimeout(function(){menubtn.classList.remove("active-menu"); menubtn.classList.remove("desactivate-menu");}, 500);
    }
        
}

//Get the Current Link
function getCurrentLink() {
	var urlString, urlArray, pageHREF, menu, i, currentURL;
    urlString = document.location.href;
    urlArray = urlString.split('/');
    pageHREF = urlArray[urlArray.length - 1];

    if (pageHREF !== "") {
        menu = document.querySelectorAll('#ul li a');
        for (i = 0; i < menu.length; i++) {
            currentURL = (menu[i].getAttribute('href'));
            menu[i].className = '';
            if (currentURL === pageHREF) {
                menu[i].className = 'link-active';
            }
        }
    }
}