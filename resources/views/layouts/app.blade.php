<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- BS Stepper -->
        <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
        <!-- dropzonejs -->
        <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/adminlte.min.css">

        {{-- change.php --}}
        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/img/favicon1title.png">
        <!-- Styles -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/font-awesome/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="assets/app/css/app.css" type="text/css">
        {{-- <link rel="stylesheet" href="assets/app/css/edit.css" type="text/css"> --}}
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('layouts.navigation');
            @include('layouts.sidebar');

            <!-- Page Content -->
            <main>
                @yield('main-content');
            </main>

            <footer>
                @include('layouts.footer');
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here --></aside>
            <!-- /.control-sidebar -->
        </div>
        
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- jquery-validation -->
        <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="../plugins/moment/moment.min.js"></script>
        <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- BS-Stepper -->
        <script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
        <!-- dropzonejs -->
        <script src="../plugins/dropzone/min/dropzone.min.js"></script>
        <!-- Page specific script -->
        <script>
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    // title: 'Toast Title',
                    // subtitle: 'Subtitle',
                    body: ' An email will be sent to you when the list is ready for download.'
                })
            });
            $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()
        
            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            $('#reservationdate1').datetimepicker({
                format: 'L'
            });
            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
        
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
                },
                function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )
        
            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })
        
            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
        
            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()
        
            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })
        
            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        
            })
            // BS-Stepper Init
            document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
            })
        
            // DropzoneJS Demo Code Start
            Dropzone.autoDiscover = false
        
            // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
            var previewNode = document.querySelector("#template")
            previewNode.id = ""
            var previewTemplate = previewNode.parentNode.innerHTML
            previewNode.parentNode.removeChild(previewNode)
        
            var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
            })
        
            myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
            })
        
            // Update the total progress bar
            myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
            })
        
            myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
            })
        
            // Hide the total progress bar when nothing's uploading anymore
            myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
            })
        
            // Setup the buttons for all transfers
            // The "add files" button doesn't need to be setup because the config
            // `clickable` has already been specified.
            document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
            }
            document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
            }
            // DropzoneJS Demo Code End
        </script>
        <script>

            function showMoreFilter() {
            console.log(document.getElementById('show-more').style.display);
            if (document.getElementById('show-more').style.display == "none") {
                document.getElementById('show-more').style.display = "block"
                document.getElementById('create-ticket').style.display = "none"
            }
            else {
                document.getElementById('show-more').style.display = "none"
            }
            }

            function createTicket() {
            console.log(document.getElementById('create-ticket').style.display);
            if (document.getElementById('create-ticket').style.display == "none") {
                document.getElementById('create-ticket').style.display = "block"
                document.getElementById('show-more').style.display = "none"
            }
            // else {
            //   document.getElementById('create-ticket').style.display="none"
            // }
            }

            function cancelCreateTicket() {
            document.getElementById('create-ticket').style.display = "none"
            }

            function CreateTicket() {
            var form = document.getElementById('createTicket')
            const name = form.elements['name'].value;
            const email = form.elements['email'].value;
            const subject = form.elements['subject'].value;

            if (name == "" && email == "" && subject == "") {
                document.getElementById('required-fields').style.display = "block"

            }
            else {
                // document.getElementById('message-table').style.display = "block"

                // document.getElementById('modal-create-ticket').style.display = "none"
                // document.getElementById('noMessage').style.display = "none"
                // document.getElementById('crt-tic-btn').innerHTML.replace = "none"
                location.replace("C:/VuejsProjects/chat-demo/pages/contacts.html")
            }

            }

            function closeticketDetails() {
            document.getElementById('ticket').style.display = "none"
            document.getElementById('ticket-table').style.display = "block"
            }

            function openTicketDetails() {
            document.getElementById('ticket').style.display = "block"

            // document.getElementById('create-ticket').style.display = "none"
            document.getElementById('ticket-table').style.display = "none"
            }
            function sendMessage() {
            var message = document.getElementById("typing-box").value;
            // var html = '<div class="message-box my-message-box">' +
            // 				'<div class="message my-message"> ' + message + ' </div>' +
            // 				'<div class="separator"></div>' +
            // 			'</div>';
            var today = new Date();

            if (message == "") {

            }
            else {
                var time = today.getHours() + ":" + today.getMinutes();
                var html = '<div class="direct-chat-infos clearfix">' +
                '<div class="direct-chat-name float-left">' + message + '</div>' +
                '<div class="direct-chat-timestamp float-right">' + time + '</div>' +
                '</div>'

                document.getElementById("message-area").innerHTML += html;
                document.getElementById("typing-box").value = "";

                console.log("message is", message, time)
            }


            // socket.emit('codeboard-message', message);
            }

            function sendNote() {
            var note = document.getElementById("note").value;
            // var html = '<div class="message-box my-message-box">' +
            // 				'<div class="message my-message"> ' + message + ' </div>' +
            // 				'<div class="separator"></div>' +
            // 			'</div>';
            var today = new Date();

            if (note == "") {
            }
            else {
                var time = today.getHours() + ":" + today.getMinutes();
                var html = '<div class="direct-chat-infos clearfix">' +
                '<div class="direct-chat-name note float-left">' + note + '</div>' +
                '<div class="direct-chat-timestamp float-right">' + time + '</div>' +
                '</div>'

                document.getElementById("message-area").innerHTML += html;
                document.getElementById("note").value = "";

                console.log("message is", message, time)
            }

            function search() {
                location.replace("C:/VuejsProjects/chat-demo/pages/messaging.html")
            }
            function reset() {
                location.replace("C:/VuejsProjects/chat-demo/pages/messaging.html")
            }
        
            // socket.emit('codeboard-message', message);
            }
            function backtoTicketTable() {
                document.getElementById('ticket-table').style.display = "block"
                document.getElementById('ticket').style.display = "none"
            }
            function removecontact() {
            location.replace("C:/VuejsProjects/chat-demo/pages/contacts.html")
            }
        </script>

        <script>
            var inputBox = document.getElementById('agent');
            
            
            
            inputBox.onkeyup = function(){
                console.log(inputBox.value.length)
                if(inputBox.value.length != 0) {
                    document.getElementById("showorhide").innerHTML = '<i class="fas fa-window-close" onClick="romoveText()"></i>';
                }
                else {
                    document.getElementById("showorhide").innerHTML = '';
                }
            }
            
            function romoveText() {
                console.log("removetest")
                document.getElementById('agent').value = "";
                document.getElementById("showorhide").innerHTML = '';
            }
                    </script>
                    <script>
                $(function () {
                $.validator.setDefaults({
                    submitHandler: function () {
                    alert( "Form successful submitted!" );
                    }
                });
                $('#quickForm').validate({
                    rules: {
                        groupName: {
                        required: true,
                        groupName: true,
                    },
                    groupOrder: {
                        required: true,
                    },
                
                    },
                    messages: {
                    group: {
                        groupName: "Please enter group name",
                        email: "Please enter a vaild email address"
                    },
                    groupOrder: {
                        required: "Please Select Order"
                        // minlength: "Your password must be at least 5 characters long"
                    },
                    terms: "Please accept our terms"
                    },
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                    }
                });
            });
        </script>

        <!-- REQUIRED SCRIPTSchange.php -->
        <!-- Script -->
        <script type="text/javascript" src="assets/app/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/app/js/superfish.js"></script>
        <script type="text/javascript" src="assets/app/js/jquery.mobilemenu.js"></script>
        <script type="text/javascript" src="assets/app/js/autocomplete.js"></script>
        <script type="text/javascript" src="assets/app/js/app.js"></script>
        <script>
          ClassicEditor
              .create( document.querySelector( '#editor1' ) )
              .then( editor => {
                  console.log( editor );
              } )
              .catch( error => {
                  console.error( error );
              } );
        </script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {
              dropdownContainer: document.body,
              utilsScript: "build/js/utils.js",
              });
        </script>

        <style>
            .center {
                display: flex;
                -webkit-box-direction: normal;
                -webkit-box-orient: vertical;
                -moz-box-direction: normal;
                -moz-box-orient: vertical;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 100%;
                margin: 0 auto;
                padding: 100px 30px 10px;
                max-width: 560px;
                box-sizing: border-box;
                overflow: hidden;
            }

            .fas-close-icon {
                height: 28px;
                line-height: 28px;
            }

            .align-center {
                text-align: center;
            }

            .bg-color {
                background-color: white;
                padding-top: 4px;
            }

            .agent-status-container {
                height: 30px;
                line-height: 32px;
                text-align: center;
                display: inline-block;
                vertical-align: top;
            }

            .agent-status.online {
                background: #54ce3c;
                display: inline-block;
                border-radius: 50%;
                margin-right: 7px;
                padding: 5px;
                width: auto !important;
            }

            .line {
                width: 100%;
                height: 3px;
                position: absolute;
                border-top: 1px solid #ddd;
                width: 100%;
                top: .6rem;
                margin: 0;
            }
            .line1 {
                width: 100%;
                height: 3px;
                /* position: absolute; */
                border-top: 1px solid #ddd;
                width: 100%;
                top: .6rem;
                margin: 0;
            }
            .date {
                color: #555459;
                width: 100px;
                text-align: center;
                margin: 0 auto;
                background: #fff;
                padding: 0 1rem;
                display: inline-block;
                position: relative;
            }

            .date-container {
                position: relative;
                text-align: center;
                background: #fff;
                width: 100%;
            }

            .align-center {
                text-align: center;
            }
            .direct-chat-primary .right>.direct-chat-text {
                background-color: #007bff;
                border-color: #007bff;
                color: #fff;
                text-align: right;
                width: fit-content;
                align-items: revert;
                float: right;
            }

            .right .direct-chat-text {
                margin-left: 0;
                margin-right: 10px;
            }

            .direct-chat-text {
                border-radius: .3rem;
                background-color: #d2d6de;
                border: 1px solid #d2d6de;
                color: #444;
                margin: 5px 0 0 50px;
                padding: 5px 10px;
                position: relative;
                width: fit-content;
            }

            .direct-chat-messages {
                -webkit-transform: translate(0,0);
                transform: translate(0,0);
                height: 475px;
                overflow: auto;
                padding: 10px;
            }

            .conversation-block {
                padding: 10px 0;
                /* border-top: 1px dashed #d3d3d3; */
                white-space: pre-line;
            }

            .conversation-content {
                margin-right: 55px;
                word-wrap: break-word;
                padding-bottom: 4px;
            }

            .note {
                color: #007bff
            }
            .alert-container {
                padding-top: 60px;
                margin-top: -60px;
            }
                    
            #input-container {
                position: relative;
            }

            #input-container > i {
                position: absolute;
                top: 12px;
                left: 15px;
                color: #868c92;
            }

            #input-container > a {
                position: absolute;
                top: 7px;
                right: 4px;
                color: #868c92;
            }

            #input-container > input {
                padding-left: 40px;
            }
            
            .property-box {
                height: 40px;
                width: 40px;
                display: inline-block;
                border-radius: 3px;
                line-height: 40px;
                text-align: center;
                /* font-size: 20px; */
                text-transform: capitalize;
                font-weight: 700;
                flex: none;
                position: relative;
            }
            .vl {
                border-left: 2px solid rgba(0,0,0,.5);
                height: 100%;
                position: absolute;
                left: 15%;
                margin-left: -3px;
                top: 0;
            }

            /* change.php */
            .ck.ck-editor__editable_inline{
                height: 200px !important;
            }
        </style>
    </body>
</html>
