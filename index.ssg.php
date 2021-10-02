<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>카카오페이지 리디자인</title>

  <!-- 테일윈드 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.2/tailwind.min.css">
  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <!-- 스크롤 트리거 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <!-- 풀페이지 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">
  <!-- 라이트박스 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <script src="index.js" defer></script>
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>

  <!-- 커스텀시작 -->
  <div class="flex justify-center">

    <div class="wrap relative flex flex-col">

      <!-- 상단바 -->
      <header
        class="top-bar notosanskr text-sm text-white container mx-auto flex flex-col items-center absolute whitespace-nowrap z-50">

        <!--  1번째 상단바 -->
        <div class="top-bar-1 flex items-center justify-between w-3/5">
          <a href="#" class="text-xl"><i class="fas fa-bars"></i></a>
          <a href="#" class="w-44"><img src="https://i.postimg.cc/MG5dV5Xr/logo.png" alt=""></a>
          <div class="flex">
            <a href="#" class="mr-10">로그인</a>
            <a href="#">회원가입</a>
          </div>
        </div>

        <div class="top-bar-line"></div>

        <!--  2번째 상단바 -->
        <div class="top-bar-2 flex items-center justify-between w-3/5">
          <div>
            <a href="#">홈</a>
            <a href="#" class="ml-10">장르</a>
            <a href="#" class="ml-10">베스트 리그</a>
          </div>
          <a href="#"><i class="fas fa-search"></i></a>
        </div>

        <div class="top-bar-line"></div>
      </header>

      <!--   배너 -->
      <section class="section-1 w-full">
        <a href="#" class="">
          <img class="h-full w-full" src="./img/screen.svg" alt="">
          <img class="absolute logo-1" src="./img/mainlogo-1.svg" alt="">
          <img class="absolute logo-2" src="./img/mainlogo-2.svg" alt="">
        </a>
      </section>

      <!-- 장르메뉴 -->
      <nav class="nav-menu h-80 absolute flex justify-end">
        <div class="h-full flex items-center mr-32">
          <div class="swiper mySwiper relative">
            <div class="swiper-wrapper">
              <a href="#" class="swiper-slide"><img src="./img/menu-1.svg" alt=""></a>
              <a href="#" class="swiper-slide"><img src="./img/menu-2.svg" alt=""></a>
              <a href="#" class="swiper-slide"><img src="./img/menu-3.svg" alt=""></a>
              <a href="#" class="swiper-slide"><img src="./img/menu-4.svg" alt=""></a>
              <a href="#" class="swiper-slide"><img src="./img/menu-5.svg" alt=""></a>
              <a href="#" class="swiper-slide"><img src="./img/menu-6.svg" alt=""></a>
            </div>
          </div>
          <div class="swiper-button-next absolute"><i class="fas fa-chevron-right text-black"></i></div>
          <div class="swiper-button-prev absolute"><i class="fas fa-chevron-left text-black"></i></div>
        </div>
      </nav>

      <!-- 실시간 랭킹 -->
      <section class="section-2 flex place-self-end relative">
        <img src="./img/section-2.svg" alt="">
        <a class="btn-more" href="#">
          <img class="btn-more_2 absolute" src="./img/btn-more-2.svg" alt="">
          <img class="btn-more_1 absolute" src="./img/btn-more.svg" alt="">
        </a>
        <div class="absolute lanking-book flex justify-between ml-36">
          <a href="#"><img src="./img/lankingbook-1.svg" alt=""></a>
          <a href="#"><img src="./img/lankingbook-2.svg" alt=""></a>
          <a href="#"><img src="./img/lankingbook-3.svg" alt=""></a>
          <a href="#"><img src="./img/lankingbook-4.svg" alt=""></a>
          <a href="#"><img src="./img/lankingbook-5.svg" alt=""></a>
        </div>
      </section>

      <!-- 신규연재 -->
      <section class="section-3 w-full">
        <div class="container mx-auto h-full relative">
          <div class="top-bar-line mt-24"></div>
          <img class="new-text mt-16 ml-48 absolute" src="./img/new_text.svg" alt="">
          <a class="new_btn-more" href="#">
            <img class="absolute newbtn-1" src="./img/btn-more.svg" alt="">
            <img class="absolute newbtn-2" src="./img/btn-more-2.svg" alt="">
          </a>
          <div class="new-book mt-28 ml-96 flex justify-between">
            <a href="#"><img src="./img/new-book_1.svg" alt=""></a>
            <a href="#"><img src="./img/new-book_2.svg" alt=""></a>
            <a href="#"><img src="./img/new-book_3.svg" alt=""></a>
          </div>
          <div class="top-bar-line mt-32"></div>
        </div>
      </section>

      <!-- 광고배너 -->
      <section class="section-4 relative w-full flex items-center justify-end">
        <a class="page" href="">
          <img src="./img/section-4_banner.svg" alt="">
          <span class="section-4_fold"></span>
        </a>
        <a class="section-4_text flex flex-col items-center absolute" href="#">
          <img class="text-1" src="./img/banner-text-1.svg" alt="">
          <img class="text-1" src="./img/banner-text-2.svg" alt="">
          <img class="kakaologo" src="./img/kakao-logo.svg" alt="">
        </a>
      </section>

      <div class="top-bar-line"></div>

      <footer class="mt-16">
        <img src="./img/footer.svg" alt="">
      </footer>




    </div>

  </div>

</body>

</html>