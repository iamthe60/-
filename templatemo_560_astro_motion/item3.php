<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['itemname'])) {
   
    $_SESSION['itemname3'] = $_POST['itemname'];

   
    header('Location: ./confirm.php');
    exit;
}
?>

<script>
function submitForm(itemname) {
  
  document.getElementById("itemname").value = itemname;

  
  document.getElementById("myform").submit();
}
</script>
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

         
            <div class="container tm-content-container">

                <div style=" padding-left: 10%;">
                    <h1>第三區</h1>
                    <h4>請點選領取的食物，若沒在這一區領取請點選下一頁</h4>
                </div>


                <div class="mx-auto position-relative gallery-container">
                    <div class="circle intro-circle-1"></div>
                    <div class="circle intro-circle-2"></div>
                    <div class="mx-auto tm-border-top gallery-slider ">
                   


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form id="myform" method="post">
                                    <input type="hidden" id="itemname" name="itemname" value="">
                                    <figure class="effect-julia item" onclick="submitForm('乳製品')">
                                        <img src="img/milk.jpg" alt="Image" />
                                        <figcaption>
                                            <div>
                                                <p>乳製品</p>
                                                
                                            </div>
                                           
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-julia item" onclick="submitForm('茶')">
                                        <img src="img/tea.jpg" alt="Image" />
                                        <figcaption>
                                            <div>
                                                <p>茶</p>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-julia item" onclick="submitForm('果汁')">
                                        <img src="img/juice.jpg" alt="Image" />
                                        <figcaption>
                                            <div>
                                                <p>果汁</p>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-julia item" onclick="submitForm('布丁果凍')">
                                        <img src="img/pudding.jpg" alt="Image" />
                                        <figcaption>
                                            <div>
                                                <p>布丁果凍</p>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>
                                    <figure class="effect-julia item">
                                        <img src="img/x.jpg" alt="Image" />
                                        <figcaption>
                                            <div>
                                                <p>不領取/下一頁</p>
                                            </div>
                                            <a href="college.php"></a>
                                        </figcaption>
                                    </figure>
                                    
                                </form>
                    </div>
                </div>
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