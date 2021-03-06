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

    <div class="relative flex flex-col wrap">

      <!-- 상단바 -->
      <header
        class="container absolute z-50 flex flex-col items-center mx-auto text-sm text-white top-bar notosanskr whitespace-nowrap">

        <!--  1번째 상단바 -->
        <div class="flex items-center justify-between w-3/5 top-bar-1">
          <a href="sub.ssg.php" class="text-xl"><i class="fas fa-bars"></i></a>
          <a href="sub.ssg.php" class="w-44"><img src="https://i.postimg.cc/MG5dV5Xr/logo.png" alt=""></a>
          <div class="flex">
            <a href="sub.ssg.php" class="mr-10">로그인</a>
            <a href="sub.ssg.php">회원가입</a>
          </div>
        </div>

        <div class="top-bar-line"></div>

        <!--  2번째 상단바 -->
        <div class="flex items-center justify-between w-3/5 top-bar-2">
          <div>
            <a class="relative" href="sub.ssg.php">홈</a>
            <a href="sub.ssg.php" class="ml-10">장르</a>
            <a href="sub.ssg.php" class="ml-10">베스트 리그</a>
          </div>
          <a href="sub.ssg.php"><i class="fas fa-search"></i></a>
        </div>

        <div class="top-bar-line"></div>
      </header>

      <!--   배너 -->
      <section class="w-full section-1">
        <a href="sub.ssg.php" class="">
          <img class="w-full h-full" src="./img/screen.svg" alt="">
          <img class="absolute logo-1" src="./img/mainlogo-1.svg" alt="">
          <img class="absolute logo-2" src="./img/mainlogo-2.svg" alt="">
        </a>
      </section>

      <!-- 장르메뉴 -->
      <nav class="absolute flex justify-end nav-menu h-80">
        <div class="flex items-center h-full mr-32">
          <div class="relative swiper mySwiper">
            <div class="swiper-wrapper">
              <a href="sub.ssg.php" class="swiper-slide"><img src="./img/menu-1.svg" alt=""></a>
              <a href="sub.ssg.phpv" class="swiper-slide"><img src="./img/menu-2.svg" alt=""></a>
              <a href="sub.ssg.php" class="swiper-slide"><img src="./img/menu-3.svg" alt=""></a>
              <a href="sub.ssg.php" class="swiper-slide"><img src="./img/menu-4.svg" alt=""></a>
              <a href="sub.ssg.php" class="swiper-slide"><img src="./img/menu-5.svg" alt=""></a>
              <a href="sub.ssg.php" class="swiper-slide"><img src="./img/menu-6.svg" alt=""></a>
            </div>
          </div>
          <div class="absolute swiper-button-next"><i class="text-black fas fa-chevron-right"></i></div>
          <div class="absolute swiper-button-prev"><i class="text-black fas fa-chevron-left"></i></div>
        </div>
      </nav>

      <!-- 실시간 랭킹 -->
      <section class="relative flex section-2 place-self-end">
        <img src="./img/section-2.svg" alt="">
        <a class="btn-more" href="sub.ssg.php">
          <img class="absolute btn-more_2" src="./img/btn-more-2.svg" alt="">
          <img class="absolute btn-more_1" src="./img/btn-more.svg" alt="">
        </a>
        <div class="absolute flex justify-between lanking-book ml-36">
          <a href="sub.ssg.php"><img src="./img/lankingbook-1.svg" alt=""></a>
          <a href="sub.ssg.php"><img src="./img/lankingbook-2.svg" alt=""></a>
          <a href="sub.ssg.php"><img src="./img/lankingbook-3.svg" alt=""></a>
          <a href="sub.ssg.php"><img src="./img/lankingbook-4.svg" alt=""></a>
          <a href="sub.ssg.php"><img src="./img/lankingbook-5.svg" alt=""></a>
        </div>
      </section>

      <div class="absolute bg-kakao">
        <img src="./img/bg-kakao.svg" alt="">
      </div>

      <!-- 신규연재 -->
      <section class="w-full section-3">
        <div class="container relative h-full mx-auto">
          <div class="mt-24 top-bar-line"></div>
          <img class="absolute mt-16 ml-48 new-text" src="./img/new_text.svg" alt="">
          <a class="new_btn-more" href="sub.ssg.php">
            <img class="absolute newbtn-1" src="./img/btn-more.svg" alt="">
            <img class="absolute newbtn-2" src="./img/btn-more-2.svg" alt="">
          </a>
          <div class="flex justify-between new-book mt-28 ml-96">
            <a href="sub.ssg.php"><img src="./img/new-book_1.svg" alt=""></a>
            <a href="sub.ssg.php"><img src="./img/new-book_2.svg" alt=""></a>
            <a href="sub.ssg.php"><img src="./img/new-book_3.svg" alt=""></a>
          </div>
          <div class="mt-32 top-bar-line"></div>
        </div>
      </section>

      <!-- 광고배너 -->
      <section class="relative flex items-center justify-end w-full section-4">
        <a class="page" href="sub.ssg.php">
          <img src="./img/section-4_banner.svg" alt="">
          <span class="section-4_fold"></span>
        </a>
        <a class="absolute flex flex-col items-center section-4_text" href="sub.ssg.php">
          <img class="text-1" src="./img/banner-text-1.svg" alt="">
          <img class="text-1" src="./img/banner-text-2.svg" alt="">
          <img class="kakaologo" src="./img/kakao-logo.svg" alt="">
        </a>
      </section>

      <div class="top-bar-line"></div>

      <footer class="relative mt-16 h-60">
        <img src="./img/footer.svg" alt="">
        <a href="sub.ssg.php" class="absolute footer-1">
          <img src="./img/footer-1.svg" alt="">
        </a>
        <a href="sub.ssg.php" class="absolute footer-2">
          <img src="./img/footer-2.svg" alt="">
        </a>
      </footer>




    </div>

  </div>

</body>

</html>