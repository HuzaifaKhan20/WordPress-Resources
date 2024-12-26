// Script for Banner Solutions Swiper Start
var solutionsSwiper = new Swiper(".solutionsSwiper", {
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
  slidesPerView: 4,
  spaceBetween: 30,
  navigation: {
    nextEl: ".solutionsSwiper-button-next",
    prevEl: ".solutionsSwiper-button-prev",
},
breakpoints: {
  200: {
    slidesPerView: 1,
    spaceBetween: 20,
  },
  768: {
    slidesPerView: 4,
    spaceBetween: 40,
  },
  1024: {
    slidesPerView: 4,
    spaceBetween: 30,
  },
},
});
// Script for Banner Solutions Swiper End

// Script for Banner Client Swiper Start
var clientsSwiper = new Swiper(".clientsSwiper", {
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    grabCursor: true,
  slidesPerView: 6,
  spaceBetween: 0,
  navigation: {
    nextEl: ".clientsSwiper-button-next",
    prevEl: ".clientsSwiper-button-prev",
},
breakpoints: {
  200: {
    slidesPerView: 2.5,
    centeredSlides: true,
    spaceBetween: 30,
    loop: true,
  },
  768: {
    slidesPerView: 4,
    spaceBetween: 40,
  },
  1024: {
    slidesPerView: 4,
    spaceBetween: 0,
  },
  1700: {
    slidesPerView: 6,
    spaceBetween: 0,
  },
},
});
// Script for Banner Client Swiper End

// Script for Banner Offering Swiper Start
var offeringSwiper = new Swiper(".offeringSwiper", {
    slidesPerView: 3,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    grid: {
      rows: 3,
    },
    spaceBetween: 30,
    pagination: {
      el: ".offering-pagination",
      clickable: true,
    },
    breakpoints: {
      200: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    },
});
// Script for Banner Offering Swiper End

// Script for Banner Customer Say Swiper Start
var swiper = new Swiper(".customerSwiper", {
  centeredSlides: true,
  loop: true,
  autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
  slidesPerView: 3.6,
  spaceBetween: 30,
  pagination: {
    el: ".customer-pagination",
    clickable: true,
  },
  breakpoints: {
    200: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 2.7,
    },
    1700: {
      slidesPerView: 3.6,
    },
  },
});
// Script for Banner Customer Say Swiper End


// Script to adjust heading line Start 
document.addEventListener('DOMContentLoaded', () => {
    const headingWraps = document.querySelectorAll('.heading-wrap');
  
    headingWraps.forEach((wrap) => {
      const heading = wrap.querySelector('.main-heading');
      const line = wrap.querySelector('.heading-line');
  
      if (heading && line) {
        // Set the SVG width to match the heading's width
        line.style.width = `${heading.offsetWidth}px`;
      }
    });
  
    // Adjust dynamically on window resize
    window.addEventListener('resize', () => {
      headingWraps.forEach((wrap) => {
        const heading = wrap.querySelector('.main-heading');
        const line = wrap.querySelector('.heading-line');
  
        if (heading && line) {
          line.style.width = `${heading.offsetWidth}px`;
        }
      });
    });
  });
  
// Script to adjust heading line End 