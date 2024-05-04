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
  
<?php include 'header.php';?>

  <main>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title" style="color:#811331">Account Details</h2>
      <div class="row">
        <div class="col-lg-3">
          <ul class="account-nav">
            <li><a href="account_dashboard.php" class="menu-link menu-link_us-s">Dashboard</a></li>
            <li><a href="account_orders.php" class="menu-link menu-link_us-s">Orders</a></li>
            <li><a href="account_edit.php" class="menu-link menu-link_us-s menu-link_active">Account Details</a></li>
            
            <li><a href="login_register.php" class="menu-link menu-link_us-s">Logout</a></li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__edit">
            <div class="my-account__edit-form">
              <form name="account_edit_form" class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-floating my-3">
                      <input type="text" class="form-control" id="account_first_name" placeholder="First Name" required>
                      <label for="account_first_name">First Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating my-3">
                      <input type="text" class="form-control" id="account_last_name" placeholder="Last Name" required>
                      <label for="account_last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating my-3">
                      <input type="text" class="form-control" id="account_display_name" placeholder="Display Name" required>
                      <label for="account_display_name">Display Name</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating my-3">
                      <input type="email" class="form-control" id="account_email" placeholder="Email Address" required>
                      <label for="account_email">Email Address</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="my-3">
                      <h5 class="text-uppercase mb-0">Password Change</h5>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating my-3">
                      <input type="password" class="form-control" id="account_current_password" placeholder="Current password" required>
                      <label for="account_current_password">Current password</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating my-3">
                      <input type="password" class="form-control" id="account_new_password" placeholder="New password" required>
                      <label for="account_new_password">New password</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating my-3">
                      <input type="password" class="form-control" cfpwd data-cf-pwd="#account_new_password" id="account_confirm_password" placeholder="Confirm new password" required>
                      <label for="account_confirm_password">Confirm new password</label>
                      <div class="invalid-feedback">Passwords did not match!</div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="my-3">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
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
  <script src="js/add_to_cart.js"></script>
  <!-------------- Footer Scripts ------------->
  <script src="js/theme.js"></script>

</body>

</html>