var div_aboutme = document.getElementById('about-me');
var div_experience = document.getElementById('experience');
var div_education = document.getElementById('education');
var div_projects = document.getElementById('projects');
var section = document.getElementById('section');
var main = document.querySelector('main');

var menuMobile = document.getElementById('boxMob-' + section.value);
var menuDesktop = document.getElementById('boxDesk-' + section.value);

if (menuMobile) {
    menuMobile.classList.add("menuActive");
}
if (menuDesktop) {
    menuDesktop.classList.add("menuActive");
}

document.addEventListener('DOMContentLoaded', function () {
    const list = document.querySelector('.education-boxes');
    count = 0;
    for (const children of list.children) {

        count++;

        const list = document.getElementById('educationBoxesText-ul_' + count);
        const items = list.getElementsByTagName('li');
        const showMoreBtn = document.getElementById('educationBoxesTextShowMore-id_' + count);

        let visibleItems = 3; // Initial number of visible items
        const increment = 10; // Number of items to show each time

        // Show the initial set of items
        for (let i = 0; i < visibleItems; i++) {
            if (items[i]) {
                items[i].classList.add('visible');
            }
        }

        showMoreBtn.addEventListener('click', function (e) {
            e.preventDefault();

            // Show more items
            for (let i = visibleItems; i < visibleItems + increment; i++) {
                if (items[i]) {
                    items[i].classList.add('visible');
                }
            }

            visibleItems += increment;

            // Hide the "Show more" button if all items are visible
            if (visibleItems >= items.length) {
                showMoreBtn.style.display = 'none';
            }
        });

    }

});


/*switch (section.value) {
    case "about_me":
        btn_about_me.classList.add("menuActive");
        break;
    case "Manzanas":
        console.log("El kilogramo de manzanas cuesta $0.32.");
        break;
    case "Platanos":
        console.log("El kilogramo de platanos cuesta $0.48.");
        break;
    case "Cerezas":
        console.log("El kilogramo de cerezas cuesta $3.00.");
        break;
    case "Mangos":
    case "Papayas":
        console.log("El kilogramo de mangos y papayas cuesta $2.79.");
        break;
    default:
        console.log("Lo lamentamos, por el momento no disponemos de " + expr + ".");
}*/


/* Mobile logical */

// Funcion para manejar el cambio de diseÃ±o
function handleLayoutChange(mediaQuery) {
    if (mediaQuery.matches) {
        main.style.display = 'block';
    } else {
        if (section.value !== 'about_me') {
            main.style.display = 'none';
        } else {
            main.style.display = 'block';
        }
    }
}

var mobileMediaQuery = window.matchMedia("(min-width: 900px)");
handleLayoutChange(mobileMediaQuery);
window.addEventListener("resize", function () {
    handleLayoutChange(mobileMediaQuery);
});


/* carrusel */
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    if (slides[slideIndex - 1]) {
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";

    }

    if (dots) {
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        //dots[slideIndex-1].className += " active";
    }

}

var openPopup = document.getElementById("openPopup");
var openPopupDesktop = document.getElementById("openPopupDesktop");
var closePopup = document.getElementById("closePopup");

if (openPopup) {
    document.getElementById('openPopup').addEventListener('click', function () {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    });
}

if (openPopupDesktop) {
    document.getElementById('openPopupDesktop').addEventListener('click', function () {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    });
}

if (closePopup) {
    document.getElementById('closePopup').addEventListener('click', function () {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    });
}


