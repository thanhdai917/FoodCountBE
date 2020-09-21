 <!-- header-banner -->
 <div class="slideshow-container boxfull" id="myslide">
    <div>
      <div class="display-fixed" id="myHeader-fixed">
        <div class="boxcenter">
          <div class="logo">
            <img id="dark" src="<?= BASEURL ?>/public/images/logo-dark.png" alt="" style="display: none;">
          </div>
          <div>
            <ul>
              <li><a href="<?= BASEURL ?>/Home">HOME</a></li>
              <li><a href="about.html">ABOUT</a>
                <ul class="sub-menu">
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Location</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </li>
              <li><a href="<?= BASEURL ?>/Category">MENU</a>
                <ul class="sub-menu">
                  <li><a href="<?= BASEURL ?>/Category">Our full menu</a></li>
                  <li><a href="<?= BASEURL ?>/Category">Special Lunch</a></li>
                  <li><a href="<?= BASEURL ?>/Category">Special Dinner</a></li>
                  <li><a href="<?= BASEURL ?>/Category">Special Family Style Meal</a></li>
                  <li><a href="<?= BASEURL ?>/Category">Exclusive Meal For Veterians</a></li>
                </ul>
              </li>
              <li><a href="#">FEATURES</a></li>
              <li><a href="#">GALLERY</a></li>
              <li><a href="#">BLOG</a>
                <ul class="sub-menu">
                  <li><a href="#">How to eat healthy.</a></li>
                  <li><a href="#">How eating effect your body</a></li>
                  <li><a href="#">10 secret about vegetables</a></li>
                </ul>
              </li>
              <li><a href="#">SHOP</a>
                <ul class="sub-menu">
                  <li><a href="oreder-online.html">Order online</a></li>
                  <li><a href="#">Reservation</a></li>
                </ul>
              </li>
              <li><a href="#">ELEMENTS</a></li>
            </ul>
          </div>
          <div class="module-content">
            <div class="module"><a href="#" class="reservation">RESERVATION</a></div>
            <div class="module"><a href="/test-MVC/login"><i class="fa fa-user"></i></a></div>
            <div class="module"><a href="#"><i class="fa fa-shopping-cart"></i>
            <?php 
            if(isset($_SESSION['cart'])){
            echo $num = count($_SESSION['cart']);
            }else{
            echo $num= 0;
            }
            ?>
          </a></div>
          </div>

        </div>
      </div>
    </div>
    <div class="mySlides fade">
      <div>
        <div class="header">
          <div class="header-content boxcenter">
            <div class="col-6">
              <div class="col-3 mr top-header-content">
                <i class="fa fa-map-marker"></i>
                <span>Tanta AlGharbia. Egypt</span>
              </div>
              <div class="col-3 top-header-content">
                <i class="fa fa-phone"></i>
                <span>+ 2 0106 5370701</span>
              </div>
            </div>
            <div class="col-6">
              <div class="flr">
                <span>Folow Us</span>

                <a class="facebook" style="width: 180%;" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

              </div>
            </div>
          </div>
          <div style="z-index: 500;">
            <img src="<?= BASEURL ?>/public/images/shape-topbar.png" alt="">
          </div>
        </div>

        <div class="navigation" id="myHeader">
          <div class="boxcenter">
            <div class="logo">
              <img src="<?= BASEURL ?>/public/images/logo-light.png" alt="" id="light">
            </div>
            <div>
              <ul>
                <li><a href="<?= BASEURL ?>/Home">HOME</a></li>
                <li><a href="about.html">ABOUT</a>
                  <ul class="sub-menu">
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
                <li><a href="<?= BASEURL ?>/Category">MENU</a>
                  <ul class="sub-menu">
                    <li><a href="fullMenu.html">Our full menu</a></li>
                    <li><a href="fullMenu.html">Special Lunch</a></li>
                    <li><a href="fullMenu.html">Special Dinner</a></li>
                    <li><a href="#">Special Family Style Meal</a></li>
                    <li><a href="#">Exclusive Meal For Veterians</a></li>
                  </ul>
                </li>
                <li><a href="">FEATURES</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="blog.html">BLOG</a>
                  <ul class="sub-menu">
                    <li><a href="#">How to eat healthy.</a></li>
                    <li><a href="#">How eating effect your body</a></li>
                    <li><a href="#">10 secret about vegetables</a></li>
                  </ul>
                </li>
                <li><a href="#">SHOP</a>
                  <ul class="sub-menu">
                    <li><a href="oreder-online.html">Order online</a></li>
                    <li><a href="#">Reservation</a></li>
                  </ul>
                </li>
                <li><a href="#">ELEMENTS</a></li>
              </ul>
            </div>
            <div class="module-content">
              <div class="module"><a href="#" class="reservation">RESERVATION</a></div>
              <div class="module"><a href="#"><i class="fa fa-user"></i></a></div>
              <div class="module"><a href="#"><i class="fa fa-shopping-cart"></i>
              <?php 
  if(isset($_SESSION['cart'])){
    echo $num = count($_SESSION['cart']);
  }else{
    echo $num= 0;
  }
  ?>
            </a></div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?= BASEURL ?>/public/images/banner-1.jpg" style="width:100%" class="banner">
      <div class="overlay"></div>
      <div class="boxcenter">
        <div class="text">
          <h2>Made With Love</h2>
          <h1>
            We Serve Quanlity Food
          </h1>
          <p>Granny is a restaurant, bar and coffe roastery located on Egypt.<br> We have awesome recipes and the most
            talented chefs in town!</p>
          <div class="btn">
            <a href="#" class="btn-1">RESERVER
              NOW</a>
            <a href="#" class="btn-2">VIEW MENU</a>
          </div>
        </div>
      </div>
    </div>

    <div class="mySlides fade">
      <div>
        <div class="header">
          <div class="header-content boxcenter">
            <div class="col-6">
              <div class="col-3 mr top-header-content">
                <i class="fa fa-map-marker"></i>
                <span>Tanta AlGharbia. Egypt</span>
              </div>
              <div class="col-3 top-header-content">
                <i class="fa fa-phone"></i>
                <span>+ 2 0106 5370701</span>
              </div>
            </div>
            <div class="col-6">
              <div class="flr">
                <span>Folow Us</span>

                <a class="facebook" style="width: 180%;" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

              </div>
            </div>
          </div>
          <div>
            <img src="<?= BASEURL ?>/public/images/shape-topbar.png" alt="">
          </div>
        </div>

        <div class="navigation" id="myHeader">
          <div class="boxcenter">
            <div class="logo">
              <img src="<?= BASEURL ?>/public/images/logo-light.png" alt="">
            </div>
            <div>
              <ul>
                <li><a href="<?= BASEURL ?>/Home">HOME</a></li>
                <li><a href="about.html">ABOUT</a>
                  <ul class="sub-menu">
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
                <li><a href="<?= BASEURL ?>/Category">MENU</a>
                  <ul class="sub-menu">
                    <li><a href="fullMenu.html">Our full menu</a></li>
                    <li><a href="fullMenu.html">Special Lunch</a></li>
                    <li><a href="fullMenu.html">Special Dinner</a></li>
                    <li><a href="#">Special Family Style Meal</a></li>
                    <li><a href="#">Exclusive Meal For Veterians</a></li>
                  </ul>
                </li>
                <li><a href="#">FEATURES</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="blog.html">BLOG</a>
                  <ul class="sub-menu">
                    <li><a href="#">How to eat healthy.</a></li>
                    <li><a href="#">How eating effect your body</a></li>
                    <li><a href="#">10 secret about vegetables</a></li>
                  </ul>
                </li>
                <li><a href="oreder-online.html">SHOP</a>
                  <ul class="sub-menu">
                    <li><a href="#">Order online</a></li>
                    <li><a href="#">Reservation</a></li>
                  </ul>
                </li>
                <li><a href="#">ELEMENTS</a></li>
              </ul>
            </div>
            <div class="module-content">
              <div class="module"><a href="#" class="reservation">RESERVATION</a></div>
              <div class="module"><a href="#"><i class="fa fa-user"></i></a></div>
              <div class="module"><a href="#"><i class="fa fa-shopping-cart"></i>
              <?php 
  if(isset($_SESSION['cart'])){
    echo $num = count($_SESSION['cart']);
  }else{
    echo $num= 0;
  }
  ?>
            </a></div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?= BASEURL ?>/public/images/banner-2.jpg" style="width:100%" class="banner">
      <div class="overlay"></div>
      <div class="boxcenter">
        <div class="text">
          <h2>Made With Love</h2>
          <h1>Delicious Food</h1>
          <p>Granny is a restaurant, bar and coffe roastery located on Egypt.<br> We have awesome recipes and the most
            talented chefs in town!</p>
          <div class="btn">
            <a href="#" class="btn-1">RESERVER
              NOW</a>
            <a href="#" class="btn-2">VIEW MENU</a>
          </div>
        </div>
      </div>
    </div>

    <div class="mySlides fade">
      <div>
        <div class="header">
          <div class="header-content boxcenter">
            <div class="col-6">
              <div class="col-3 mr top-header-content">
                <i class="fa fa-map-marker"></i>
                <span>Tanta AlGharbia. Egypt</span>
              </div>
              <div class="col-3 top-header-content">
                <i class="fa fa-phone"></i>
                <span>+ 2 0106 5370701</span>
              </div>
            </div>
            <div class="col-6">
              <div class="flr">
                <span>Folow Us</span>

                <a class="facebook" style="width: 180%;" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

              </div>
            </div>
          </div>
          <div>
            <img src="<?= BASEURL ?>/public/images/shape-topbar.png" alt="">
          </div>
        </div>

        <div class="navigation" id="myHeader">
          <div class="boxcenter">
            <div class="logo">
              <img src="<?= BASEURL ?>/public/images/logo-light.png" alt="">
            </div>
            <div>
              <ul>
                <li><a href="<?= BASEURL ?>/Home">HOME</a></li>
                <li><a href="about.html">ABOUT</a>
                  <ul class="sub-menu">
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
                <li><a href="<?= BASEURL ?>/Category">MENU</a>
                  <ul class="sub-menu">
                    <li><a href="fullMenu.html">Our full menu</a></li>
                    <li><a href="fullMenu.html">Special Lunch</a></li>
                    <li><a href="fullMenu.html">Special Dinner</a></li>
                    <li><a href="#">Special Family Style Meal</a></li>
                    <li><a href="#">Exclusive Meal For Veterians</a></li>
                  </ul>
                </li>
                <li><a href="#">FEATURES</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="blog.html">BLOG</a>
                  <ul class="sub-menu">
                    <li><a href="#">How to eat healthy.</a></li>
                    <li><a href="#">How eating effect your body</a></li>
                    <li><a href="#">10 secret about vegetables</a></li>
                  </ul>
                </li>
                <li><a href="#">SHOP</a>
                  <ul class="sub-menu">
                    <li><a href="oreder-online.html">Order online</a></li>
                    <li><a href="#">Reservation</a></li>
                  </ul>
                </li>
                <li><a href="#">ELEMENTS</a></li>
              </ul>
            </div>
            <div class="module-content">
              <div class="module"><a href="#" class="reservation">RESERVATION</a></div>
              <div class="module"><a href="#"><i class="fa fa-user"></i></a></div>
              <div class="module"><a href="#"><i class="fa fa-shopping-cart"></i>
              <?php 
  if(isset($_SESSION['cart'])){
    echo $num = count($_SESSION['cart']);
  }else{
    echo $num= 0;
  }
  ?>
            </a></div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?= BASEURL ?>/public/images/banner-3.jpg" style="width:100%" class="banner">
      <div class="overlay"></div>
      <div class="boxcenter">
        <div class="text">
          <h2>Made With Love</h2>
          <h1>Delicious Food</h1>
          <p>Granny is a restaurant, bar and coffe roastery located on Egypt.<br> We have awesome recipes and the most
            talented chefs in town!</p>
          <div class="btn">
            <a href="#" class="btn-1" >RESERVER
              NOW</a>
            <a href="#" class="btn-2">VIEW MENU</a>
          </div>
        </div>
      </div>
    </div>
    <div class="mySlides fade">
      <div>
        <div class="header">
          <div class="header-content boxcenter">
            <div class="col-6">
              <div class="col-3 mr top-header-content">
                <i class="fa fa-map-marker"></i>
                <span>Tanta AlGharbia. Egypt</span>
              </div>
              <div class="col-3 top-header-content">
                <i class="fa fa-phone"></i>
                <span>+ 2 0106 5370701</span>
              </div>
            </div>
            <div class="col-6">
              <div class="flr">
                <span>Folow Us</span>

                <a class="facebook" style="width: 180%;" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

              </div>
            </div>
          </div>
          <div>
            <img src="<?= BASEURL ?>/public/images/shape-topbar.png" alt="">
          </div>
        </div>

        <div class="navigation" id="myHeader">
          <div class="boxcenter">
            <div class="logo">
              <img src="<?= BASEURL ?>/public/images/logo-light.png" alt="">
            </div>
            <div>
              <ul>
                <li><a href="<?= BASEURL ?>/Home">HOME</a></li>
                <li><a href="about.html">ABOUT</a>
                  <ul class="sub-menu">
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
                <li><a href="<?= BASEURL ?>/Category">MENU</a>
                  <ul class="sub-menu">
                    <li><a href="fullMenu.html">Our full menu</a></li>
                    <li><a href="fullMenu.html">Special Lunch</a></li>
                    <li><a href="fullMenu.html">Special Dinner</a></li>
                    <li><a href="#">Special Family Style Meal</a></li>
                    <li><a href="#">Exclusive Meal For Veterians</a></li>
                  </ul>
                </li>
                <li><a href="#">FEATURES</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="blog.html">BLOG</a>
                  <ul class="sub-menu">
                    <li><a href="#">How to eat healthy.</a></li>
                    <li><a href="#">How eating effect your body</a></li>
                    <li><a href="#">10 secret about vegetables</a></li>
                  </ul>
                </li>
                <li><a href="#">SHOP</a>
                  <ul class="sub-menu">
                    <li><a href="oreder-online.html">Order online</a></li>
                    <li><a href="#">Reservation</a></li>
                  </ul>
                </li>
                <li><a href="#">ELEMENTS</a></li>
              </ul>
            </div>
            <div class="module-content">
              <div class="module"><a href="#" class="reservation">RESERVATION</a></div>
              <div class="module"><a href="#"><i class="fa fa-user"></i></a></div>
              <div class="module"><a href="#"><i class="fa fa-shopping-cart"></i>
              <?php 
      if(isset($_SESSION['cart'])){
    echo $num = count($_SESSION['cart']);
  }else{
    echo $num= 0;
  }
  ?>
            </a></div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?= BASEURL ?>/public/images/banner-4.jpg" style="width:100%" class="banner">
      <div class="overlay"></div>
      <div class="boxcenter">
        <div class="text">
          <h2>Made With Love</h2>
          <h1>Delicious Food</h1>
          <p>Granny is a restaurant, bar and coffe roastery located on Egypt.<br> We have awesome recipes and the most
            talented chefs in town!</p>
          <div class="btn">
            <a href="#" class="btn-1">RESERVER
              NOW</a>
            <a href="#" class="btn-2">VIEW MENU</a>
          </div>
        </div>
      </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <!-- end header-banner -->
  <!-- section-1 -->
