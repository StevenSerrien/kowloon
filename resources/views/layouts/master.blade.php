<html>
    <head>
        <title>App Name - Hoi</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>
      <div class="outer-container">
        @include('includes.sidemenu')

        <div class="inner-container">
          @include('includes.search')
          @yield('carousel')
          <div class="container">
            @yield('content')


          </div>

        </div>

      </div>
      <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>
