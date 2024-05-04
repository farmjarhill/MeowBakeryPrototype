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
<style>
.product-card {
    transition: visibility 0s, opacity 0.5s linear;
    visibility: hidden;
    opacity: 0;
}

.product-card.show {
    visibility: visible;
    opacity: 1;
}

</style>
<body>
  
<?php include 'header.php';?>

  <main>
    <section class="swiper-container js-swiper-slider slideshow full-width_padding" style="height:700px;"
      data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true,
        "pagination": {
          "el": ".slideshow-pagination",
          "type": "bullets",
          "clickable": true
        }
      }'>
      <div class="swiper-wrapper">
        <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0; height: 700px">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-bg" style="background-color: #f5e6e0;">
              <img loading="lazy" src="../images/slideshow-pattern.png" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover" />
            </div>
            <!-- <p class="slideshow_markup font-special text-uppercase position-absolute end-0 bottom-0">Summer</p> -->
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="../images/macaron_swiper.png" width="400" height="1000" alt="Macaron Swiper" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto" />
              <!-- <div class="character_markup">
                <p class="text-uppercase font-sofia fw-bold animate animate_fade animate_rtl animate_delay-10">Summer</p>
              </div> -->
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3">New Trend</h6>
              <h2 class="text-uppercase h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#811331;">Summer Sale APPETIZER</h2>
              <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#C21E56;">CUPCAKE</h2>
              <a href="#" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Discover More</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->

        <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0; height: 700px">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-bg" style="background-color: #f5e6e0;">
              <img loading="lazy" src="../images/slideshow-pattern.png" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover" />
            </div>
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <img loading="lazy" src="../images/Tiramisu_Swiper.png" width="400" height="690" alt="Tiramisu_Swiper" class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 h-auto w-auto" />
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase text-red fs-base fw-medium animate animate_fade animate_btt animate_delay-3">Summer 2024</h6>
              <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-3" style="color:#811331">Hello New Season</h2>
              <h6 class="text-uppercase mb-5 animate animate_fade animate_btt animate_delay-3">Limited Time Offer - Up to 60% off & Free Shipping</h6>
              <a href="#" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-3">Discover More</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->
      </div><!-- /.slideshow-wrapper js-swiper-slider -->

      <div class="container">
        <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-5"></div>
        <!-- /.products-pagination -->
      </div><!-- /.container -->

      <div class="slideshow-social-follow d-none d-xxl-block position-absolute top-50 start-0 translate-middle-y text-center">
        <ul class="social-links list-unstyled mb-0 text-secondary">
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
            </a>
          </li>
        </ul><!-- /.social-links list-unstyled mb-0 text-secondary -->
        <span class="slideshow-social-follow__title d-block mt-5 text-uppercase fw-medium text-secondary">Follow Us</span>
      </div><!-- /.slideshow-social-follow -->
      <a href="#section-collections-grid_masonry" class="slideshow-scroll d-none d-xxl-block position-absolute end-0 bottom-0 text_dash text-uppercase fw-medium">Scroll</a>
    </section><!-- /.slideshow -->

    <div class="mb-5 pb-5"></div>

    <section class="products-grid container">
      <h2 class="section-title text-uppercase text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4" style="color:#811331;">Our Trendy <strong style="color:#F2D2BD;">MENU</strong></h2>

      <ul class="nav nav-tabs mb-3 text-uppercase justify-content-center" id="collections-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="collections-tab-1-trigger" data-bs-toggle="tab" href="#collections-tab-1" role="tab" aria-controls="collections-tab-1" aria-selected="true" data-category="others">TOP RATED</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-2-trigger" data-bs-toggle="tab" href="#collections-tab-2" role="tab" aria-controls="collections-tab-2" aria-selected="true" data-category="cupcake">CUPCAKE</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-3-trigger" data-bs-toggle="tab" href="#collections-tab-3" role="tab" aria-controls="collections-tab-3" aria-selected="true" data-category="donut">DONUT</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-4-trigger" data-bs-toggle="tab" href="#collections-tab-4" role="tab" aria-controls="collections-tab-4" aria-selected="true" data-category="macaron">MACARON</a>
        </li>
      </ul>

      <div class="tab-content pt-2" id="collections-tab-content">
        <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="others">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/banh opera.jpg" width="330" height="400" alt="Opera Cake" class="pc__img">
                    <!-- <img loading="lazy" src="../images/CakeProducts/banh opera-1.jpg" width="330" height="400" alt="Opera Cake" class="pc__img pc__img-second"> -->
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <!-- <p class="pc__category">Dresses</p> -->
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="others">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/redvelvet.jpg" width="330" height="400" alt="Red Velvet" class="pc__img">
                    <!-- <img loading="lazy" src="../images/CakeProducts/redvelvet-1.jpg" width="330" height="400" alt="Red Velvet" class="pc__img pc__img-second"> -->
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <!-- <p class="pc__category">Dresses</p> -->
                  <h6 class="pc__title"><a href="product1_simple.php">Red Velvet</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="others">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/bánh khúc cây.jpg" width="330" height="400" alt="Log Cakes" class="pc__img">
                    <!-- <img loading="lazy" src="../images/CakeProducts/bÃ¡nh khÃºc cÃ¢y-1.jpg" width="330" height="400" alt="Log Cakes" class="pc__img pc__img-second"> -->
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <!-- <p class="pc__category">Dresses</p> -->
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="others">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/crepe matcha.jpg" width="330" height="400" alt="Crepe Matcha" class="pc__img">
                    <!-- <img loading="lazy" src="../images/CakeProducts/crepe matcha-1.jpg" width="330" height="400" alt="Crepe Matcha" class="pc__img pc__img-second"> -->
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <!-- <p class="pc__category">Dresses</p> -->
                  <h6 class="pc__title"><a href="product1_simple.php">Crepe Matcha</a></h6>
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

          </div><!-- /.row -->
          <!-- <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Discover More</a>
          </div> -->
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-2" role="tabpanel" aria-labelledby="collections-tab-2-trigger">
          <div class="row">
            
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="cupcake">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/cupcake cam.jpg" width="330" height="400" alt="Cupcake Cam" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Cupcake</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Cupcake Orange</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="cupcake">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/cupcake oreo.jpg" width="330" height="400" alt="Cupcake Oreo" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Cupcake</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Cupcake Oreo</a></h6>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="cupcake">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/cupcake dâu.jpg" width="330" height="400" alt="Cupcake Strawberry" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Cupcake</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Cupcake Strawberry</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="cupcake">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/Mini-Chocolate-with-Reduced-Sugar-Frosting.jpeg" width="330" height="400" alt="Mini Chocolate" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Cupcake</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Mini Chocolate</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>
          </div><!-- /.row -->
          <!-- <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline default-underline text-uppercase fw-medium" href="#">See All Products</a>
          </div> -->
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-3" role="tabpanel" aria-labelledby="collections-tab-3-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="donut">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/Cookies Monster.jpg" width="330" height="400" alt="Cookies Monster" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Donut</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Cookies Monster</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="donut">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/Cinnamon.jpg" width="330" height="400" alt="Cinnamon" class="pc__img">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="donut">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/Peppermint.jpg" width="330" height="400" alt="Peppermint" class="pc__img">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="donut">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/Blueberry Donut.jpg" width="330" height="400" alt="Blueberry Donut" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Donut</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Blueberry Donut</a></h6>
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

          </div><!-- /.row -->
          <!-- <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Discover More</a>
          </div> -->
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-4" role="tabpanel" aria-labelledby="collections-tab-4-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="macaron">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/macaron_chocolate.jpg" width="330" height="400" alt="Macaron Chocolate" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Macaron</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Macaron Chocolate</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="macaron">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/macaron_dau.jpg" width="330" height="400" alt="Macaron Strawberry" class="pc__img">
                  </a>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="macaron">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/macaron_vietquat.jpg" width="330" height="400" alt="Macaron Blueberry" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Macaron</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Macaron Blueberry</a></h6>
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

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5" data-category="macaron">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.php">
                    <img loading="lazy" src="../images/CakeProducts/macaron_combo.avif" width="330" height="400" alt="Macaron Combo" class="pc__img">
                  </a>
                  <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Macaron</p>
                  <h6 class="pc__title"><a href="product1_simple.php">Macaron Combo</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>

                  <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                  </button>
                </div>
              </div>
            </div>

          </div><!-- /.row -->
          <!-- <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">See All Products</a>
          </div> -->
        </div><!-- /.tab-pane fade show-->
      </div><!-- /.tab-content pt-2 -->
    </section><!-- /.products-grid -->


    <div class="pb-1 pb-xl-2"></div>


    <section class="deal-timer position-relative d-flex align-items-end overflow-hidden" style="background-color: #ebebeb;">
      <div class="background-img" style="background-image: url('../images/dealer-time-cake.jpg');"></div>

      <div class="deal-timer-wrapper container position-relative">
        <div class="deal-timer__content pb-2 mb-3 pb-xl-5 mb-xl-3 mb-xxl-5">
          <p class="text_dash text-uppercase text-red fw-medium">Deal of the week</p>
          <h3 class="h1 text-uppercase"><strong style="color:#811331">Spring</strong> Collection</h3>
          <a href="#" class="btn-link default-underline text-uppercase fw-medium mt-3">Shop Now</a>
        </div>

        <div class="position-relative d-flex align-items-center text-center pt-xxl-4 js-countdown" data-date="18-3-2024" data-time="06:50">
          <div class="day countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Days</span>
          </div>

          <div class="hour countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Hours</span>
          </div>

          <div class="min countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Mins</span>
          </div>

          <div class="sec countdown-unit">
            <span class="countdown-num d-block"></span>
            <span class="countdown-word fw-bold text-uppercase text-secondary">Sec</span>
          </div>
        </div>
      </div><!-- /.deal-timer-wrapper -->
    </section><!-- /.deal-timer -->


    <div class="mb-5 pb-1 pb-xl-5"></div>


    <section class="grid-banner container mb-3">
      <div class="row">
        <div class="col-md-6">
          <div class="grid-banner__item grid-banner__item_rect position-relative">
            <div class="background-img" style="background-image: url('../images/Roanoke-Wedding-Cakes.jpg');"></div>
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <h6 class="text-uppercase fw-medium mb-3">Starting At $19</h6>
              <h3 class="mb-3">WEDDING CAKE</h3>
              <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
          <div class="grid-banner__item grid-banner__item_rect position-relative">
            <div class="background-img" style="background-image: url('../images/birthday-cake-shutterstock_1766866313-1200x900.webp');"></div>
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <h6 class="text-uppercase fw-medium mb-3">Starting At $39</h6>
              <h3 class="mb-3">CAKE PARTY</h3>
              <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </section><!-- /.grid-banner container -->


    <div class="mb-5 pb-1 pb-xl-4"></div>


    <section class="products-carousel container">
      <h2 class="section-title text-uppercase text-center mb-4 pb-xl-2 mb-xl-4" style="color:#FF69B4">Limited <strong style="color:#FAA0A0">Edition</strong></h2>

      <div id="product_carousel" class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#product_carousel .products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": "#product_carousel .products-carousel__next",
              "prevEl": "#product_carousel .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.php">
                  <img loading="lazy" src="../images/home/demo1/product-0-1.webp" width="330" height="400" alt="Giftbox Biscuit" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <h6 class="pc__title"><a href="product1_simple.php">Biscuit Themed Cupcake Gift Box</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$17</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>

            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.php">
                  <img loading="lazy" src="../images/home/demo1/Happy New Year.png" width="330" height="400" alt="Happy New Year" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <h6 class="pc__title"><a href="product1_simple.php">Happy New Year Doughnut</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$60</span>
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

            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.php">
                  <img loading="lazy" src="../images/home/demo1/original_xmas-box.jpg" width="330" height="400" alt="XMas Mochi" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <h6 class="pc__title"><a href="product1_simple.php">Xmas Mochi</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$62</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>

            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="product1_simple.php">
                  <img loading="lazy" src="../images/home/demo1/Seasonal Macaron.webp" width="330" height="400" alt="Seasonal Macaron" class="pc__img">
                </a>
                <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              </div>

              <div class="pc__info position-relative">
                <h6 class="pc__title"><a href="product1_simple.php">Seasonal Macaron</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">$62</span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
        </div><!-- /.products-carousel__prev -->
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
        </div><!-- /.products-carousel__next -->

        <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
        <!-- /.products-pagination -->
      </div><!-- /.position-relative -->

    </section><!-- /.products-carousel container -->

    <section class="instagram container">
      <h2 class="section-title text-uppercase text-center mb-4 pb-xl-2 mb-xl-4">@MEOBAKERY</strong></h2>

      <div class="row row-cols-3 row-cols-md-4 row-cols-xl-6">
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta1.png" width="230" height="230" alt="Insta image 1">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta2.png" width="230" height="230" alt="Insta image 2">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta3.png" width="230" height="230" alt="Insta image 3">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta4.png" width="230" height="230" alt="Insta image 4">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta5.png" width="230" height="230" alt="Insta image 5">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta6.png" width="230" height="230" alt="Insta image 6">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta7.png" width="230" height="230" alt="Insta image 7">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta8.png" width="230" height="230" alt="Insta image 8">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta9.png" width="230" height="230" alt="Insta image 9">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta10.png" width="230" height="230" alt="Insta image 10">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta11.png" width="230" height="230" alt="Insta image 11">
          </a>
        </div>
        <div class="instagram__tile">
          <a href="https://instagram.com/" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
            <img loading="lazy" class="instagram__img" src="../images/instagram/insta12.png" width="230" height="230" alt="Insta image 12">
          </a>
        </div>
      </div>
    </section><!-- /.instagram container -->


    <div class="mb-4 pb-4 pb-xl-5 mb-xl-5"></div>


    <section class="service-promotion container mb-md-4 pb-md-4 mb-xl-5">
      <div class="row">
        <div class="col-md-4 text-center mb-5 mb-md-0">
          <div class="service-promotion__icon mb-4">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_shipping" /></svg>
          </div>
          <h3 class="service-promotion__title h5 text-uppercase">Fast And Free Delivery</h3>
          <p class="service-promotion__content text-secondary">Free delivery for all orders over $140</p>
        </div><!-- /.col-md-4 text-center-->

        <div class="col-md-4 text-center mb-5 mb-md-0">
          <div class="service-promotion__icon mb-4">
            <svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_headphone" /></svg>
          </div>
          <h3 class="service-promotion__title h5 text-uppercase">24/7 Customer Support</h3>
          <p class="service-promotion__content text-secondary">Friendly 24/7 customer support</p>
        </div><!-- /.col-md-4 text-center-->

        <div class="col-md-4 text-center mb-4 pb-1 mb-md-0">
          <div class="service-promotion__icon mb-4">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_shield" /></svg>
          </div>
          <h3 class="service-promotion__title h5 text-uppercase">Money Back Guarantee</h3>
          <p class="service-promotion__content text-secondary">We return money within 30 days</p>
        </div><!-- /.col-md-4 text-center-->
      </div><!-- /.row -->
    </section><!-- /.service-promotion container -->
  </main>

<?php include 'footer.php'; ?>

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

  <!--------------- Page Overlay -------------->
  <div class="page-overlay"></div><!-- /.page-overlay -->

  <!----------- External JavaScripts ---------->
  <script src="js/plugins/jquery.min.js"></script>
  <script src="js/plugins/bootstrap.bundle.min.js"></script>
  <script src="js/plugins/bootstrap-slider.min.js"></script>
  <!-- <script src="js/plugins/jquery.waypoints.min.js"></script> -->
  <!-- <script src="js/plugins/sticky.min.js"></script> -->
  <script src="js/plugins/swiper.min.js"></script>
  <script src="js/plugins/countdown.js"></script>
  <script src="js/add_to_cart.js"></script>
  <script src="js/indexproduct.js"></script>
  <!-------------- Footer Scripts ------------->
  <script src="js/theme.js"></script>
  
</body>
</html>
