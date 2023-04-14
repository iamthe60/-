<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Astro Motion by TemplateMo</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    
    <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->

  </head>
  <body>
    <video autoplay muted loop id="bg-video">
      <source src="video/refri_video.mp4" type="video/mp4" />
    </video>
    <div class="page-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="cd-slider-nav">
              <nav class="navbar navbar-expand-lg" id="tm-nav">
                <a class="navbar-brand" href="#">輔大食享冰箱</a>

                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbar-supported-content"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div
                  class="collapse navbar-collapse"
                  id="navbar-supported-content"
                >
                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item selected">
                      <a
                        class="nav-link"
                        aria-current="page"
                        href="#0"
                        data-no="1"
                        >首頁</a>
                      <div class="circle"></div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#0" data-no="2">領取物資</a>
                      <div class="circle"></div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#0" data-no="3">關於</a>
                      <div class="circle"></div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php#0" data-no="4">聯絡我們</a>
                      <div class="circle"></div>
                    </li>
                    <li>
                    <li class="nav-item">
                      <a class="nav-link" href="logintest.php">登入啦幹</a>
                      <div class="circle"></div>
                    </li>

                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <?php
      $link = mysqli_connect('localhost','root','12345678','fjufreedge');
      $sql = "select distinct * from login where account = '$account' and password = '$password'";
      $result = mysqli_query($link, $sql);
      ?>
      <div class="container-fluid tm-content-container">

            <div class="mx-auto page-width-2">
              <div class="row">
              <div class="col-md-6 me-0 ms-auto">
                <h2 class="mb-6">LogIn登入</h2>
                <h2 class="mb-6">登入即可更改資料</h2>
              </div>
              </div>
              <div class="row">
                <div class="col-md-6 tm-contact-left">
                  <form action="loginchecktest.php" method="post" class="contact-form">
                    <div class="input-group tm-mb-30">
                      <input name="account" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Account 帳號" required>
                    </div>
                    <div class="input-group tm-mb-30">
                      <input name="password" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Password 密碼" required>
                    </div>
                    <div class="input-group justify-content-start">
                      <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Login">
                    </div>
                  </form>
                </div>
              </div>
            </div>
      </div>

      <div class="container-fluid">
        <footer class="row mx-auto tm-footer">
          <div class="col-md-6 px-0">
            Copyright 2021 Astro Motion Company Limited. All rights reserved.
          </div>
          <div class="col-md-6 px-0 tm-footer-right">
            Designed by
            <a
              rel="sponsored"
              href="https://templatemo.com"
              target="_blank"
              class="tm-link-white"
              >TemplateMo</a
            >
          </div>
        </footer>
      </div>
    </div>
    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/templatemo-script.js"></script>
  </body>
</html>
