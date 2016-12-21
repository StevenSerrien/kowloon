<html>
    <head>
        <title>App Name - Hoi</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
      <div class="outer-container">
        @include('includes.sidemenu')

        <div class="inner-container container">
            @yield('content')
        </div>

      </div>
    </body>
</html>
