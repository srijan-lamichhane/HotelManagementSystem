<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ URL::to('admin/assets/js/jquery-3.5.1.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/js/jquery-ui.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/js/popper.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/js/bootstrap.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/plugins/raphael/raphael.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/plugins/morris/morris.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/js/chart.morris.js')}} "></script>
<script src="{{ URL::to('admin/assets/js/script.js')}} "></script>

<script src="{{ URL::to('admin/assets/js/moment.min.js')}} "></script>
<script src="{{ URL::to('admin/assets/js/bootstrap-datetimepicker.min.js')}} "></script>


<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Include datetimepicker JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<!-- script for calander -->
<script src="{{ URL::to('admin/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{ URL::to('admin/assets/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js'></script>






<script>
    $(document).ready(function() {
        $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD', // Set the desired date format
            icons: {
                time: 'fas fa-clock', // Specify the icon for the time picker
                up: 'fas fa-chevron-up',
                down: 'fas fa-chevron-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'fas fa-calendar-check-o',
                clear: 'fas fa-trash',
                close: 'fas fa-times'
            }
        });

        $('#datetimepicker3').datetimepicker({
            format: 'hh:mm A', // Set the desired time format
            icons: {
                time: 'fas fa-clock', // Specify the icon for the time picker
                up: 'fas fa-chevron-up',
                down: 'fas fa-chevron-down',
                clear: 'fas fa-trash',
                close: 'fas fa-times'
            }
        });
    });

    $(document).ready(function() {
        // When a file is selected, update the label text
        $('.custom-file-input').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass('selected').html(fileName);
        });
    });
</script>