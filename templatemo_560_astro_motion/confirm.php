<?php
session_start();
$itemname1 = $_SESSION['itemname1']; //檢索 item1 的名稱
$itemname2 = $_SESSION['itemname2']; //檢索 item2 的名稱
$itemname3 = $_SESSION['itemname3']; //檢索 item3 的名稱

if (isset($_POST['selected_item'])) {
    $_SESSION['selected_item'] = $_POST['selected_item'];
    header('Location: count.php');
    exit;
}

$itemname = $_SESSION['selected_item'];
?>
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
                 if($_SESSION['level']=="admin"){
                     ?>
                                    <li class="nav-item selected">
                                        <a class="nav-link" aria-current="page" href="#0" data-no="1"
                                            style="padding-left: 50px; padding-right: 50px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
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
                                        <a class="nav-link" href="volunteerlogin.php" data-no="4"
                                            style="padding-left: 50px; padding-right: 50px">志工專區</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logouttest.php"
                                            style="padding-left: 50px; padding-right: 50px">登出</a>
                                        <div class="circle"></div>
                                    </li>
                                    <?php
                 } 
                 else{
                 ?>
                                    <li class="nav-item selected">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                            style="padding-left: 85px; padding-right: 85px;padding-right: 85px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="inventory.php" data-no="6"
                                            style="padding-left: 85px; padding-right: 85px">庫存查詢</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="volunteerlogin.php" data-no="4"
                                            style="padding-left: 85px; padding-right: 85px">志工專區</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php" data-no="5"
                                            style="padding-left: 85px; padding-right: 85px">登入</a>
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
            <div class="container-fluid tm-content-container">

            <div style=" padding-left: 10%;">
                <h1>確認領取物資</h1>
                
            </div>
            <div class="mx-auto position-relative gallery-container tm-border-bottom">
                <div class="circle intro-circle-1"></div>
                <div class="circle intro-circle-2"></div>
                <div class="mx-auto tm-border-top gallery-slider ">
                <div class="intro-left tm-bg-dark content-pad">
                <p>You have selected the following items:</p>
                <ul>
                    <li>Item Name: <?php echo $itemname1; ?></li>
                    <li>Item Name: <?php echo $itemname2; ?></li>
                    <li>Item Name: <?php echo $itemname3; ?></li>
                </ul>
                <p>If this information is correct, please click the "Confirm" button to proceed.</p>
                <form action="count.php" method="post">
                <?php 
                $selected_items = $itemname1 . "," . $itemname2 . "," . $itemname3;
                ?>
                <input type="hidden" name="selected_item" value="<?php echo $selected_items; ?>">
                <input type="submit" name="confirm" value="Confirm">
                </form>
                <p>If you want to make changes, please click the "Back" button to return to the previous page.</p>
                <form action="item.php" method="post">
                <input type="submit" name="back" value="Back">

                <div class="circle intro-circle-3"></div>
                <div class="circle intro-circle-4"></div>
                </li>

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

