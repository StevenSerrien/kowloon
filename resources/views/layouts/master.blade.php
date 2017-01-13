<?php
    // Top of the page, before sending out ANY output to the page.
        $user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );

    // Set the cookie so that the message doesn't show again
        setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );
?>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <link rel="stylesheet" href="{{ secure_url('css/app.css') }}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="shortcut icon" href="{{ secure_asset('favicon.ico') }}">
    </head>
    <body>
      <!-- Google Analytics -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90330524-1', 'auto');
      ga('send', 'pageview');

      </script>

      @include('cookieConsent::index')
      <div class="outer-container">
        @include('includes.sidemenu')

        <div class="inner-container">
          @include('includes.search')
          @yield('carousel')
          @yield('carousel-about')
          @yield('logo-header')
          <div class="container">
            @yield('content')


          </div>

        </div>

      </div>
      <script type="text/javascript" src="{{ secure_url('js/app.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>
