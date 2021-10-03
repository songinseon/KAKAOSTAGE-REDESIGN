<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>카카오페이지 리디자인 서브</title>

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

    <div class="relative flex flex-col wrap notosanskr">

      <!-- 상단바 -->
      <header
        class="container absolute z-50 flex flex-col items-center mx-auto text-sm text-white top-bar notosanskr whitespace-nowrap">

        <!--  1번째 상단바 -->
        <div class="flex items-center justify-between w-3/5 top-bar-1">
          <a href="index.ssg.php" class="text-xl"><i class="fas fa-bars"></i></a>
          <a href="index.ssg.php" class="w-44"><img src="https://i.postimg.cc/MG5dV5Xr/logo.png" alt=""></a>
          <div class="flex">
            <a href="index.ssg.php" class="mr-10">로그인</a>
            <a href="index.ssg.php">회원가입</a>
          </div>
        </div>

        <div class="top-bar-line"></div>

      </header>

      <!-- 메인배너 -->
      <section class="relative sub-1">
        <div class="sub-bg">
          <img src="./img/sub-bg.svg" alt="">
        </div>

        <a class="absolute sub-btn-1 z-1" href="index.ssg.php">
          <img src="./img/sub-btn_1.svg" alt="">
        </a>
        <a class="absolute sub-btn-2 z-1" href="index.ssg.php">
          <img src="./img/sub-btn_2.svg" alt="">
        </a>
      </section>

      <!-- 회차 배너 -->
      <section class="w-full mt-4 sub-2">
        <div>
          <img src="./img/sub-book.svg" alt="">
        </div>

        <div class="sub-2_number notosanskr">
          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>89.</span>
                <span class="ml-7">하얀 스캔들 89화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 102 &nbsp | &nbsp 추천 &nbsp 63 &nbsp | &nbsp 댓글
                &nbsp 52 &nbsp | &nbsp 2021.09.24</div>
            </div>
            <div>
              <img src="./img/star-4.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>88.</span>
                <span class="ml-7">하얀 스캔들 88화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 421 &nbsp | &nbsp 추천 &nbsp 305 &nbsp | &nbsp 댓글
                &nbsp 202 &nbsp | &nbsp 2021.09.23</div>
            </div>
            <div>
              <img src="./img/star-4.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>


          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>87.</span>
                <span class="ml-7">하얀 스캔들 87화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 502 &nbsp | &nbsp 추천 &nbsp 453 &nbsp | &nbsp 댓글
                &nbsp 359 &nbsp | &nbsp 2021.09.23</div>
            </div>
            <div>
              <img src="./img/star-4.5.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>86.</span>
                <span class="ml-7">하얀 스캔들 86화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 530 &nbsp | &nbsp 추천 &nbsp 461 &nbsp | &nbsp 댓글
                &nbsp
                410 &nbsp | &nbsp 2021.09.22</div>
            </div>
            <div>
              <img src="./img/star-4.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>85.</span>
                <span class="ml-7">하얀 스캔들 85화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 612 &nbsp | &nbsp 추천 &nbsp 433 &nbsp | &nbsp 댓글
                &nbsp 423 &nbsp | &nbsp 2021.09.21</div>
            </div>
            <div>
              <img src="./img/star-5.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="#" class="text-xl">
                <span>84.</span>
                <span class="ml-7">하얀 스캔들 84화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 623 &nbsp | &nbsp 추천 &nbsp 450 &nbsp | &nbsp 댓글
                &nbsp 445 &nbsp | &nbsp 2021.09.21</div>
            </div>
            <div>
              <img src="./img/star-4.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>83.</span>
                <span class="ml-7">하얀 스캔들 83화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 642 &nbsp | &nbsp 추천 &nbsp 435 &nbsp | &nbsp 댓글
                &nbsp 403 &nbsp | &nbsp 2021.09.19</div>
            </div>
            <div>
              <img src="./img/star-5.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>82.</span>
                <span class="ml-7">하얀 스캔들 82화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 642 &nbsp | &nbsp 추천 &nbsp 435 &nbsp | &nbsp 댓글
                &nbsp 403 &nbsp | &nbsp 2021.09.19</div>
            </div>
            <div>
              <img src="./img/star-3.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>81.</span>
                <span class="ml-7">하얀 스캔들 81화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 600 &nbsp | &nbsp 추천 &nbsp 411 &nbsp | &nbsp 댓글
                &nbsp 435 &nbsp | &nbsp 2021.09.18</div>
            </div>
            <div>
              <img src="./img/star-3.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line opacity-20"></div>

          <div class="flex items-center justify-between w-6/12 h-32 mx-auto text-white">
            <div>
              <a href="index.ssg.php" class="text-xl">
                <span>80.</span>
                <span class="ml-7">하얀 스캔들 80화</span>
              </a>
              <div class="mt-3 ml-16 text-sm text-gray-400">조회 &nbsp 523 &nbsp | &nbsp 추천 &nbsp 433 &nbsp | &nbsp 댓글
                &nbsp 545 &nbsp | &nbsp 2021.09.17</div>
            </div>
            <div>
              <img src="./img/star-4.5.svg" alt="">
            </div>
          </div>
          <div class="top-bar-line"></div>



        </div>

        <a class="flex justify-center mt-7" href="index.ssg.php">
          <img src="./img/arrow.svg" alt="">
        </a>

      </section>

      <!-- 선호작품 -->
      <section class="mt-20 sub-like relaive">
        <div class="relative flex flex-col items-center h-full">

          <div class="text-2xl text-white sub-like_text">이 작품을 본 독자들의 다른 선택</div>
          <div class="mt-5 top-bar-line"></div>
          <div class="absolute swiper-button-next"><img src="./img/sub-arrow-2.svg" alt=""></div>
          <div class="absolute swiper-button-prev"><img src="./img/sub-arrow-1.svg" alt=""></div>
          <div class="h-full mx-auto mt-16 swiper mySwiper">
            <div class="font-thin swiper-wrapper">
              <a href="index.ssg.php" class="swiper-slide">
                <img src="./img/sub-like_book-1.svg" alt="">
                <div class="absolute text-white like-text_1">
                  <div class="text-sm">월영, 달에 피는 꽃</div>
                  <div class="mt-2 text-xs">운린</div>
                </div>
              </a>

              <a href="index.ssg.php" class="swiper-slide">
                <img src="./img/sub-like_book-2.svg" alt="">
                <div class="absolute text-white like-text_1">
                  <div class="text-sm">해양＿죽지 않아</div>
                  <div class="mt-2 text-xs">코스트</div>
                </div>
              </a>
              <a href="index.ssg.php" class="swiper-slide">
                <img src="./img/sub-like_book-3.svg" alt="">
                <div class="absolute text-white like-text_1">
                  <div class="text-sm">바라고 바라옵건대</div>
                  <div class="mt-2 text-xs">새벽나들이</div>
                </div>
              </a>
              <a href="index.ssg.php" class="swiper-slide">
                <img src="./img/sub-like_book-4.svg" alt="">
                <div class="absolute text-white like-text_1">
                  <div class="text-sm">우아한 야만의 바다</div>
                  <div class="mt-2 text-xs">MINIM / 틸다김</div>
                </div>
              </a>
              <a href="index.ssg.php" class="swiper-slide">
                <img src="./img/sub-like_book-5.svg" alt="">
                <div class="absolute text-white like-text_1">
                  <div class="text-sm">N의 인간</div>
                  <div class="mt-2 text-xs">지눅</div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </section>

      <div class="top-bar-line"></div>

      <footer class="relative mt-16 h-60">
        <img src="./img/footer.svg" alt="">
        <a href="index.ssg.php" class="absolute footer-1">
          <img src="./img/footer-1.svg" alt="">
        </a>
        <a href="index.ssg.php" class="absolute footer-2">
          <img src="./img/footer-2.svg" alt="">
        </a>
      </footer>


    </div>
  </div>

</body>

</html>