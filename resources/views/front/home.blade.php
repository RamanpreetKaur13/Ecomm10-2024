@extends('front.layout.layout')
@section('content')
<div class="main">
  <div class="main-imgs">
    <!-- <div class="left_img_button" id="slideButton">
          <i class="fa-solid fa-angle-left"></i>
      </div> -->
    <div class="main-img slider">
      @if ($getSliderBanners->isNotEmpty())
          
     
      @foreach ($getSliderBanners as $sliderBanners)
          
     
      <a href="#"><img src="{{ asset('storage/front/images/banners/'.$sliderBanners->image) }}" alt="Img0" class="back_ground_img"></a>
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
      {{-- <div class="box boxIn2">
        <div>
          <h2>Keep shopping for</h2>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/bigImg1.jpg') }}" alt="">
              </div>
              <div>
                <span>Taped diapers</span>
                <br>
                <span class="view">1 viewed</span>
              </div>
            </a>

            

            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/box112.jpg') }}" alt="">
              </div>
              <div>
                <span>Hi-fi & home audio speakers</span>
                <br>
                <span class="view">1 viewed</span>
              </div>
            </a>
          </div>
          <a class="seeOffer" href="#">view your browsing history</a>
        </div>
      </div> --}}

      <div class="box boxIn4">
        <div>
          <!-- <div> -->
          <h2>Smart Phones that suit your budget</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box121.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Budget | Under ₹10,000
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box122.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Mid range | ₹10,000 - ₹25,000
                    </span>
                  </div>
                </a>
              </div>
            </div>

            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box123.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Premium | ₹25,000 - 40,000
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box124.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Ultra Premium | Above ₹40,000
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
          <h2>Smart Phones that suit your budget</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box121.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Budget | Under ₹10,000
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box122.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Mid range | ₹10,000 - ₹25,000
                    </span>
                  </div>
                </a>
              </div>
            </div>

            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box123.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Premium | ₹25,000 - 40,000
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box124.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Ultra Premium | Above ₹40,000
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
          <h2>Great Freedom sale</h2>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/box131.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <a class="seeOffer" href="#">See all</a>
        </div>
      </div>
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
      <br>
      <div class="box boxIn1">
        <div>
          <h2>Starting ₹129 | Monitors, storage, accessories & more</h2>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/box151.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <a class="seeOffer" href="#">See all offers</a>
        </div>
      </div>
      <div class="box boxIn4">
        <div>
          <!-- <div> -->
          <h2>Starting ₹79 | Home, kitchen & outdoors</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box161.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Home decor & essentials
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box162.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Cookware & Dining
                    </span>
                  </div>
                </a>
              </div>
            </div>

            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box163.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Furniture and mattresses
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box164.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Tools & home improvement
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
          <h2>Up to 70% off | Deals on Amazon Brands & more</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box171.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Up to 70% off | Home & kitchen
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box172.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Up to 70% off | Electronic accessories
                    </span>
                  </div>
                </a>
              </div>
            </div>

            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box173.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Up to 60% off | Daily essentials
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box174.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Under ₹599 | Clothing, shoes & more
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <!-- <div> -->
          <a class="seeOffer" href="#">Prime Early | See all offers</a>
          <!-- </div> -->
        </div>
      </div>
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
    <!-- <div class="box2 blockbuster_deals"> -->
    <div class="box2 ">
      <div>
        <div>
          <h2>Blockbuster deals</h2>
          <span>See all deals</span>
        </div>
        <div class="mini_slide-block autoplay">
          <!-- <div class="left_img_button" id="slideButton-b">
                      <i class="fa-solid fa-angle-left"></i>
                  </div> -->
          <div class="">
            <div>
              <a href="#">
                <div>
                  <img src="{{ asset('front/assets/img/boxb101.jpg') }}" alt="">
                </div>
              </a>
            </div>
            <div>
              <div>
                <span><button class="box2_btn">Up to 24% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Samsung Galaxy M34</span>
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
                <span><button class="box2_btn">Up to 45% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Redmi 12C | Starting from 7699 incl...</span>
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
                <span><button class="box2_btn">Up to 76% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Top headsets from Oneplus, Samsung...</span>
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
                <span><button class="box2_btn">Up to 38% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Daily Essentials</span>
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
                <span><button class="box2_btn">Up to 43% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Skin - Biotique, Cetaphil, Himalaya...</span>
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
                <span><button class="box2_btn">Up to 55% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">JBL Audio Freedom Sale Deals...</span>
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
                <span><button class="box2_btn">Deal of the Day</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">OnePlus Nord CE 3 5G | Latest launch...</span>
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
                <span><button class="box2_btn">Up to 58% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Alexa Devices - Echo and Fire TV..</span>
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
                <span><button class="box2_btn">Up to 63% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Best Styles in Footwear and Handbags...</span>
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
                <span><button class="box2_btn">Up to 60% off</button></span>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Top Offers on Mice & Keyboards</span>
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
                <button class="box2_btn">Up to 76% off</button>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Best Selling Massagers</span>
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
                <button class="box2_btn">Up to 61% off</button>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Lowest Ever Price on PS5 Console</span>
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
                <button class="box2_btn">Up to 68% off</button>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Cycle and Cycling accessories: Lifelong...</span>
              </div>
            </div>
          </div>
          <div>
            <div>
              <a href="#">
                <div>
                  <img src="{{ asset('front/assets/img/boxb114.jpg') }}" alt="">
                </div>
              </a>
            </div>
            <div>
              <div>
                <button class="box2_btn">Up to 63% off</button>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Gas Stoves and Hobs from Top Brands</span>
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
                <button class="box2_btn">Up to 38% off</button>
                <span class="box2_info_text">Great Freedom Sale</span>
              </div>
              <div>
                <span style="color: #222;">Lowest Prices of the year on Smartwa...</span>
              </div>
            </div>
          </div>
          <!-- <div class="right_img_button" id="slideButton-b">
                      <i class="fa-solid fa-angle-right"></i>
                  </div> -->
        </div>
      </div>
    </div>
    <hr class="hr_color">

    <div class="box2">
      <div>
        <div>
          <h2>Minimum 40% off | Beauty & makeup</h2>
          <span>See all offers</span>
        </div>
        <div class="mini_slide-block autoplay">
          <!-- <div class="left_img_button" id="slideButton-b">
                      <i class="fa-solid fa-angle-left"></i>
                  </div> -->
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx21.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx22.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx23.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx24.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx25.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx26.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx27.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx28.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx29.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx210.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx211.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx212.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx213.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx214.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx215.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx216.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx217.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx218.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx219.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx220.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx221.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx222.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx223.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx224.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <!-- <div class="right_img_button" id="slideButton-b">
                      <i class="fa-solid fa-angle-right"></i>
                  </div> -->
        </div>
      </div>
    </div>

    <!-- <div class="box2 minimum_50">
          <div>
              <div>
                  <h2>Minimum 40% off | Beauty & makeup</h2>
                  <span>See all offers</span>
              </div>
              <div class="mini_slide autoplay">
                  <div class="left_img_button" id="slideButton-s">
                      <i class="fa-solid fa-angle-left"></i>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx21.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx22.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx23.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx24.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx25.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx26.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx27.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx28.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx29.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx210.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx211.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx212.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx213.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx214.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx215.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx216.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx217.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx218.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx219.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx220.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx221.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx222.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx223.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx224.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div class="right_img_button" id="slideButton-s">
                      <i class="fa-solid fa-angle-right"></i>
                  </div>
              </div>
          </div>
      </div> -->
    <div class="box11">
      <div class="box boxIn4">
        <div>
          <!-- <div> -->
          <h2>Starting ₹79 | Home, kitchen & outdoors</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box211.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Fitness & sports
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box212.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Power tools, safety & cleaning supplies
                    </span>
                  </div>
                </a>
              </div>
            </div>

            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box213.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Car, bike, parts and accesiores
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box214.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Insect control, garden & solar
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
          <h2>Minimum 60% off | Amazon Brands & more</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box221.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Home decor
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box222.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Home furnishing
                    </span>
                  </div>
                </a>
              </div>
            </div>

            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box223.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Furniture
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box224.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      kitchen & dining
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
          <h2>Up to 70% off | Refurbished Products</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box231.jpg') }}" alt="">
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
          <h2>Daily essentials | Up to 60% off</h2>
          <!-- </div> -->

          <div>
            <div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box241.jpg') }}" alt="">
                  </div>
                  <div>
                    <span>
                      Helth & household
                    </span>
                  </div>
                </a>
              </div>
              <div>
                <a href="#">
                  <div>
                    <img src="{{ asset('front/assets/img/box242.jpg') }}" alt="">
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
                    <img src="{{ asset('front/assets/img/box243.jpg') }}" alt="">
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
                    <img src="{{ asset('front/assets/img/box244.jpg') }}" alt="">
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
    </div>

    <div class="box2">
      <div>
        <div>
          <h2>Starting ₹499 | Amazon Basics headphones & speakers</h2>
          <span>See all offers</span>
        </div>
        <div class="mini_slide-block autoplay">
          <!-- <div class="left_img_button" id="slideButton-b">
                      <i class="fa-solid fa-angle-left"></i>
                  </div> -->
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx11.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx12.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx13.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx14.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx15.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx16.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx17.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx18.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx19.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx110.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx111.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx112.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx113.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx114.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx115.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx116.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx117.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div>
                <img src="{{ asset('front/assets/img/boxx118.jpg') }}" alt="">
              </div>
            </a>
          </div>
          <!-- <div class="right_img_button" id="slideButton-b">
                      <i class="fa-solid fa-angle-right"></i>
                  </div> -->
        </div>
      </div>
    </div>

    <!-- <div class="box2 minimum_50">
          <div>
              <div>
                  <h2>Starting ₹499 | Amazon Basics headphones & speakers</h2>
                  <span>See all offers</span>
              </div>
              <div class="mini_slide-1">
                  <div class="left_img_button" id="slideButton-s">
                      <i class="fa-solid fa-angle-left"></i>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx11.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx12.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx13.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx14.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx15.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx16.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx17.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx18.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx19.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx110.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx111.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx112.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx113.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx114.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx115.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx116.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx117.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxx118.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div class="right_img_button" id="slideButton-s">
                      <i class="fa-solid fa-angle-right"></i>
                  </div>
              </div>
          </div>
      </div> -->
    <hr class="hr_color">
    <div class="box2 flight_tickets">
      <a href="#"><img src="{{ asset('front/assets/img/flight.jpg') }}" alt="book flight"></a>
    </div>
    <hr class="hr_color">
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
    </div>


    <!-- <div class="box2 minimum_50">
          <div>
              <div>
                  <h2>New launches from womed-led businesses</h2>
                  <span>See all offers</span>
              </div>
              <div class="mini_slide-2">
                  <div class="left_img_button" id="slideButton-s">
                      <i class="fa-solid fa-angle-left"></i>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn01.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn02.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn03.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn04.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn05.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn06.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn07.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn08.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn09.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn10.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn11.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <div>
                              <img src="./assest/boxn12.jpg" alt="">
                          </div>
                      </a>
                  </div>
                  <div class="right_img_button" id="slideButton-s">
                      <i class="fa-solid fa-angle-right"></i>
                  </div>
              </div>
          </div>
      </div> -->
    <hr class="hr_color">
    <div class="sixer_img">
      <a href="#"><img src="{{ asset('front/assets/img/sixer.jpg') }}" alt="sixer"></a>
    </div>
    <hr class="hr_color">
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
    </div>

    <div class="box2">
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
    </div>

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
    <div class="box2 amazon_live">
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
    </div>
    <div class="box11">
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
    </div>

    <div class="box2 minimum_classy">
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
    </div>
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