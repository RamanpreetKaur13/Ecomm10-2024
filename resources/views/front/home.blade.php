@extends('front.layout.layout')
@section('content')
    <div class="main">
        <div class="main-imgs">
            <!-- <div class="left_img_button" id="slideButton">
                      <i class="fa-solid fa-angle-left"></i>
                  </div> -->
            <div class="main-img slider">
                @if ($banners->isNotEmpty())
                    @foreach ($banners as $sliderBanners)
                        <a href="#"><img src="{{ asset('storage/front/images/banners/' . $sliderBanners->image_url) }}"
                                alt="Img0" class="back_ground_img"></a>
                        {{-- <a href="#"><img src="{{ asset('front/assets/img/bigImg2.jpg') }}" alt="Img0" class="back_ground_img"></a>
      <a href="#"><img src="{{ asset('front/assets/img/bigImg.jpg') }}" alt="Img0" class="back_ground_img"></a>
      <a href="#"><img src="{{ asset('front/assets/img/bigImg00.jpg') }}" alt="Img0" class="back_ground_img"></a>
      <a href="#"><img src="{{ asset('front/assets/img/bigImg000.jpg') }}" alt="Img0" class="back_ground_img"></a>
      <a href="#"><img src="{{ asset('front/assets/img/bigImg0.jpg') }}" alt="Img0" class="back_ground_img"></a>
      <a href="#"><img src="{{ asset('front/assets/img/bigImg3.jpg') }}" alt="Img0" class="back_ground_img"></a>
      <a href="#"><img src="{{ asset('front/assets/img/bigImg4.jpg') }}" alt="Img0" class="back_ground_img"></a> --}}
                    @endforeach
                @endif
            </div>
            <!-- <div class="right_img_button" id="slideButton">
                      <i class="fa-solid fa-angle-right"></i>
                  </div> -->
            <div class="blur_img"></div>
        </div>
        <div class="boxs">
            <div class="box1">

                {{-- grid first row starts --}}
                @if (!empty($grids))
                    @foreach ($grids as $grid)
                        <div class="box boxIn4">
                            <div>
                                <h2>{{ $grid['name'] }}</h2>
                                <div>
                                    <!-- <div> -->
                                    <div>
                                        @foreach ($grid['grid'] as $key => $item)
                                            @if ($key < 2)
                                                <!-- First two items -->
                                                <div>
                                                    <a href="{{ $item['link_url'] }}">
                                                        <div style="width: 150px; height: 120px;">
                                                            <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <span>{{ $item['title'] }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- </div>  -->

                                    <!-- <div> -->
                                    <div>
                                        <!-- Next two items (index 2 and 3) -->
                                        @foreach ($grid['grid'] as $key => $item)
                                            @if ($key >= 2)
                                                <!-- Last two items -->
                                                <div>
                                                    <a href="{{ $item['link_url'] }}">
                                                        <div style="width: 150px; height: 120px;">
                                                            <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <span>{{ $item['title'] }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- </div>  -->
                                </div>
                                <a class="seeOffer" href="#">See all offers</a>
                            </div>
                        </div>
                        @if ($loop->iteration == 3)
                        @break;
                    @endif
                @endforeach
            @endif

            <div class="box boxButton hidden">
                <div>
                    <div class="last-sign-in">
                        <h2>Sign in for your best experience</h2>
                        <button>Sign in securely</button>
                    </div>
                    <hr class="hr_color">
                    <div>
                        <a href="#">
                            <div>
                                <img src="{{ asset('front/assets/img/box141.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- grid first row ends --}}
            <br>

            @if (!empty($grids))
                @foreach ($grids as $grid)
                    @if ($loop->iteration > 3)
                        <div class="box boxIn4">
                            <div>
                                <h2>{{ $grid['name'] }}</h2>
                                <div>
                                    <!-- <div> -->
                                    <div>
                                        @foreach ($grid['grid'] as $key => $item)
                                            @if ($key < 2)
                                                <!-- First two items -->
                                                <div>
                                                    <a href="{{ $item['link_url'] }}">
                                                        <div style="width: 150px; height: 120px;">
                                                            <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <span>{{ $item['title'] }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- </div>  -->

                                    <!-- <div> -->
                                    <div>
                                        <!-- Next two items (index 2 and 3) -->
                                        @foreach ($grid['grid'] as $key => $item)
                                            @if ($key >= 2)
                                                <!-- Last two items -->
                                                <div>
                                                    <a href="{{ $item['link_url'] }}">
                                                        <div style="width: 150px; height: 120px;">
                                                            <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <span>{{ $item['title'] }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- </div>  -->
                                </div>
                                <a class="seeOffer" href="#">See all offers</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif

            <div class="box boxIn4 hidden">
                <div>
                    <!-- <div> -->
                    <h2>Cases and covers for top smartphones</h2>
                    <!-- </div> -->

                    <div>
                        <div>
                            <div>
                                <a href="#">
                                    <div>
                                        <img src="{{ asset('front/assets/img/box181.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <span>
                                            iPhone 14 | Starting ₹89
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div>
                                        <img src="{{ asset('front/assets/img/box182.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <span>
                                            Samsung Galaxy S22 | Starting ₹79
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div>
                                <a href="#">
                                    <div>
                                        <img src="{{ asset('front/assets/img/box183.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <span>
                                            OnePlus Nord CE 3 Lite | Starting ₹79
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <div>
                                        <img src="{{ asset('front/assets/img/box184.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <span>
                                            Redmi 12C | Starting ₹79
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div> -->
                    <a class="seeOffer" href="#">See all offers</a>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        {{-- {{ dd($carousels) }} --}}
        @if (!empty($carousels))
            @foreach ($carousels as $carousel)
                <div class="box2">
                    <div>
                        <div>
                            <h2>{{ $carousel['name'] }}</h2>
                            <span>See all deals</span>
                        </div>
                        <div class="mini_slide-block autoplay">
                            <!-- <div class="left_img_button" id="slideButton-b">
                              <i class="fa-solid fa-angle-left"></i>
                          </div> -->
                            @foreach ($carousel['carousel_item'] as $key => $carousel_item)
                                <div class="">
                                    <div>
                                        <a href="#">
                                            <div>
                                                <img src="{{ asset('storage/front/images/carousels/' . $carousel_item['image_url']) }}"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                    {{-- <div>
                                <div>
                                    <span><button class="box2_btn">Up to 24% off</button></span>
                                    <span class="box2_info_text">Great Freedom Sale</span>
                                </div>
                                <div>
                                    <span style="color: #222;">Samsung Galaxy M34</span>
                                </div>
                            </div> --}}
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                @if ($loop->iteration == 3)
                @break;
            @endif
                
            @endforeach
        @endif

        <!----  carousel 1 closed------->

        <hr class="hr_color">


        <!----- already was closed 9/15/2024--->
      

        <!-------3rd grid ----->
        <div class="box11">

            @if (!empty($grids))
                @foreach ($grids as $grid)
                    @if ($loop->iteration > 7)
                        <div class="box boxIn4">
                            <div>
                                <h2>{{ $grid['name'] }}</h2>
                                <div>
                                    <!-- <div> -->
                                    <div>
                                        {{-- {{ dd($grid['grid']) }} --}}
                                        @foreach ($grid['grid'] as $key => $item)
                                        {{-- {{ dd($key) }} --}}
                                            @if ($key < 2)
                                                <!-- First two items -->
                                                <div>
                                                    <a href="{{ $item['link_url'] }}">
                                                        <div style="width: 150px; height: 120px;">
                                                            <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <span>{{ $item['title'] }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- </div>  -->

                                    <!-- <div> -->
                                    <div>
                                        <!-- Next two items (index 2 and 3) -->
                                        @foreach ($grid['grid'] as $key => $item)
                                        {{-- {{ dd($key) }} --}}
                                            @if ($key >= 2)
                                                <!-- Last two items -->
                                                <div>
                                                    <a href="{{ $item['link_url'] }}">
                                                        <div style="width: 150px; height: 120px;">
                                                            <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                                alt="">
                                                        </div>
                                                        <div>
                                                            <span>{{ $item['title'] }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- </div>  -->
                                </div>
                                <a class="seeOffer" href="#">See all offers</a>
                            </div>
                        </div>
                        <!-----single item grid----->
                        {{-- <div class="box boxIn1">
                            <div>
                                <!-- <div> -->
                                <h2>Up to 70% off | Refurbished Products</h2>
                                <!-- </div> -->

                                <div>
                                    <div>
                                        <div>
                                            <a href="#">
                                                <div>
                                                    <img src="{{ asset('front/assets/img/box231.jpg') }}"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div> -->
                                <a class="seeOffer" href="#">See all offers</a>
                                <!-- </div> -->
                            </div>
                        </div> --}}
                    @endif
                        @if ($loop->iteration == 10)
                            @break;
                        @endif

                @endforeach
            @endif
            <!-----1 single item grids startss----->
            <div class="box boxIn1">
                @if (!empty($single_grid_item_1))
                    
            
                <div>
                    <!-- <div> -->
                    <h2>{{ $single_grid_item_1->name }}</h2>
                    <!-- </div> -->

                    <div>
                        <div>
                            <div>
                                <a href="#">
                                    <div>
                                        <img src="{{ asset('storage/front/images/section/' . $single_grid_item_1->image_url) }}" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div> -->
                    <a class="seeOffer" href="#">See all offers</a>
                    <!-- </div> -->
                </div>
            
                    
                @endif
            </div>
            <!-----1 single item grids ends----->
        </div>
    <!-------3rd GRID closed ----->
    <!-------3rd carousel starts ----->

    @if (!empty($carousels))
            @foreach ($carousels as $carousel)
            @if ($loop->iteration > 3)
                <div class="box2">
                    <div>
                        <div>
                            <h2>{{ $carousel['name'] }}</h2>
                            <span>See all deals</span>
                        </div>
                        <div class="mini_slide-block autoplay">
                            <!-- <div class="left_img_button" id="slideButton-b">
                              <i class="fa-solid fa-angle-left"></i>
                          </div> -->
                            @foreach ($carousel['carousel_item'] as $key => $carousel_item)
                                <div class="">
                                    <div>
                                        <a href="#">
                                            <div>
                                                <img src="{{ asset('storage/front/images/carousels/' . $carousel_item['image_url']) }}"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                    {{-- <div>
                                <div>
                                    <span><button class="box2_btn">Up to 24% off</button></span>
                                    <span class="box2_info_text">Great Freedom Sale</span>
                                </div>
                                <div>
                                    <span style="color: #222;">Samsung Galaxy M34</span>
                                </div>
                            </div> --}}
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif
                @if ($loop->iteration == 4)
                @break;
            @endif
                
            @endforeach
    @endif

    <!-------3rd carousel ends ----->


    
    <!-------1st Promotional Banner start ----->
    @if ($promo_banner_1)
    <hr class="hr_color">
    <div class="box2 flight_tickets">
        <a href="#"><img src="{{ asset('storage/front/images/section/' . $promo_banner_1->image_url) }}" alt="book flight"></a>
    </div>
    @endif
    <!-------1st Promotional Banner ends ----->


     <!-------5th CARAOUSEL starts----->
    {{-- <hr class="hr_color">
    <div class="box2">
        <div>
            <div>
                <h2>New launches from womed-led businesses</h2>
                <span>See all offers</span>
            </div>
            <div class="mini_slide-block autoplay">
                <!-- <div class="left_img_button" id="slideButton-b">
                          <i class="fa-solid fa-angle-left"></i>
                      </div> -->
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn01.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn02.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn03.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn04.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn05.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn06.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn07.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn08.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn09.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn10.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn11.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxn12.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <!-- <div class="right_img_button" id="slideButton-b">
                          <i class="fa-solid fa-angle-right"></i>
                      </div> -->
            </div>
        </div>
    </div> --}}

    @if (!empty($carousels))
            @foreach ($carousels as $carousel)
            @if ($loop->iteration > 4)
                <div class="box2">
                    <div>
                        <div>
                            <h2>{{ $carousel['name'] }}</h2>
                            <span>See all deals</span>
                        </div>
                        <div class="mini_slide-block autoplay">
                            <!-- <div class="left_img_button" id="slideButton-b">
                              <i class="fa-solid fa-angle-left"></i>
                          </div> -->
                            @foreach ($carousel['carousel_item'] as $key => $carousel_item)
                                <div class="">
                                    <div>
                                        <a href="#">
                                            <div>
                                                <img src="{{ asset('storage/front/images/carousels/' . $carousel_item['image_url']) }}"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                    {{-- <div>
                                <div>
                                    <span><button class="box2_btn">Up to 24% off</button></span>
                                    <span class="box2_info_text">Great Freedom Sale</span>
                                </div>
                                <div>
                                    <span style="color: #222;">Samsung Galaxy M34</span>
                                </div>
                            </div> --}}
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif
                @if ($loop->iteration == 5)
                @break;
            @endif
                
            @endforeach
    @endif

      <!-------5th CARAOUSEL ends----->

    <!-------2nd Promotional Banner start ----->
    @if ($promo_banner_2)
        <hr class="hr_color">
        <div class="sixer_img">
            <a href="#"><img src="{{ asset('storage/front/images/section/' . $promo_banner_2->image_url) }}" alt="sixer"></a>
        </div>
    @endif
     <!-------2nd Promotional Banner ends ----->

     <!--------4Th GRID starts-------------->

    {{-- <hr class="hr_color">
    <div class="box11">
        <div class="box boxIn4">
            <div>
                <!-- <div> -->
                <h2>Daily essentials | Up to 60% off</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box311.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Health & household
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box312.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Grocery
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box313.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Baby care
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box314.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Pet supplies
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
        <div class="box boxIn1">
            <div>
                <!-- <div> -->
                <h2>Buy 2 get 10% off, freebies & more offers</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box321.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
        <div class="box boxIn4">
            <div>
                <!-- <div> -->
                <h2>Up to 70% off | Deals on Amaxon Brands & more</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box331.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹429 | Dish drainer more
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box332.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹349 | Kitchen
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box333.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹599 | Spice racks & more
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box334.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹149 | Explore all deals
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
        <div class="box boxIn4">
            <div>
                <!-- <div> -->
                <h2>Great Freedpm Festival | Brands in focus</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box341.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Up to 50% off | Xiaomi Tvs
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box342.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting 10,999 | TCL TVS
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box343.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Up to 40% off | Samsung TVs
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box344.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹23,990 | Hisense TVs
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
    </div> --}}
    <div class="box11">

        @if (!empty($grids))
            @foreach ($grids as $grid)
                @if ($loop->iteration > 10)
                    <div class="box boxIn4">
                        <div>
                            <h2>{{ $grid['name'] }}</h2>
                            <div>
                                <!-- <div> -->
                                <div>
                                    {{-- {{ dd($grid['grid']) }} --}}
                                    @foreach ($grid['grid'] as $key => $item)
                                    {{-- {{ dd($key) }} --}}
                                        @if ($key < 2)
                                            <!-- First two items -->
                                            <div>
                                                <a href="{{ $item['link_url'] }}">
                                                    <div style="width: 150px; height: 120px;">
                                                        <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <span>{{ $item['title'] }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- </div>  -->

                                <!-- <div> -->
                                <div>
                                    <!-- Next two items (index 2 and 3) -->
                                    @foreach ($grid['grid'] as $key => $item)
                                    {{-- {{ dd($key) }} --}}
                                        @if ($key >= 2)
                                            <!-- Last two items -->
                                            <div>
                                                <a href="{{ $item['link_url'] }}">
                                                    <div style="width: 150px; height: 120px;">
                                                        <img src="{{ asset('storage/front/images/gridCards/' . $item['image_url']) }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <span>{{ $item['title'] }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- </div>  -->
                            </div>
                            <a class="seeOffer" href="#">See all offers</a>
                        </div>
                    </div>
                @endif
                    @if ($loop->iteration == 13)
                        @break;
                    @endif

            @endforeach
        @endif
        <!-----2 single item grids startss----->
        <div class="box boxIn1">
            @if (!empty($single_grid_item_2))
                
        
            <div>
                <!-- <div> -->
                <h2>{{ $single_grid_item_2->name }}</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('storage/front/images/section/' . $single_grid_item_2->image_url) }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        
                
            @endif
        </div>
        <!-----2 single item grids ends----->
    </div>

<!--------4Th GRID ends-------------->
    {{-- <div class="box2">
        <div>
            <div>
                <h2>Up to 45% off | Furniture that amazes others</h2>
                <span>See all offers</span>
            </div>
            <div class="mini_slide-block autoplay">
                <!-- <div class="left_img_button" id="slideButton-b">
                          <i class="fa-solid fa-angle-left"></i>
                      </div> -->
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf01.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf02.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf03.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf04.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf05.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf06.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf07.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf08.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf09.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf10.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf11.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf12.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf13.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf14.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf15.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf16.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf17.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf18.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf19.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf20.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf21.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf22.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf23.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf24.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf25.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf26.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf27.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf28.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxf29.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <!-- <div class="right_img_button" id="slideButton-b">
                          <i class="fa-solid fa-angle-right"></i>
                      </div> -->
            </div>
        </div>
    </div> --}}

    <!-- <div class="box2 minimum_50">
              <div>
                  <div>
                      <h2>Up to 45% off | Furniture that amazes others</h2>
                      <span>See all offers</span>
                  </div>
                  <div class="mini_slide-3">
                      <div class="left_img_button" id="slideButton-s">
                          <i class="fa-solid fa-angle-left"></i>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf01.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf02.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf03.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf04.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf05.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf06.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf07.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf08.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf09.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf10.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf11.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf12.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf13.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf14.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf15.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf16.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf17.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf18.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf19.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf20.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf21.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf22.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf23.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf24.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf25.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf26.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf27.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf28.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxf29.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div class="right_img_button" id="slideButton-s">
                          <i class="fa-solid fa-angle-right"></i>
                      </div>
                  </div>
              </div>
          </div> -->



    {{-- <div class="box2 amazon_live">
        <div>
            <div>
                <h2>Amazon Live | Watch, Chat & Shop LIVE</h2>
                <span>See more from Amazon Live</span>
            </div>
            <div>
                <div>
                    <video controls autoplay src="{{ asset('front/assets/img/video.mp4') }}">Your browser
                        does not support the
                        video tag.</video>
                </div>
                <div class="mini_slide-live">
                    <!-- <div class="left_img_button" id="slideButton-l">
                              <i class="fa-solid fa-angle-left"></i>
                          </div> -->
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb101.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 24% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Samsung Galaxy M34</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb102.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 45% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Redmi 12C | Starting from 7699 incl...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb103.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 76% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Top headsets from Oneplus, Samsung...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb104.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 38% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Daily Essentials</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb105.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 43% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Skin - Biotique, Cetaphil, Himalaya...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb106.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 55% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>JBL Audio Freedom Sale Deals...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb107.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Deal of the Day</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>OnePlus Nord CE 3 5G | Latest launch...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb108.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 58% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Alexa Devices - Echo and Fire TV..</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb109.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 63% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Best Styles in Footwear and Handbags...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb110.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 60% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Top Offers on Mice & Keyboards</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb111.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 76% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Best Selling Massagers</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb112.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 61% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Lowest Ever Price on PS5 Console</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb113.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 68% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Cycle and Cycling accessories: Lifelong...</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxb115.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 63% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Gas Stoves and Hobs from Top Brands</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/boxx116.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div>
                            <div>
                                <span><button>Up to 38% off</button></span>
                                <span>Great Freedom Sale</span>
                            </div>
                            <div>
                                <span>Lowest Prices of the year on Smartwa...</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="right_img_button" id="slideButton-l">
                              <i class="fa-solid fa-angle-right"></i>
                          </div> -->
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="box11">
        <div class="box boxIn1">
            <div>
                <!-- <div> -->
                <h2>Up to 40% off on top combos</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box411.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
        <div class="box boxIn4">
            <div>
                <!-- <div> -->
                <h2>Starting ₹99 | Deals on Amazon brands & more</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box421.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹99 | Diapers & wipes
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box422.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹149 | Soft toys
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box423.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹229 | Baby rockers, walkers & more
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box424.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Starting ₹699 | Games & outdoor toys
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
        <div class="box boxIn1">
            <div>
                <!-- <div> -->
                <h2>Save extra with amaxon coupons</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box431.jpg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
        <div class="box boxIn4">
            <div>
                <!-- <div> -->
                <h2>Up to 70% off on home care, chocolates & more</h2>
                <!-- </div> -->

                <div>
                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box441.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Laundry & cleaners
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box442.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Cooking ingredients
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box443.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Chocolates
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div>
                                    <img src="{{ asset('front/assets/img/box444.jpg') }}" alt="">
                                </div>
                                <div>
                                    <span>
                                        Baby care
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div> -->
                <a class="seeOffer" href="#">See all offers</a>
                <!-- </div> -->
            </div>
        </div>
    </div> --}}

    {{-- <div class="box2 minimum_classy">
        <div>
            <div>
                <h2>Flat 60% off | Stay classy, stay ethnic</h2>
                <span>See all offers</span>
            </div>
            <div class="mini_slide-block autoplay">
                <!-- <div class="left_img_button" id="slideButton-b">
                          <i class="fa-solid fa-angle-left"></i>
                      </div> -->
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs1.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs2.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs3.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs4.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs5.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs6.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs7.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs8.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs9.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs10.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs11.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs12.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs13.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img src="{{ asset('front/assets/img/boxs14.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <!-- <div class="right_img_button" id="slideButton-b">
                          <i class="fa-solid fa-angle-right"></i>
                      </div> -->
            </div>
        </div>
    </div> --}}
    <!-- <div class="box2 minimum_50 minimum_classy">
              <div>
                  <div>
                      <h2>Flat 60% off | Stay classy, stay ethnic</h2>
                      <span>See all offers</span>
                  </div>
                  <div class="mini_slide-4">
                      <div class="left_img_button" id="slideButton-s">
                          <i class="fa-solid fa-angle-left"></i>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs1.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs2.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs3.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs4.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs5.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs6.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs7.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs8.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs9.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs10.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs11.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs12.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs13.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <div>
                                  <img src="./assest/boxs14.jpg" alt="">
                              </div>
                          </a>
                      </div>
                      <div class="right_img_button" id="slideButton-s">
                          <i class="fa-solid fa-angle-right"></i>
                      </div>
                  </div>
              </div>
          </div> -->
</div>
</div>
<div class="last_main">
<br>
<hr>
<div>
    <div>
        <p>After view product detail pages, look here to find an easy way to navigate back to pages you are
            interested in.</p>
    </div>
    <div class="browser-history">
        <a href="#">
            <i class="fa-solid fa-angle-right"></i>
            <div>View or edit your browsing history</div>
        </a>
    </div>
</div>
<hr>
<br>
</div>
<!-- <hr>          -->
<div class="last-sign">
<hr>
<br>
<div class="last-sign">
    <div class="last-sign-in">
        <p>See personalized recommendations</p>
        <button>Sign in</button>
        <p>New Customer? <a class="seeOffer" href="#">Start here</a></p>
    </div>
</div>
<hr>
<br>
</div>
@endsection
