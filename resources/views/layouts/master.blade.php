<?php
    // Top of the page, before sending out ANY output to the page.
        $user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );

    // Set the cookie so that the message doesn't show again
        setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );
?>
<html>
    <head>
        <title>Kowloon - Webshop voor dieren</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>
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
      <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>
