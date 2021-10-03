$("body").niceScroll({
  scrollspeed: 5
});

function Intro_AnimationInit() {
  $(document).ready(function () {
    $(".section-1 .logo-1").fadeIn(1700);
  });
  $(document).ready(function () {
    $(".logo-2").fadeIn(1800);
  });
}

Intro_AnimationInit();

var swiper = new Swiper(".nav-menu .mySwiper", {
  slidesPerView: 4.7,
  spaceBetween: 60,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".sub-like .mySwiper", {
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

gsap.fromTo('.logo-1', {
  opacity: 0,
  y: 40,
}, {
  opacity: 1,
  y: 0,
  delay: 0,
  scrollTrigger: {
    trigger: '.top-bar',
    start: '-10% 0%',
    end: '100% 30%'
  },
  duration: 1
});

gsap.fromTo('.logo-2', {
  opacity: 0,
  y: 40,
}, {
  opacity: 1,
  y: 0,
  delay: 0.5,
  scrollTrigger: {
    trigger: '.top-bar',
    start: '-10% 0%',
    end: '100% 30%'
  },
  duration: 1
});

gsap.fromTo('.nav-menu', {
  opacity: 0,
  x: -40,
}, {
  opacity: 1,
  x: 0,
  scrollTrigger: {
    trigger: '.top-bar-2',
    start: '-10% 0%',
    end: '100% 30%'
  },
  duration: 1
});

gsap.fromTo('.bg-kakao', {
  opacity: 0,
  x: -40,
}, {
  opacity: 1,
  x: 0,
  scrollTrigger: {
    trigger: '.nav-menu',
    start: '-10% 0%',
    end: '100% 30%'
  },
  duration: 1
});

gsap.fromTo('.text-1', {
  opacity: 0,
  y: 20,
}, {
  opacity: 1,
  y: 0,
  delay: 0.2,
  scrollTrigger: {
    trigger: '.new_btn-more',
    start: '-10% 0%',
    end: '100% 30%'
  },
  duration: 1
});

gsap.fromTo('.text-2', {
  opacity: 0,
  y: 20,
}, {
  opacity: 1,
  y: 0,
  delay: 0.5,
  scrollTrigger: {
    trigger: '.new_btn-more',
    start: '0% 0%',
    end: '100% 30%'
  },
  duration: 1
});

gsap.fromTo('.kakaologo', {
  opacity: 0,
  y: 0,
}, {
  opacity: 0.7,
  y: 0,
  delay: 1,
  scrollTrigger: {
    trigger: '.new_btn-more',
    start: '0% 0%',
    end: '100% 30%'
  },
  duration: 1
});



