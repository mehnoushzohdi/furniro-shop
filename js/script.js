/* =========================================
   INSPIRATION SLIDER
========================================= */

const inspirationMainImage = document.querySelector(
    '.inspiration__main .inspiration__image'
);

const inspirationSideImage = document.querySelector(
    '.inspiration__side-image'
);

const inspirationArrow = document.querySelector(
    '.inspiration__caption-arrow'
);

const inspirationDots = document.querySelectorAll(
    '.inspiration__dot'
);


/* Images */

const inspirationSlides = [
    {
        main: 'images/inspiration/Rectangle 24.png',
        side: 'images/inspiration/Rectangle 25.png'
    },
    {
        main: 'images/inspiration/Rectangle 25.png',
        side: 'images/inspiration/Rectangle 24.png'
    }
];


let currentSlide = 0;


/* Change slide */

function changeInspirationSlide(index) {

    currentSlide = index;

    inspirationMainImage.src =
        inspirationSlides[currentSlide].main;

    inspirationSideImage.src =
        inspirationSlides[currentSlide].side;


    /* Active dot */

    inspirationDots.forEach((dot, dotIndex) => {

        dot.classList.toggle(
            'inspiration__dot--active',
            dotIndex === currentSlide
        );

    });
}


/* Arrow */

if (inspirationArrow) {

    inspirationArrow.addEventListener('click', () => {

        const nextSlide =
            (currentSlide + 1) % inspirationSlides.length;

        changeInspirationSlide(nextSlide);

    });

}


/* Dots */

inspirationDots.forEach((dot, index) => {

    dot.addEventListener('click', () => {

        if (index < inspirationSlides.length) {
            changeInspirationSlide(index);
        }

    });

});


// ========================================
// MOBILE HAMBURGER MENU
// ========================================

const menuToggle = document.querySelector('.mobile-menu-toggle');
const mobileMenu = document.querySelector('.mobile-menu');

if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
    });
}

document.addEventListener('click', (event) => {
    if (
        mobileMenu.classList.contains('active') &&
        !mobileMenu.contains(event.target) &&
        !menuToggle.contains(event.target)
    ) {
        mobileMenu.classList.remove('active');
    }
});