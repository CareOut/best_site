const slider = new Swiper(".swiper", {
    loop: true,
  autoplay: {
    delay: 5000,
    stopOnLastSlide: true,
    disableOnInteraction: false,
  },
  slidesPerGroup: 1,
  spaceBetween: 30,
  slidesPerView: 1,
  simulateTouch: true,
  touchRatio: 1,
  touchAngle: 45,
  grabCursor: true,
  effect: "slide",
 
  });