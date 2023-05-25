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
                var options = [
                    moment().set({
                        hour: 14,
                        minute: 0,
                        second: 0
                    }).format("Y-MM-DD HH:mm:ss"),
                    moment().set({
                        hour: 16,
                        minute: 0,
                        second: 0
                    }).format("Y-MM-DD HH:mm:ss")
                ]; // 可選的選項，直接設定為時間的格式

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
                            var selectedOption = selectElement.val();
                            if (selectedOption) {
                                $.ajax({
                                    url: "insert.php",
                                    type: "POST",
                                    data: {
                                        title: selectedOption,
                                        start: selectedOption,
                                        end: selectedOption
                                    },
                                    success: function(response) {
                                        if (response === "success") {
                                            calendar.fullCalendar(
                                                'refetchEvents');
                                            alert(
                                                "Event Booked Successfully"
                                                );
                                        } else {
                                            alert(
                                                "Failed to book event. Please try again."
                                                );
                                        }
                                    },
                                    error: function() {
                                        alert(
                                            "An error occurred while booking the event. Please try again."
                                            );
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
                    })
                }
            }
        });
    });
    </script>
</head>

<body>
    <div class="booking">
        <div id="event_calendar"></div>
    </div>
</body>

</html>