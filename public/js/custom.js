
var div_aboutme = document.getElementById('about-me');
var div_experience = document.getElementById('experience');
var div_education = document.getElementById('education');
var div_projects = document.getElementById('projects');
var main = document.querySelector('main');

//div_aboutme.style.display = 'block';
//main.style.display = 'block';
//div_experience.style.display = 'none';
//div_education.style.display = 'none';
//div_projects.style.display = 'none';


/*document.getElementById('btn-about-me').addEventListener('click', function () {
    div_aboutme.style.display = 'block';
    main.style.display = 'block';
    div_experience.style.display = 'none';
    div_education.style.display = 'none';
    div_projects.style.display = 'none';
});*/

/*
document.getElementById('btn-experience').addEventListener('click', function () {
    div_experience.style.display = 'block';
    main.style.display = 'block';
    div_aboutme.style.display = 'none';
    div_education.style.display = 'none';
    div_projects.style.display = 'none';
});
*/

/*document.getElementById('btn-education').addEventListener('click', function () {
    div_education.style.display = 'block';
    main.style.display = 'block';
    div_aboutme.style.display = 'none';
    div_experience.style.display = 'none';
    div_projects.style.display = 'none';
});*/
/*
document.getElementById('btn-projects').addEventListener('click', function () {
    div_projects.style.display = 'block';
    main.style.display = 'block';
    div_aboutme.style.display = 'none';
    div_experience.style.display = 'none';
    div_education.style.display = 'none';
});

/!* Mobile logical *!/

document.getElementById('mobileHomeIcon-btn').addEventListener('click', function () {
    //div_aboutme.style.display = 'block';
    main.style.display = 'block';
    //div_experience.style.display = 'none';
    //div_education.style.display = 'none';
    //div_projects.style.display = 'none';
});

document.getElementById('experienceHomeIcon-btn').addEventListener('click', function () {
    div_aboutme.style.display = 'none';
    main.style.display = 'none';
    div_experience.style.display = 'block';
    div_education.style.display = 'none';
    div_projects.style.display = 'none';
});

document.getElementById('educationHomeIcon-btn').addEventListener('click', function () {
    div_aboutme.style.display = 'none';
    main.style.display = 'none';
    div_experience.style.display = 'none';
    div_education.style.display = 'block';
    div_projects.style.display = 'none';
});

document.getElementById('projectsHomeIcon-btn').addEventListener('click', function () {
    div_aboutme.style.display = 'none';
    main.style.display = 'none';
    div_experience.style.display = 'none';
    div_education.style.display = 'none';
    div_projects.style.display = 'block';
});*/


/* Mobile logical */

// FunciÃ³n para manejar el cambio de diseÃ±o
function handleLayoutChange(mediaQuery) {
    if (mediaQuery.matches) {
        main.style.display = 'block';
    }
}
var mobileMediaQuery = window.matchMedia("(min-width: 900px)");
handleLayoutChange(mobileMediaQuery);
window.addEventListener("resize", function() {
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
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}


