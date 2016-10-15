<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صندوق التكافل</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap_ar.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style_ar.css" rel="stylesheet">
    <!-- javascript -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    @yield('head')
  </head>
  <body>

    <!-- header section -->
    <header>
      <nav class="navbar top-nav" style="background-color: #333;">
        <div class="container">

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div>
            <ul class="nav navbar-nav nav-social">
              <input type="search" name="name" placeholder="بحث عن معلومات">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">اللغه <img src="images/lang.jpg" alt="" /></a></li>
              <li><a href="#">info@example.com <i class="fa fa-mail"></i></a></li>
              <li><a href="#">+0123456789 <i class="fa fa-pnone"></i></a></li>
              <li><a href="#">دخول اولياء الامور / الطلاب <i class="fa fa-user"></i></a></li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <section class="mdl-nav">
        <nav class="navbar mdl-nav wow fadeInDown" data-wow-duration="1s" data-wow-offset="150">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand"><img src="images/logo.png" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/">الرئيسيه</a></li>
                <li><a href="/about">نبذه عنا</a></li>
                <li><a href="#">التسجيل</a></li>
                <li><a href="/Schedule">ركن اولياء الامور</a></li>
                <li><a href="/contact">اتصل بنا</a></li>
                <li><a href="/news">اخبارنا</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      </section>

    </header>



@yield('content')

<!-- footer -->
<footer>
    <div class="container">
        <div class="cont">
          <div class="mobile">
            <img src="images/ios.png" alt="" />
            <img src="images/android.png" alt="" />
          </div>
          <ul class="navbar-nav nav social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
          </ul>
          <div class="small-logo">
            <img src="images/small-logo.png" alt="" />
          </div>
          <div class="copyr">
             ©2016 ALYOM CREATIVE AGENCY. ALL RIGHTS RESERVED
            <img src="images/alyoum-logo.png" alt="" />
          </div>
        </div>
    </div>
</footer>

 <script src="js/main.js"></script>

@yield('script')

</body>
</html>
