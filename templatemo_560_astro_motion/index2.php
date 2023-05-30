<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <?php
    session_start();
    if ($_SESSION['level'] == "admin") {
    ?>
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
                var options = ["13:00:00", "17:00:00"];
                var firstOption = options[0];
                var secondOption = options[1];

                var selectElement = $("<select></select>");

                for (var i = 0; i < options.length; i++) {
                    var option = $("<option></option>").text(options[i]);
                    selectElement.append(option);
                }

                var dialog = $("<div></div>").append(selectElement);
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
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Removed Successfully");
                        }
                    });
                }
            }
        });
    });
    </script>
    <?php
    } else if ($_SESSION['level'] == "volunteer") {
        $currentUserId = $_SESSION['name'];
    ?>
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
                var options = ["13:00", "17:00"];
                var firstOption = options[0];
                var secondOption = options[1];
                var selectElement = $("<select></select>");

                for (var i = 0; i < options.length; i++) {
                    var option = $("<option></option>").text(options[i]);
                    selectElement.append(option);
                }

                var dialog = $("<div></div>").append(selectElement);

                dialog.dialog({
                    modal: true,
                    title: "選擇時段",
                    buttons: {
                        "確認排班": function() {
                            var currentUserId = "<?php echo $currentUserId; ?>";
                            var selectedOption = selectElement.val();
                            if (selectedOption) {
                                var formattedStart, formattedEnd;

                                if (selectedOption === firstOption) {
                                    formattedStart = moment(start).format(
                                        "Y-MM-DD 13:00:00");
                                    formattedEnd = moment(start).format(
                                        "Y-MM-DD 13:00:00");
                                } else if (selectedOption === secondOption) {
                                    formattedStart = moment(start).format(
                                        "Y-MM-DD 17:00:00");
                                    formattedEnd = moment(start).format(
                                        "Y-MM-DD 17:00:00");
                                }

                                $.ajax({
                                    url: "insert.php",
                                    type: "POST",
                                    data: {
                                        title: currentUserId,
                                        start: formattedStart,
                                        end: formattedEnd
                                    },
                                    success: function(response) {
                                        if (response === "success") {
                                            calendar.fullCalendar(
                                                'refetchEvents');
                                            alert("排班成功");
                                        } else if (response === "已額滿") {
                                            alert("已額滿");
                                        } else {
                                            alert("已經排過該時段");
                                        }
                                    },
                                    error: function() {
                                        alert("在預約事件時發生錯誤，請再試一次");
                                    }
                                });

                                dialog.dialog("close");
                            }
                        },
                        "取消": function() {
                            dialog.dialog("close");
                        }
                    },
                    close: function() {
                        dialog.dialog("destroy").remove();
                    }
                });
            }
        });
    });
    </script>
    <?php
    }
    ?>
</head>

<body>
    <div class="booking">
        <div id="event_calendar">
        </div>
    </div>
</body>

</html>