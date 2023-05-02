<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>輔大食享冰箱</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


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
                            <a class="navbar-brand" href="index.php">輔大食享冰箱</a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-supported-content">
                                <ul class="navbar-nav mb-2 mb-lg-0">

                                    <?php
                                    session_start();
                                    if ($_SESSION['level'] == "admin") {
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                                style="padding-left: 50px; padding-right: 50px">首頁</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item  selected">
                                            <a class="nav-link" href="item.php" data-no="2"
                                                style="padding-left: 50px; padding-right: 50px">領取物資</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="upload.php" data-no="3"
                                                style="padding-left: 50px; padding-right: 50px">上架/下架</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="volunteer.php" data-no="4"
                                                style="padding-left: 50px; padding-right: 50px">加入我們</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="logouttest.php"
                                                style="padding-left: 50px; padding-right: 50px">登出</a>
                                            <div class="circle"></div>
                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                                style="padding-left: 130px; padding-right: 130ox;padding-right: 130px">首頁</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="volunteer.php" data-no="4"
                                                style="padding-left: 130px; padding-right: 130px">聯絡我們</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php" data-no="5"
                                                style="padding-left: 130px; padding-right: 130px">登入</a>
                                            <div class="circle"></div>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <div class="container-fluid tm-content-container">


            <div class="mx-auto position-relative gallery-container tm-border-bottom">
                <div class="circle intro-circle-1"></div>
                <div class="circle intro-circle-2"></div>
                <div class="mx-auto tm-border-top gallery-slider ">

                    <!-- 第三區 -->
                    <figure class="effect-julia item">
                        <img src="img/milk.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>乳製品</p>
                                </a>
                            </div>
                            <!-- <a href="item2.php"></a> -->
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item">
                        <img src="img/tea.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>茶</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item">
                        <img src="img/juice.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>果汁</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item">
                        <img src="img/pudding.jpg" alt="Image" />
                        <figcaption>
                            <div>
                                <p>布丁果凍</p>
                            </div>
                        </figcaption>
                    </figure>
                    <figure class="effect-julia item">
                        <img src="data:image/png;base64,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"
                            alt="Image" />
                        <figcaption>
                            <div>
                                <p>不領取/下一頁</p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="circle intro-circle-3"></div>
                    <div class="circle intro-circle-4"></div>
                    </li>

                </div>
                <div class="container-fluid">
                    <footer class="row mx-auto tm-footer">
                        <div class="col-md-6 px-0">
                            Copyright 2021 Astro Motion Company Limited. All rights reserved.
                        </div>
                        <div class="col-md-6 px-0 tm-footer-right">
                            Designed by
                            <a rel="sponsored" href="https://templatemo.com" target="_blank"
                                class="tm-link-white">TemplateMo</a>
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