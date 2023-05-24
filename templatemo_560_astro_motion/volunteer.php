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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/style2.css" !important />


    <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->


</head>

<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/refri_video.mp4" type="video/mp4" />
    </video>


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




    <div class="container-fluid tm-content-container">
        <ul class="cd-hero-slider mb-0 py-5">
            <li class="px-3" data-page-no="1">
                <div class="page-width-1 page-left">
                    <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container"
                        style="margin-left:35% ;width:100%;">
                        <div class="booking">
                            <div id="event_calendar"></div>
                        </div>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js">
                        </script>
                        <script>
                        $(document).ready(function() {
                            var calendar = $('#event_calendar').fullCalendar({
                                editable: true,
                                header: {
                                    left: 'prev,next today',
                                    center: 'title',
                                    right: 'month,agendaWeek,agendaDay'
                                },
                                events: 'fetch.php',
                                selectable: true,
                                selectHelper: true,
                                select: function(start, end, allDay) {
                                    var title = prompt("Enter Event Name");
                                    if (title) {
                                        var start = $.fullCalendar.formatDate(start,
                                            "Y-MM-DD HH:mm:ss");
                                        var end = $.fullCalendar.formatDate(end,
                                            "Y-MM-DD HH:mm:ss");
                                        $.ajax({
                                            url: "insert.php",
                                            type: "POST",
                                            data: {
                                                title: title,
                                                start: start,
                                                end: end
                                            },
                                            success: function() {
                                                calendar.fullCalendar(
                                                    'refetchEvents');
                                                alert("Event Booked Successfully");
                                            }
                                        })
                                    }
                                },
                                editable: true,
                                eventResize: function(event) {
                                    var start = $.fullCalendar.formatDate(event.start,
                                        "Y-MM-DD HH:mm:ss");
                                    var end = $.fullCalendar.formatDate(event.end,
                                        "Y-MM-DD HH:mm:ss");
                                    var title = event.title;
                                    var id = event.id;
                                    $.ajax({
                                        url: "update.php",
                                        type: "POST",
                                        data: {
                                            title: title,
                                            start: start,
                                            end: end,
                                            id: id
                                        },
                                        success: function() {
                                            calendar.fullCalendar('refetchEvents');
                                            alert('Event Updated Successfully');
                                        }
                                    })
                                },

                                eventDrop: function(event) {
                                    var start = $.fullCalendar.formatDate(event.start,
                                        "Y-MM-DD HH:mm:ss");
                                    var end = $.fullCalendar.formatDate(event.end,
                                        "Y-MM-DD HH:mm:ss");
                                    var title = event.title;
                                    var id = event.id;
                                    $.ajax({
                                        url: "update.php",
                                        type: "POST",
                                        data: {
                                            title: title,
                                            start: start,
                                            end: end,
                                            id: id
                                        },
                                        success: function() {
                                            calendar.fullCalendar('refetchEvents');
                                            alert("Event Updated Successfully");
                                        }
                                    });
                                },

                                eventClick: function(event) {
                                    if (confirm("Are you sure you want to cancel the event?")) {
                                        var id = event.id;
                                        $.ajax({
                                            url: "delete.php",
                                            type: "POST",
                                            data: {
                                                id: id
                                            },
                                            success: function() {
                                                calendar.fullCalendar(
                                                    'refetchEvents');
                                                alert("Event Removed Successfully");
                                            }
                                        })
                                    }
                                },

                            });
                        });
                        </script>


                    </div>
                    <!-- Event Details Modal -->
                    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content rounded-0">
                                <div class="modal-header rounded-0">
                                    <h5 class="modal-title">Schedule Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body rounded-0">
                                    <div class="container-fluid">
                                        <dl>
                                            <dt class="text-muted">Title</dt>
                                            <dd id="title" class="fw-bold fs-4"></dd>
                                            <dt class="text-muted">Description</dt>
                                            <dd id="description" class=""></dd>
                                            <dt class="text-muted">Start</dt>
                                            <dd id="start" class=""></dd>
                                            <dt class="text-muted">End</dt>
                                            <dd id="end" class=""></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="modal-footer rounded-0">
                                    <div class="text-end">
                                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit"
                                            data-id="">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                                            data-id="">Delete</button>
                                        <button type="button" class="btn btn-secondary btn-sm rounded-0"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Event Details Modal -->



</body>

<script src="./js/script.js"></script>

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