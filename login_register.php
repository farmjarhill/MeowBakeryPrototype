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
  <link rel="stylesheet" href="css/plugins/jquery.fancybox.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

  <!------------- Document Title -------------->
  <title>Meo Bakery | Delicious and Well-known Bakery</title>

</head>

<body>
  
<?php include 'special-header.php';?>

  <main>
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
      <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab" href="#tab-item-login" role="tab" aria-controls="tab-item-login" aria-selected="true">Login</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="register-tab" data-bs-toggle="tab" href="#tab-item-register" role="tab" aria-controls="tab-item-register" aria-selected="false">Register</a>
        </li>
      </ul>
      <div class="tab-content pt-2" id="login_register_tab_content">
        <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
          <div class="login-form">
            <form name="login-form" class="needs-validation" novalidate>
              <div class="form-floating mb-3">
                <input name="login_email" type="email" class="form-control form-control_gray" id="customerNameEmailInput" placeholder="Email address *" required>
                <label for="customerNameEmailInput">Email address *</label>
              </div>
    
              <div class="pb-3"></div>
    
              <div class="form-floating mb-3">
                <input name="login_password" type="password" class="form-control form-control_gray" id="customerPasswodInput" placeholder="Password *" required>
                <label for="customerPasswodInput">Password *</label>
              </div>
    
              <div class="d-flex align-items-center mb-3 pb-2">
                <div class="form-check mb-0">
                  <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label text-secondary" for="flexCheckDefault">Remember me</label>
                </div>
                <a href="reset_password.php" class="btn-text ms-auto">Lost password?</a>
              </div>
    
              <button class="btn btn-primary w-100 text-uppercase" type="submit" >Log In</button>
    
              <div class="customer-option mt-4 text-center">
                <span class="text-secondary">No account yet?</span>
                <a href="#register-tab" class="btn-text js-show-register">Create Account</a>
              </div>
            </form>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
          <div class="register-form">
            <form name="register-form" class="needs-validation" novalidate>
              <div class="form-floating mb-3">
                <input name="register_username" type="text" class="form-control form-control_gray" id="customerNameRegisterInput" placeholder="Username" required>
                <label for="customerNameRegisterInput">Username</label>
              </div>
    
              <div class="pb-3"></div>

              <div class="form-floating mb-3">
                <input name="register_email" type="email" class="form-control form-control_gray" id="customerEmailRegisterInput" placeholder="Email address *" required>
                <label for="customerEmailRegisterInput">Email address *</label>
              </div>
    
              <div class="pb-3"></div>
    
              <div class="form-floating mb-3">
                <input name="register_password" type="password" class="form-control form-control_gray" id="customerPasswodRegisterInput" placeholder="Password *" required>
                <label for="customerPasswodRegisterInput">Password *</label>
              </div>
    
              <div class="d-flex align-items-center mb-3 pb-2">
                <p class="m-0">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
              </div>
    
              <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="mb-5 pb-xl-5"></div>
  
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

  <!--------------- Page Overlay -------------->
  <div class="page-overlay"></div><!-- /.page-overlay -->

  <!----------- External JavaScripts ---------->
  <script src="js/plugins/jquery.min.js"></script>
  <script src="js/plugins/bootstrap.bundle.min.js"></script>
  <script src="js/plugins/bootstrap-slider.min.js"></script>
  
  <script src="js/plugins/swiper.min.js"></script>
  <script src="js/plugins/countdown.js"></script>
  <script src="js/plugins/jquery.fancybox.js"></script>

  <!-------------- Footer Scripts ------------->
  <script src="js/theme.js"></script>

</body>
</html>