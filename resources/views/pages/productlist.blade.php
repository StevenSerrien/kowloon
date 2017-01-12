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
  </div>
  </div>
@endsection
