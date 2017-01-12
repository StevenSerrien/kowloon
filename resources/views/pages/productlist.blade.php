@extends('layouts.master')

@section('carousel')
  @include('includes.carousel')
@endsection
@section('content')
  <div class='productlist-section'>
  <div class="row">
    <span class='branding-letter'>K</span><tag><span class='circle {{Request::segment(2)}}'></span>{{Request::segment(2)}}</tag><tag>Splash 'n Fun</tag>
  </div>
  <div class="row">
  <h1 class='headtitle'>{{Request::segment(2)}} ARTICLES.</h1>
  <a id="advanced-filter-productlist" class='advanced-filter pointer no-decoration' data-toggle="collapse" data-target="#productlistFilter" aria-expanded="false" aria-controls="collapseExample">
    Filter <span class='arrow-filter'></span>
  </a>
  <div class="collapse clearfix" id="productlistFilter">
    <div class="advanced-filter-area clearfix">
      <form class='clearfix'>
        <div class="row">


        <div class="col-md-9 col-sm-12">
          <h2 class='size-1x'>
            By collection
          </h2>
          <div class="checkbox-item">
            <input type="checkbox" id="splashnfun">
            <label for="dogs">Splash 'n Fun</label>
          </div>
          <div class="checkbox-item">
            <input type="checkbox" id="luxury">
            <label for="cats">Luxury</label>
          </div>
          <div class="checkbox-item">
            <input type="checkbox" id="new">
            <label for="fish">on sale</label>
          </div>
          <div class="checkbox-item">
            <input type="checkbox" id="birds">
            <label for="birds">other</label>
          </div>
        </div>
        </div>
        <h2 class='size-1x'>
          Price range
        </h2>
        <div class="col-md-6 col-sm-12">

          <div class="price-slider clearfix">
            <div id="slider-range-productlist"></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="prices outer">
          <input type="text" id="amount_productlist_1" readonly>
          <div class="between-amounts">
            -
          </div>
          <input type="text" id="amount_productlist_2" readonly>
          </div>
        </div>
      </form>
    </div>


  </div>
  <!-- END OF FILTER -->
  <hr class='colored'>
  <div class="row">
  <div class="productlist-grid hot-items clearfix">
    <div class="col-md-6 col-sm-12 outer-productlist">
      <div class="col-xs-6">
        <div class="h-item clearfix">
          <div class="img" style="background-image:url({{ URL::asset('images/hot-item-dog.png') }})">
            <ol class="hot-item-indicators">
              <li class="h-item-indicator-1"></li>
              <li class="h-item-indicator-2"></li>
              <li class="h-item-indicator-3"></li>
            </ol>
            <div class="img-overlay">
              <div class="icon-details">
                <span>view details</span>
              </div>

              </div>
          </div>

          <div class='h-item-textbox'>
            <span class="h-item-name bold">Cooling mat</span>
            <span class="h-item-price">€ 15,49</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="h-item clearfix">
          <div class="img" style="background-image:url({{ URL::asset('images/hot-item-dog.png') }})">
            <ol class="hot-item-indicators">
              <li class="h-item-indicator-1"></li>
              <li class="h-item-indicator-2"></li>
              <li class="h-item-indicator-3"></li>
            </ol>
            <div class="img-overlay">
              <div class="icon-details">
                <span>view details</span>
              </div>

              </div>
          </div>

          <div class='h-item-textbox'>
            <span class="h-item-name bold">Cooling mat</span>
            <span class="h-item-price">€ 15,49</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="h-item clearfix">
          <div class="img" style="background-image:url({{ URL::asset('images/hot-item-dog.png') }})">
            <ol class="hot-item-indicators">
              <li class="h-item-indicator-1"></li>
              <li class="h-item-indicator-2"></li>
              <li class="h-item-indicator-3"></li>
            </ol>
            <div class="img-overlay">
              <div class="icon-details">
                <span>view details</span>
              </div>

              </div>
          </div>

          <div class='h-item-textbox'>
            <span class="h-item-name bold">Cooling mat</span>
            <span class="h-item-price">€ 15,49</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="item-stack">
        <div class="h-item stacked stack-1"></div>
        <div class="h-item stacked stack-2"></div>
        <div class="h-item stacked clearfix">
          <div class="img" style="background-image:url({{ URL::asset('images/hot-item-dog.png') }})">
            <div class="number-count">
              <span class='bold'>4</span>
            </div>
            <div class="img-overlay">
              <div class="icon-details">
                <span>view details</span>
              </div>

              </div>
          </div>

          <div class='h-item-textbox'>
            <span class="h-item-name bold">Cooling mat</span>
            <span class="h-item-price">€ 15,49</span>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 outer-productlist">

    </div>
  </div>
  </div>
  </div>
  </div>
@endsection
