<div class="page-footer">
    <div class="page-footer-inner"> 2021 &copy; By
        <a href="https://radixtouch.com/cdn-cgi/l/email-protection#8cfee9e8fff8edfef8e4e9e1e9ccebe1ede5e0a2efe3e1" target="_top" class="makerCss">Ngoma digitech</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->
<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo site_url("resources/assets_admin/plugins/jquery/jquery.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/popper/popper.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/jquery-blockui/jquery.blockui.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.js")?>"></script>
<!-- bootstrap -->
<script src="<?php echo site_url("resources/assets_admin/plugins/bootstrap/js/bootstrap.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/sparkline/jquery.sparkline.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/pages/sparkline/sparkline-data.js")?>"></script>
<!-- Common js-->
<script src="<?php echo site_url("resources/assets_admin/js/app.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/layout.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/theme-color.js")?>"></script>
<!-- material -->
<script src="<?php echo site_url("resources/assets_admin/plugins/material/material.min.js")?>"></script>
<!--apex chart-->
<script src="<?php echo site_url("resources/assets_admin/plugins/apexcharts/apexcharts.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/pages/chart/chartjs/home-data.js")?>"></script>
<!-- summernote -->
<script src="<?php echo site_url("resources/assets_admin/plugins/summernote/summernote.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/pages/summernote/summernote-data.js")?>"></script>

<script src="<?php echo site_url("resources/assets_admin/plugins/datatables/jquery.dataTables.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js")?>"></script>
<script src="<?php echo site_url("resources/assets_admin/js/pages/table/table_data.js")?>"></script>

<script src='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/core/main.min.js")?>'></script>
	<script src='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/interaction/main.min.js")?>'></script>
	<script src='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/daygrid/main.min.js")?>'></script>
	<script src='<?php echo site_url("resources/assets_admin/plugins/fullcalendar/packages/timegrid/main.min.js")?>'></script>
    
