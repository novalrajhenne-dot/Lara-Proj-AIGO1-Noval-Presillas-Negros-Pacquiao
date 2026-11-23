
/* 
   SILONG CAFE - HOME PAGE IMAGE SLIDER
 */


const slides = document.querySelectorAll('.hero-slide');
const dots = document.querySelectorAll('.dot');

const prevButton = document.getElementById('prevSlide');
const nextButton = document.getElementById('nextSlide');


let currentSlide = 0;
let slideInterval;


function showSlide(index) {

    if (slides.length === 0) return;

   
    slides.forEach(slide => {
        slide.classList.remove('active');
    });

    dots.forEach(dot => {
        dot.classList.remove('active');
    });

    
    slides[index].classList.add('active');

    if (dots[index]) {
        dots[index].classList.add('active');
    }

    currentSlide = index;
}


function nextSlide() {
    let nextIndex = (currentSlide + 1) % slides.length;
    showSlide(nextIndex);
}


function previousSlide() {
    let previousIndex =
        (currentSlide - 1 + slides.length) % slides.length;

    showSlide(previousIndex);
}


function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 5000);
}


if (nextButton) {
    nextButton.addEventListener('click', function () {
        nextSlide();
        resetInterval();
    });
}


if (prevButton) {
    prevButton.addEventListener('click', function () {
        previousSlide();
        resetInterval();
    });
}


dots.forEach((dot, index) => {
    dot.addEventListener('click', function () {
        showSlide(index);
        resetInterval();
    });
});

if (slides.length > 0) {
    showSlide(0);
    resetInterval();
}
