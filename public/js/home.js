
/* =========================================
   SILONG CAFE - HOME PAGE IMAGE SLIDER
========================================= */

// Get all hero slides and slider buttons
const slides = document.querySelectorAll('.hero-slide');
const dots = document.querySelectorAll('.dot');

const prevButton = document.getElementById('prevSlide');
const nextButton = document.getElementById('nextSlide');

// Track the current slide
let currentSlide = 0;

// Automatically change images every 5 seconds
let slideInterval;

// Display the selected slide
function showSlide(index) {

    // Remove active class from all slides and dots
    slides.forEach(slide => {
        slide.classList.remove('active');
    });

    dots.forEach(dot => {
        dot.classList.remove('active');
    });

    // Add active class to selected slide and dot
    slides[index].classList.add('active');
    dots[index].classList.add('active');

    // Update current slide
    currentSlide = index;
}

// Move to the next slide
function nextSlide() {
    let nextIndex = (currentSlide + 1) % slides.length;
    showSlide(nextIndex);
}

// Move to the previous slide
function previousSlide() {
    let previousIndex = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(previousIndex);
}

// Stop and restart automatic sliding
function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 5000);
}

// Next button
nextButton.addEventListener('click', function () {
    nextSlide();
    resetInterval();
});

// Previous button
prevButton.addEventListener('click', function () {
    previousSlide();
    resetInterval();
});

// Clickable dots
dots.forEach((dot, index) => {
    dot.addEventListener('click', function () {
        showSlide(index);
        resetInterval();
    });
});

// Start automatic sliding
if (slides.length > 0) {
    showSlide(0);
    resetInterval();
}
