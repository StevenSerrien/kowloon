<html>
    <head>
        <title>App Name - Hoi</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
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
    </body>
</html>
