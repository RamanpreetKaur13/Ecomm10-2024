<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>slidersOnline Shopping site in India: Shop Online for Mobiles, Books, Watches, Shoes and More - Amazon.in
  </title>
  <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('front/assets/fabicon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <!-- <style>
            /* Custom CSS for styling */
            .slick-slide {
              margin: 0 20px;
            }
            .slick-prev, .slick-next {
              font-size: 20px;
            }
          </style> -->

</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- -------------------------sidebars--------------------------- -->
  @include('front.layout.sidebar')
  <!-- -------------------------sidebars end--------------------------- -->
  <div class="container">
    <!-- -------------------------header--------------------------- -->
    @include('front.layout.header')
    <!-- --------------------------main------------------------------ -->
    @yield('content')
    <!-- -----------------------------footer---------------------------- -->
    @include('front.layout.footer')
  </div>

</body>
<script src="{{ asset('front/assets/js/script.js') }}"></script>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<!-- Include jQuery (required for Slick Slider) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  // Initialize Slick Slider
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      fade: true,
        cssEase: 'linear',
      prevArrow: '<button type="button" class="slick-prev left_img_button" id="slideButton"><i class="fa-solid fa-angle-left"></i></button>',
    //   prevArrow: '<div class="left_img_button" id="slideButton"><i class="fa-solid fa-angle-left"></i></div>',
      nextArrow: '<button type="button" class="slick-next right_img_button"  id="slideButton"><i class="fa-solid fa-angle-right"></i></button>'
    //   nextArrow: '<div class="right_img_button" id="slideButton"> <i class="fa-solid fa-angle-right"></i> </div>'
    });


    $('.autoplay').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
]
  
});
  });
</script>
<!-- <script>
    $('.center').slick({
  centerMode: true,
  centerPadding: '10px',
  slidesToShow: 5,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script> -->



<script>
  // Page loading animation
$(window).on('load', function() {
    if($('.cover').length){
        $('.cover').parallax({
            imageSrc: $('.cover').data('image'),
            zIndex: '1'
        });
    }

    $("#preloader").animate({
        'opacity': '0'
    }, 600, function(){
        setTimeout(function(){
            $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });
});
</script>

</html>