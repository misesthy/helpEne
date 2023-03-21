<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://support.faveohelpdesk.com/themes/default/common/images/favicon.ico" rel="shortcut icon">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <style>

            .flatpickr-calendar.inline {
              height: 330px !important;
              width: 312px !important;
            }
        
            .settingiconblue {
              padding-top: 0.5rem;
              padding-bottom: 0.5rem;
            }
            .settingdivblue {
              width: 80px;
              height: 80px;
              margin: 0 auto;
              text-align: center;
              border: 5px solid #C4D8E4;
              border-radius: 100%;
            }
            .settingdivblue span {
              margin-top: 2px;
              margin-left: -5px;
            }
        
            a {
              color: #3c8dbc;
              text-decoration: none;
              background-color: transparent;
            }
        
            .nav-item>.nav-link.active {
              background-color: #3c8dbc !important;
              color: #fff;
            }
        
            .selected { border-color: #3c8dbc !important; }
        
            .hide {
              display: none;
            }
        
            .custom-box-icon {
              align-items: end !important;
              font-size: unset !important;
              margin-bottom: 10px !important;
            }
                </style>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('helpdesk.layouts.navigation');

            @include('helpdesk.layouts.sidebar')

            <!-- Page Content -->
            <main>
                @yield('main-cont')
            </main>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            @include('helpdesk.layouts.footer');

            <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <script>

            // initialize the datepicker
            flatpickr('#date-picker', {
              inline: true,
              dateFormat: 'Y-m-d',
              defaultDate: 'today'
            });
          
            document.getElementById('cron-link').classList.add('selected')
          
            let selectedLog = ''
          
            function updateClass(value) {
              document.getElementById('log-table').classList.add('hide')
              selectedLog = value;
              if(value == 'cron') {
                //HIGHLIGHTING LINK
                document.getElementById('cron-link').classList.add('selected')
                document.getElementById('exception-link').classList.remove('selected')
                document.getElementById('mail-link').classList.remove('selected')
                //HIDE/SHOW DIV
                document.getElementById('cron-log').classList.remove('hide')
                document.getElementById('exception-log').classList.add('hide')
                document.getElementById('mail-log').classList.add('hide')
              } else if(value == 'exception') {
                //HIGHLIGHTING LINK
                document.getElementById('cron-link').classList.remove('selected')
                document.getElementById('exception-link').classList.add('selected')
                document.getElementById('mail-link').classList.remove('selected')
                //HIDE/SHOW DIV
                document.getElementById('cron-log').classList.add('hide')
                document.getElementById('exception-log').classList.remove('hide')
                document.getElementById('mail-log').classList.add('hide')
              } else {
                //HIGHLIGHTING LINK
                document.getElementById('cron-link').classList.remove('selected')
                document.getElementById('exception-link').classList.remove('selected')
                document.getElementById('mail-link').classList.add('selected')
                //HIDE/SHOW DIV
                document.getElementById('cron-log').classList.add('hide')
                document.getElementById('exception-log').classList.add('hide')
                document.getElementById('mail-log').classList.remove('hide')
              }
            }
          
            function openTable() {
          
              document.getElementById('log-table').classList.remove('hide')
            }
                  </script>
        </div>
    </body>
</html>
