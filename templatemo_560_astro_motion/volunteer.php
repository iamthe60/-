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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">


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
                 if($_SESSION['level']=="admin"){
                     ?>
                                    <li class="nav-item selected">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
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
                 else if($_SESSION['level']=="volunteer"){
                 ?>
                                    <li class="nav-item ">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                            style="padding-left: 85px; padding-right: 85px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="inventory.php" data-no="6"
                                            style="padding-left: 85px; padding-right: 85px">庫存查詢</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item selected">
                                        <a class="nav-link" href="volunteer.php" data-no="4"
                                            style="padding-left: 85px; padding-right: 85px">志工專區</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logouttest.php"
                                            style="padding-left: 85px; padding-right: 85px">登出</a>
                                        <div class="circle"></div>
                                    </li>
                                    <?php
                                    }
                                   
                 
                 else{
                 ?>
                                    <li class="nav-item ">
                                        <a class="nav-link" aria-current="page" href="index.php" data-no="1"
                                            style="padding-left: 85px; padding-right: 85px;padding-right: 85px">首頁</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="inventory.php" data-no="6"
                                            style="padding-left: 85px; padding-right: 85px">庫存查詢</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item selected">
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
        </div>



        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div class="container-fluid tm-content-container">


            <div class="mx-auto page-width-2">
                <div class="row justify-content-evenly">

                    <h2 class="heading-section">班表填寫/查詢</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content w-100">
                        <div class="calendar-container">
                            <div class="calendar">
                                <div class="year-header">
                                    <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                    <span class="year" id="label"></span>
                                    <span class="right-button fa fa-chevron-right" id="next"> </span>
                                </div>
                                <table class="months-table w-100">
                                    <tbody>
                                        <tr class="months-row">
                                            <td class="month">Jan</td>
                                            <td class="month">Feb</td>
                                            <td class="month">Mar</td>
                                            <td class="month">Apr</td>
                                            <td class="month">May</td>
                                            <td class="month">Jun</td>
                                            <td class="month">Jul</td>
                                            <td class="month">Aug</td>
                                            <td class="month">Sep</td>
                                            <td class="month">Oct</td>
                                            <td class="month">Nov</td>
                                            <td class="month">Dec</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="days-table w-100">
                                    <td class="day">Sun</td>
                                    <td class="day">Mon</td>
                                    <td class="day">Tue</td>
                                    <td class="day">Wed</td>
                                    <td class="day">Thu</td>
                                    <td class="day">Fri</td>
                                    <td class="day">Sat</td>
                                </table>
                                <div class="frame">
                                    <table class="dates-table w-100">
                                        <tbody class="tbody">
                                        </tbody>
                                    </table>
                                </div>
                                <button class="button" style="background-color:#99FF66 !important;" id="add-button">Add
                                    Event</button>
                            </div>
                        </div>
                        <div class="events-container" style="background-color:#99FF66 !important;">
                        </div>
                        <div class="dialog" id="dialog">
                            <h2 class="dialog-header"> Add New Event </h2>
                            <form class="form" id="form">
                                <div class="form-container" align="center" style="background-color:#99FF66 !important;">
                                    <label class="form-label" id="valueFromMyButton" for="name">Event
                                        name</label>
                                    <input class="input" type="text" id="name" maxlength="36">
                                    <label class="form-label" id="valueFromMyButton" for="count">Number
                                        of people to invite</label>
                                    <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
                                    <input type="button" value="Cancel" class="button" id="cancel-button">
                                    <input type="button" value="OK" class="button button-white" id="ok-button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </div>
    <div class="row">
        <div class="col-md-8 tm-contact-left">
            <form action="insert_v.php" method="GET" class="contact-form">

                <!-- <div class="input-group tm-mb-30">
                                <input name="time" type="time"
                                    class="form-control rounded-0 border-top-0 border-end-0 border-start-0"
                                    placeholder="Time" required />
                            </div> -->
                <div>

                </div>




            </form>
        </div>


    </div>
    </div>






    </div>
    <div class="container-fluid">
        <footer class="row mx-auto tm-footer">
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