<?php if(isset($time)):?>
    <script>
        let calendar;
        var Draggable = FullCalendarInteraction.Draggable;
        let date_picker;

        var containerEl = document.getElementById("external-events");
        var checkbox = document.getElementById("drop-remove");
        var addEvent = document.getElementById("add-event");
        var editEvent = document.getElementById("edit-event");
        var addEventTitle = document.getElementById("addEventTitle");
        var editEventTitle = document.getElementById("editEventTitle");

        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var year = date.getFullYear();

        (this.$eventModal = $("#event-modal")),
        new Draggable(containerEl, {
            itemSelector: ".fc-event",
            eventData: function (eventEl) {
            return {
                title: eventEl.innerText,
                stick: true,
                className: eventEl.dataset.class,
            };
            },
        });

        $(document).ready(function () {
        initCalendar();
        addEvetClick();
        editEvetClick();
        flatpickr("#starts-at", {
            enableTime: true,
            allowInput: true,
            dateFormat: "Y-m-d H:i",
            onOpen: function (selectedDates, dateStr, instance) {
            instance.setDate(instance.input.value, false);
            },
        });
        flatpickr("#ends-at", {
            enableTime: true,
            allowInput: true,
            dateFormat: "Y-m-d H:i",
            onOpen: function (selectedDates, dateStr, instance) {
            instance.setDate(instance.input.value, false);
            },
        });
        });

        function initCalendar() {
        var calendarEl = $("#calendar").get(0);
        calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ["interaction", "dayGrid", "timeGrid"],
            header: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay",
            },
            editable: false,
            droppable: true,
            navLinks: true,
            eventLimit: true,
            weekNumberCalculation: "ISO",
            displayEventEnd: true,
            lazyFetching: true,
            selectable: true,
            eventMouseEnter: function (info) {
            $(info.el).attr("id", info.event.id);

            $("#" + info.event.id).popover({
                template:
                '<div class="popover" role="tooltip"><div class="arrow"></div><a href="https://googgle.com"><h4 class="popover-header"></h4></a><div class="popover-body"></div></div>',
                title: info.event.title,
                content: info.event.extendedProps.description,
                placement: "top",
                html: true,
            });
            $("#" + info.event.id).popover("show");
            $(".popover .popover-header").css(
                "color",
                $(info.el).css("background-color")
            );
            },
            eventMouseLeave: function (info) {
            $("#" + info.event.id).popover("hide");
            },
            drop: function (info) {
            if (checkbox.checked) {
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
            },
            views: {
            dayGridMonth: {
                eventLimit: 3,
            },
            },

            events: events(),

            select: function (start, end) {
            addEvent.style.display = "block";
            editEvent.style.display = "none";
            addEventTitle.style.display = "block";
            editEventTitle.style.display = "none";

            clearModalForm();
            $(".modal").modal("show");
            },
            eventClick: function (info) {
            addEvent.style.display = "none";
            editEvent.style.display = "block";
            addEventTitle.style.display = "none";
            editEventTitle.style.display = "block";

            let startDate = moment(info.event.start).format("YYYY-MM-DD HH:mm:ss");
            let endDate = moment(info.event.end).format("YYYY-MM-DD HH:mm:ss");

            // console.log(info.event.extendedProps.description);
            $(".modal").modal("show");
            $(".modal").find("#id").val(info.event.id);
            $(".modal").find("#title").val(info.event.title);
            $(".modal").find("#starts-at").val(startDate);
            $(".modal").find("#ends-at").val(endDate);
            $("#categorySelect").val(info.event.classNames[0]);
            $(".modal")
                .find("#eventDetails")
                .val(info.event.extendedProps.description);
            },
        });

        calendar.render();
        }

        function clearModalForm() {
        var input = document.querySelectorAll('input[type="text"]');
        var textarea = document.getElementsByTagName("textarea");
        for (i = 0; i < input.length; i++) {
            input[i].value = "";
        }
        for (j = 0; j < textarea.length; j++) {
            textarea[j].value = "";
            i;
        }
        }

        function addEvetClick() {
        $("#add-event").on("click", function (event) {
            var title = $("#title").val();
            var eventDetails = document.getElementById("eventDetails").value;
            var category = $("#categorySelect").find(":selected").val();
            var randomID = randomIDGenerate(
            10,
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
            );
            calendar.addEvent({
            id: randomID,
            title: title,
            start: $("#starts-at").val(),
            end: $("#ends-at").val(),
            className: category,
            description: eventDetails,
            });
            // Clear modal inputs
            $(".modal").find("input").val("");
            // hide modal
            $(".modal").modal("hide");
        });
        }

        function editEvetClick() {
        $("#edit-event")
            .off("click")
            .on("click", function (event) {
            event.preventDefault();
            var category = $("#categorySelect").find(":selected").val();

            var event2 = calendar.getEventById(document.getElementById("id").value);

            var eventDetails = document.getElementById("eventDetails").value;
            var category = $("#categorySelect").find(":selected").val();

            event2.setExtendedProp("id", document.getElementById("id").value + "");
            event2.setProp("title", document.getElementById("title").value + "");
            event2.setStart(
                moment(document.getElementById("starts-at").value).format(
                "YYYY-MM-DD HH:mm:ss"
                )
            );
            event2.setEnd(
                moment(document.getElementById("ends-at").value).format(
                "YYYY-MM-DD HH:mm:ss"
                )
            );
            event2.setProp("classNames", category);
            event2.setExtendedProp("description", eventDetails);
            $(".modal").modal("hide");
            });
        }
        function randomIDGenerate(length, chars) {
        var result = "";
        for (var i = length; i > 0; --i)
            result += chars[Math.round(Math.random() * (chars.length - 1))];
        return result;
        }

        function events() {
            
            return <?php echo $value?>
        }

    </script>
    <?php endif; ?>
</body>


<!-- Mirrored from radixtouch.com/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 11:22:39 GMT -->
</html>