<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
        <link rel="stylesheet" href="assets/app/css/edit.css" type="text/css">
    </head>
     <body>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="container">

                    @include('userPanel.layouts.navigation');

                    @include('userPanel.layouts.headerSearch')

                </div>
            </header>
      
            <div id="main" class="site-main clearfix">
                <!-- Page Content -->
                <main>
                    @yield('main-userPanel')
                </main>

            </div>

              <!-- Main Footer -->
              @include('userPanel.layouts.footer');

         </div>
  
        <!-- REQUIRED SCRIPTS -->
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
          .ck.ck-editor__editable_inline{
            height: 200px !important;
          }
        </style>
    </body>
</html>
