{{-- <div class="sidebar">
    <div class="hdn-head">
        <h2>Hello, Sign in</h2>
    </div>
    <div class="hdn-content">
        <h3>Digital Content & Devices</h3>
        <ul>
            <div>
                <li>Amazon Music</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Kindle E-Readers & Books</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Appstore for Android</li><i class="fa-solid fa-angle-right"></i>
            </div>
        </ul>
        <div class="line"></div>
    </div>
    <div class="hdn-content">
        <h3>Shop By Department</h3>
        <ul>
            <div>
                <li>Electronics</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Computers</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Smart Homes</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Arts & Crafts</li><i class="fa-solid fa-angle-right"></i>
            </div>
        </ul>
        <div class="line"></div>
    </div>
    <div class="hdn-content">
        <h3>Programs & Features</h3>
        <ul>
            <div>
                <li>Gift Cards & Mobile Recharges</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Flight Tickets</li><i class="fa-solid fa-angle-right"></i>
            </div>
            <div>
                <li>Clearance Store</li><i class="fa-solid fa-angle-right"></i>
            </div>
        </ul>
        <div class="line"></div>
    </div>
</div>
<i class="fa-solid fa-xmark"></i>
<div class="triangle"><i class="fa-solid fa-triangle"></i></div>
<div class="hdn-sign">
    <div class="hdn-table">
        <div>
            <h3>Your Lists</h3>
            <ul class="your_list_left_ul">
                <li>Create a List</li>
                <li>Find a List & Registry</li>
                <li>Amazon Smile Charity Lists</li>
            </ul>
        </div>
        <div class="hdn-line"></div>
        <div>
            <h3>Your Account</h3>
            <ul class="your_account_right_ul">
                <li>Account</li>
                <li>Orders</li>
                <li>Recommendations</li>
                <li>Browsing History</li>
                <li>Watchlist</li>
                <li>Video Purchases</li>
                <li>Kindle Unlimited</li>
                <li>Content & Devices</li>
                <li>Subscribe & Save Items</li>
                <li>Membership</li>
                <li>Music Library</li>
            </ul>
        </div>
    </div>
</div>
<div class="black"></div> --}}



<div id="overlay" onclick="closeNav()"></div>

<div id="closeBtn" onclick="closeNav()">&times;</div>
<div class="sidenav" id="mySidenav">
  <div class="sidenavHeader">
    <i class="fas fa-user-circle"></i> Hello, Sign In
  </div>
  <!--Below SideNavHeader-->
  <div id="main-container">
    <div class="sidenavContentHeader">Trending</div>
    <a href="#"><div class="sidenavContent">Best Sellers</div></a>
    <a href="#"><div class="sidenavContent">New Releases</div></a>
    <a href="#"><div class="sidenavContent">Movers and Shakers</div></a>
    <hr />
    <div class="sidenavContentHeader">Digital Content And Devices</div>
    <a href="#" onclick="openPrimeVideo()"
      ><div class="sidenavRow">
        <div>Prime Video</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#" onclick="openAmazonMusic()"
      ><div class="sidenavRow">
        <div>Amazon Music</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#"
      ><div class="sidenavRow">
        <div>Apps for Android</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#"
      ><div class="sidenavRow">
        <div>Echo, Alexa & Smart Home</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#"
      ><div class="sidenavRow">
        <div>Fire TV</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#"
      ><div class="sidenavRow">
        <div>Fire Tablets</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#"
      ><div class="sidenavRow">
        <div>Kindle E-readers & Books</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#"
      ><div class="sidenavRow">
        <div>Audible Audiobooks</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <hr />
    <div class="sidenavContentHeader">Shop By Department</div>
    <a href="#"
      ><div class="sidenavRow">
        <div>Amazon Fresh</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i></div
    ></a>
    <a href="#">
      <div class="sidenavRow">
        <div>Books</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <a href="#">
      <div class="sidenavRow">
        <div>Films, TV, Music & Games</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <a href="#">
      <div class="sidenavRow">
        <div>Electronics & Computers</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <div class="sidenavContainer" id="firstContainer">
      <hr />
      <a href="#">
        <div class="sidenavRow">
          <div>Home, Garden, Pets & DIY</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Toys, Children & Baby</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Clothes, Shoes, Jewellery & Accessories</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Sports & Outdoors</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Food & Grocery</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Health & Beauty</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Car & Motorbike</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Business, Industry & Science</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
    </div>
    <div
      class="sidenavRowDropdown"
      id="firstDropDown"
      onclick="firstDropDown()"
    >
      <div>See All</div>
      <i
        class="fas fa-chevron-down"
        style="color: #8e9090; margin-left: 10px"
      >
      </i>
    </div>
    <hr />
    <div class="sidenavContentHeader">Programs & Features</div>
    <a href="#">
      <div class="sidenavRow">
        <div>Gift Cards & Top Up</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <a href="#">
      <div class="sidenavRow">
        <div>Find a Gift</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <a href="#">
      <div class="sidenavRow">
        <div>Handmade</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <a href="#">
      <div class="sidenavRow">
        <div>Amazon Launchpad</div>
        <i class="fas fa-chevron-right" style="color: #8e9090"></i>
      </div>
    </a>
    <!--Beginning of second sidenavContainer-->
    <div class="sidenavContainer" id="secondContainer">
      <hr />
      <a href="#">
        <div class="sidenavContent">Made In Italy</div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Home Services</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavContent">Prime Wardrobe</div>
      </a>
      <a href="#">
        <div class="sidenavRow">
          <div>Amazon Business</div>
          <i class="fas fa-chevron-right" style="color: #8e9090"></i>
        </div>
      </a>
      <a href="#">
        <div class="sidenavContent">Amazon Second Chance</div>
      </a>
    </div>
    <div
      class="sidenavRowDropdown"
      id="secondDropDown"
      onclick="secondDropDown()"
    >
      <div>See All</div>
      <i
        class="fas fa-chevron-down"
        style="color: #8e9090; margin-left: 10px"
      >
      </i>
    </div>
    <hr />
    <div class="sidenavContentHeader">Help & Settings</div>
    <a href="#"><div class="sidenavContent">Your Account</div></a>
    <a href="#"><div class="sidenavContent">Currency Settings</div></a>
    <a href="#"><div class="sidenavContent">Customer Service</div></a>
    <a href="#"><div class="sidenavContent">Sign In</div></a>
    <div style="height: 50px"></div>
  </div>
  <!--End of first container-->

  <div id="sub-container">
    <div id="mainMenu">
      <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
    </div>
    <hr />
    <div id="sub-container-content">
      <!-- <div class="sidenavContentHeader">Prime Video</div>
      <a href="#"><div class="sidenavContent">All Videos</div></a> -->
    </div>
  </div>
</div>

<!--Not Sidenav-->
{{-- <div
  onclick="openNav()"
  style="
    font-size: 30px;
    margin: 20px 0 0 20px;
    cursor: pointer;
    display: inline-block;
  "
>
  &#9776; Open
</div>
<div id="whole-flex">
  <p style="font-size: 40px">This is the Amazon website</p>
  <img
    src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Shaqi_jrvej.jpg/1200px-Shaqi_jrvej.jpg"
    alt="This is the Amazon website"
    style="margin-top: 20px; height: auto; width: 80%; max-width: 800px"
  />
</div> --}}
{{-- <script src="script.js"></script> --}}
