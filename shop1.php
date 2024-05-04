<?php
session_start();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="flexkit" />

  <link rel="shortcut icon" href="../images/logoMeowBakery.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com/">

  <!------------------ Fonts ------------------>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

  <!--------------- Stylesheets --------------->
  <link rel="stylesheet" href="css/plugins/swiper.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />


  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

  <!------------- Document Title -------------->
  <title>Meo Bakery | Delicious and Well-known Bakery</title>

</head>


<body>
  
<?php include 'header.php';?>

  <main>
    <section class="full-width_padding">
      <div class="full-width_border border-2" style="border-color: #eeeeee;">
        <div class="shop-banner position-relative ">
          <div class="background-img" style="background-color: #eeeeee;">
            <img loading="lazy" src="../images/CakeProducts/banner_background_shop1.jpg" width="1759" height="420" alt="Pattern" class="slideshow-bg__img object-fit-cover" />
          </div>

          <div class="shop-banner__content container position-absolute start-50 top-50 translate-middle">
            <h1 class="stroke-text smooth-16 text-uppercase fw-bold mb-3 mb-xl-4 mb-xl-5">BREAD & CHEESE</h1>
            <ul class="d-flex flex-wrap list-unstyled text-uppercase h6">
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s menu-link_active">Special</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Cupcake</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Donut</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Macaron</a></li>
              <li class="me-3 me-xl-4 pe-1"><a href="#" class="menu-link menu-link_us-s">Others</a></li>
            </ul>
          </div><!-- /.shop-banner__content -->
        </div><!-- /.shop-banner position-relative -->
      </div><!-- /.full-width_border -->
    </section><!-- /.full-width_padding-->

    <div class="mb-4 pb-lg-3"></div>

    <section class="shop-main container">
      <div class="d-flex justify-content-between mb-4 pb-md-2">
        <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
          <a href="index.php" class="menu-link menu-link_us-s text-uppercase fw-medium" >Home</a>
          <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
          <a href="shop1.php" class="menu-link menu-link_us-s text-uppercase fw-medium" >The Shop</a>
        </div><!-- /.breadcrumb -->

        <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
          <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" name="total-number" id="filterOption">
            <option selected value="all">All</option>
            <option value="cupcake">Cupcake</option>
            <option value="donut">Donut</option>
            <option value="macaron">Macaron</option>
            <option value="mochi">Mochi</option>
            <option value="tiramisu">Tiramisu</option>
            <option value="special">Special</option>
            <option value="others">Others</option>
          </select>

          <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>

          <div class="col-size align-items-center order-1 d-none d-lg-flex">
            <span class="text-uppercase fw-medium me-2">View</span>
            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="2">2</button>
            <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="3">3</button>
            <button class="btn-link fw-medium js-cols-size" data-target="products-grid"  data-cols="4">4</button>
          </div><!-- /.col-size -->

          <div class="shop-asc__seprator mx-3 bg-light d-none d-lg-block order-md-1"></div>
        </div><!-- /.shop-acs -->
      </div><!-- /.d-flex justify-content-between -->

      <div class="products-grid row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid" >
        <div class="product-card-wrapper" data-category="others">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/banh opera.jpg" width="330" height="400" alt="Opera Cake" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  <!-- <div class="swiper-slide">
                    <a href="product1_simple.php"><a href="product1_simple.php"><img loading="lazy" src="../images/products/product_1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  </div>/.pc__img-wrapper -->
                </div>
                <!-- <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span> -->
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Others</p>
              <h6 class="pc__title"><a href="product1_simple.php">Opera Cake</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="others">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/redvelvet.jpg" width="330" height="400" alt="Red Velvet" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->

                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Others</p>
              <h6 class="pc__title"><a href="product1_simple.php">Red Velvet</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>

            <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
              <div class="pc-labels__right ms-auto">
                <span class="pc-label pc-label_sale d-block text-white">-67%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="others">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/bánh khúc cây.jpg" width="330" height="400" alt="Log Cakes" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                 
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Others</p>
              <h6 class="pc__title"><a href="product1_simple.php">Log Cakes</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="others">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/crepe matcha.jpg" width="330" height="400" alt="Crepe Matcha" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
               
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Others</p>
              <h6 class="pc__title"><a href="product1_simple.php">Crepe Matcha</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
            <div class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between">
              <div class="pc-labels__left">
                <span class="pc-label pc-label_new d-block bg-white">NEW</span>
              </div>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="cupcake">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/cupcake cam.jpg" width="330" height="400" alt="Cupcake Orange" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Cupcake</p>
              <h6 class="pc__title"><a href="product1_simple.php">Cupcake Orange</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="cupcake">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/cupcake oreo.jpg" width="330" height="400" alt="Cupcake Oreo" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                
                </div>
               
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Cupcake</p>
              <h6 class="pc__title"><a href="product1_simple.php">Cupcake Oreo</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="cupcake">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/cupcake dâu.jpg" width="330" height="400" alt="Cupcake Strawberry" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Cupcake</p>
              <h6 class="pc__title"><a href="product1_simple.php">Cupcake Strawberry</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="cupcake">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/Mini-Chocolate-with-Reduced-Sugar-Frosting.jpeg" width="330" height="400" alt="Mini Chocolate" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
              
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Cupcake</p>
              <h6 class="pc__title"><a href="product1_simple.php">Mini Chocolate</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="donut">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/Cookies Monster.jpg" width="330" height="400" alt="Cookies Monster" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Donut</p>
              <h6 class="pc__title"><a href="product1_simple.php">Cookies Monster</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>
              <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="donut">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/Cinnamon.jpg" width="330" height="400" alt="Cinnamon" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Donut</p>
              <h6 class="pc__title"><a href="product1_simple.php">Cinnamon</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$62</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="donut">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/Peppermint.jpg" width="330" height="400" alt="Peppermint" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Donut</p>
              <h6 class="pc__title"><a href="product1_simple.php">Peppermint</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="donut">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/Blueberry Donut.jpg" width="330" height="400" alt="Blueberry Donut" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></span>
                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></span>
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Donut</p>
              <h6 class="pc__title"><a href="product1_simple.php">Blueberry Donut</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="macaron" >
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/macaron_chocolate.jpg" width="330" height="400" alt="Macaron Chocolate" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Macaron</p>
              <h6 class="pc__title"><a href="product1_simple.php">Macaron Chocolate</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$29</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="macaron">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/macaron_dau.jpg" width="330" height="400" alt="Macaron Strawberry" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Macaron</p>
              <h6 class="pc__title"><a href="product1_simple.php">Macaron Strawberry</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price price-old">$129</span>
                <span class="money price price-sale">$99</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="macaron">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/macaron_vietquat.jpg" width="330" height="400" alt="Macaron Blueberry" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Macaron</p>
              <h6 class="pc__title"><a href="product1_simple.php">Macaron Blueberry</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$17</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>

        <div class="product-card-wrapper" data-category="macaron">
          <div class="product-card mb-3 mb-md-4 mb-xxl-5">
            <div class="pc__img-wrapper">
              <div class="swiper-container background-img js-swiper-slider" data-settings='{"resizeObserver": true}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="product1_simple.php"><img loading="lazy" src="../images/CakeProducts/macaron_combo.avif" width="330" height="400" alt="Macaron Combo" class="pc__img"></a>
                  </div><!-- /.pc__img-wrapper -->
                  
                </div>
                
              </div>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            </div>

            <div class="pc__info position-relative">
              <p class="pc__category">Macaron</p>
              <h6 class="pc__title"><a href="product1_simple.php">Macaron Combo</a></h6>
              <div class="product-card__price d-flex">
                <span class="money price">$129</span>
              </div>

              <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
              </button>
            </div>
          </div>
        </div>
      </div><!-- /.products-grid row -->
      <div id="noProducts" style="display: none;  justify-content: center; align-items: center; font-size: 15px;">There are currently no products</div>
      <div id="pagination">
    	<button id="prev-page">Previous</button>
   	 	<span id="current-page">1</span>
    	<button id="next-page">Next</button>
	</div>
      <!-- <p class="mb-1 text-center fw-medium">SHOWING 36 of 100 items</p>
      <div class="progress progress_uomo mb-3 ms-auto me-auto" style="width: 300px;">
        <div class="progress-bar" role="progressbar" style="width: 39%; background-color: #FF69B4;"aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <div class="text-center">
        <a class="btn-link btn-link_lg text-uppercase fw-medium" href="#" style="color: #C71585;">Show More</a>
      </div> -->
    </section><!-- /.shop-main container -->
  </main>
	<div class="mb-4 pb-xl-4"></div>
    <?php include 'footer.php';?>

  <!----------- Customer Login Form ----------->
  <div class="aside aside_right overflow-hidden customer-forms" id="customerForms">
    <div class="customer-forms__wrapper d-flex position-relative">
      <div class="customer__login">
        <div class="aside-header d-flex align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Login</h3>
          <button class="btn-close-lg js-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <form action="#" method="POST" class="aside-content">
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control form-control_gray" id="customerNameEmailInput" placeholder="name@example.com">
            <label for="customerNameEmailInput">Username or email address *</label>
          </div>

          <div class="pb-3"></div>

          <div class="form-label-fixed mb-3">
            <label for="customerPasswordInput" class="form-label">Password *</label>
            <input name="password" id="customerPasswordInput" class="form-control form-control_gray" type="password" placeholder="********" />
          </div>

          <div class="d-flex align-items-center mb-3 pb-2">
            <div class="form-check mb-0">
              <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label text-secondary" for="flexCheckDefault">Remember me</label>
            </div>
            <a href="reset_password.php" class="btn-text ms-auto">Lost password?</a>
          </div>

          <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

          <div class="customer-option mt-4 text-center">
            <span class="text-secondary">No account yet?</span>
            <a href="login_register.php#register-tab" class="btn-text js-show-register">Create Account</a>
          </div>
        </form>
      </div><!-- /.customer__login -->

      <div class="customer__register">
        <div class="aside-header d-flex align-items-center">
          <h3 class="text-uppercase fs-6 mb-0">Create an account</h3>
          <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
        </div><!-- /.aside-header -->

        <form action="#" method="POST" class="aside-content">
          <div class="form-floating mb-4">
            <input name="username" type="text" class="form-control form-control_gray" id="registerUserNameInput" placeholder="Username">
            <label for="registerUserNameInput">Username</label>
          </div>

          <div class="pb-1"></div>

          <div class="form-floating mb-4">
            <input name="email" type="email" class="form-control form-control_gray" id="registerUserEmailInput" placeholder="user@company.com">
            <label for="registerUserEmailInput">Email address *</label>
          </div>

          <div class="pb-1"></div>

          <div class="form-label-fixed mb-4">
            <label for="registerPasswordInput" class="form-label">Password *</label>
            <input name="password" id="registerPasswordInput" class="form-control form-control_gray" type="password" placeholder="*******" />
          </div>

          <p class="text-secondary mb-4">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>

          <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>

          <div class="customer-option mt-4 text-center">
            <span class="text-secondary">Already have account?</span>
            <a href="#" class="btn-text js-show-login">Login</a>
          </div>
        </form>
      </div><!-- /.customer__register -->
    </div><!-- /.customer-forms__wrapper -->
  </div><!-- /.aside aside_right -->


  <?php include 'cart_drawer.php'; ?>
  <!----------------- Sitemap ----------------->

  <!----------------- Quick View ----------------->

  <!---------------- Go To Top ---------------->
  <div id="scrollTop" class="visually-hidden end-0"></div>

  <!----------- External JavaScripts ---------->
  <script src="js/plugins/jquery.min.js"></script>
  <script src="js/plugins/bootstrap.bundle.min.js"></script>
  <script src="js/plugins/bootstrap-slider.min.js"></script>
  
  <script src="js/plugins/swiper.min.js"></script>
  <script src="js/plugins/countdown.js"></script>
  <script src="js/add_to_cart.js"></script>
  <!-------------- Footer Scripts ------------->
  <script src="js/theme.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/FilterOptionShop1.js"></script>
</body>
</html>