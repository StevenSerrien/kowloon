<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Static Logo -->
  <div class="carousel-logo">
    <img src="{{ asset('images/kowloon-logo.png') }}" alt="kowloon logo">
  </div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li class='carousel-indicator-disabled' data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('images/carousel/kowloon-hero-1.png') }}" alt="Big promotional hero image - first">
    </div>

    <div class="item">
      <img src="{{ asset('images/carousel/kowloon-hero-2.png') }}" alt="Big promotional hero image - second">
    </div>
  </div>

  {{-- <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> --}}
</div>



{{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Carousel items -->
  <div class="carousel-inner">
     <div class="item active ad1">
        <div class="carousel-caption">

        </div>
     </div>
     <div class="item ad2">
        <div class="carousel-caption">

         </div>
     </div>
  </div>
</div> --}}
