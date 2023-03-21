<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://support.faveohelpdesk.com/themes/default/common/images/favicon.ico" rel="shortcut icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins_manager/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="../plugins_manager/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../plugins_manager/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../plugins_manager/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist_manager/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../plugins_manager/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../plugins_manager/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../plugins_manager/summernote/summernote-bs4.css">
        
        {{-- <link rel="stylesheet" href="../CSS/style1.css"> --}}
        <link rel="stylesheet" href="../CSS_manager/style2.css">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            @include('manager.layouts.navigation');

            @include('manager.layouts.sidebar')

            <!-- Page Content -->
            <main>
                @yield('main-content-manager')
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
            @include('manager.layouts.footer');

        </div>

        <!-- REQUIRED SCRIPTS -->
       <!-- jQuery -->
       <script src="../plugins_manager/jquery/jquery.min.js"></script>
       <!-- jQuery UI 1.11.4 -->
       <script src="../plugins_manager/jquery-ui/jquery-ui.min.js"></script>
       <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
       <script>
            $.widget.bridge('uibutton', $.ui.button)
       </script>
       <!-- Bootstrap 4 -->
       <script src="../plugins_manager/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- ChartJS -->
       <script src="../plugins_manager/chart.js/Chart.min.js"></script>
       <!-- Sparkline -->
       <script src="../plugins_manager/sparklines/sparkline.js"></script>
       <!-- JQVMap -->
       <script src="../plugins_manager/jqvmap/jquery.vmap.min.js"></script>
       <script src="../plugins_manager/jqvmap/maps/jquery.vmap.usa.js"></script>
       <!-- jQuery Knob Chart -->
       <script src="../plugins_manager/jquery-knob/jquery.knob.min.js"></script>
       <!-- daterangepicker -->
       <script src="../plugins_manager/moment/moment.min.js"></script>
       <script src="../plugins_manager/daterangepicker/daterangepicker.js"></script>
       <!-- Tempusdominus Bootstrap 4 -->
       <script src="../plugins_manager/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
       <!-- Summernote -->
       <script src="../plugins_manager/summernote/summernote-bs4.min.js"></script>
       <!-- overlayScrollbars -->
       <script src="../plugins_manager/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
       <!-- AdminLTE App -->
       <script src="../dist_manager/js/adminlte.js"></script>
       <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
       <script src="../dist_manager/js/pages/dashboard.js"></script>
       <script>
       
        var Pagination = {
  
      code: '',
  
      // --------------------
      // Utility
      // --------------------
  
      // converting initialize data
      Extend: function(data) {
          data = data || {};
          Pagination.size = data.size || 300;
          Pagination.page = data.page || 1;
          Pagination.step = data.step || 3;
      },
  
      // add pages by number (from [s] to [f])
      Add: function(s, f) {
          for (var i = s; i < f; i++) {
              Pagination.code += '<a>' + i + '</a>';
          }
      },
  
      // add last page with separator
      Last: function() {
          Pagination.code += '<i>...</i><a>' + Pagination.size + '</a>';
      },
  
      // add first page with separator
      First: function() {
          Pagination.code += '<a>1</a><i>...</i>';
      },
  
  
  
      // --------------------
      // Handlers
      // --------------------
  
      // change page
      Click: function() {
          Pagination.page = +this.innerHTML;
          Pagination.Start();
      },
  
      // previous page
      Prev: function() {
          Pagination.page--;
          if (Pagination.page < 1) {
              Pagination.page = 1;
          }
          Pagination.Start();
      },
  
      // next page
      Next: function() {
          Pagination.page++;
          if (Pagination.page > Pagination.size) {
              Pagination.page = Pagination.size;
          }
          Pagination.Start();
      },
  
  
  
      // --------------------
      // Script
      // --------------------
  
      // binding pages
      Bind: function() {
          var a = Pagination.e.getElementsByTagName('a');
          for (var i = 0; i < a.length; i++) {
              if (+a[i].innerHTML === Pagination.page) a[i].className = 'current';
              a[i].addEventListener('click', Pagination.Click, false);
          }
      },
  
      // write pagination
      Finish: function() {
          Pagination.e.innerHTML = Pagination.code;
          Pagination.code = '';
          Pagination.Bind();
      },
  
      // find pagination type
      Start: function() {
          if (Pagination.size < Pagination.step * 2 + 6) {
              Pagination.Add(1, Pagination.size + 1);
          }
          else if (Pagination.page < Pagination.step * 2 + 1) {
              Pagination.Add(1, Pagination.step * 2 + 4);
              Pagination.Last();
          }
          else if (Pagination.page > Pagination.size - Pagination.step * 2) {
              Pagination.First();
              Pagination.Add(Pagination.size - Pagination.step * 2 - 2, Pagination.size + 1);
          }
          else {
              Pagination.First();
              Pagination.Add(Pagination.page - Pagination.step, Pagination.page + Pagination.step + 1);
              Pagination.Last();
          }
          Pagination.Finish();
      },
  
  
  
      // --------------------
      // Initialization
      // --------------------
  
      // binding buttons
      Buttons: function(e) {
          var nav = e.getElementsByTagName('a');
          nav[0].addEventListener('click', Pagination.Prev, false);
          nav[1].addEventListener('click', Pagination.Next, false);
      },
  
      // create skeleton
      Create: function(e) {
  
          var html = [
              '<a>&#9668;</a>', // previous button
              '<span></span>',  // pagination container
              '<a>&#9658;</a>'  // next button
          ];
  
          e.innerHTML = html.join('');
          Pagination.e = e.getElementsByTagName('span')[0];
          Pagination.Buttons(e);
      },
  
      // init
      Init: function(e, data) {
          Pagination.Extend(data);
          Pagination.Create(e);
          Pagination.Start();
      }
  };
  
  
  
  /* * * * * * * * * * * * * * * * *
  * Initialization
  * * * * * * * * * * * * * * * * */
  
  var init = function() {
      Pagination.Init(document.getElementById('pagination'), {
          size: 4, // pages size
          page: 1,  // selected page
          step: 3   // pages before and after current
      });
  };
  
  document.addEventListener('DOMContentLoaded', init, false);
          </script>
    </body>
</html>
