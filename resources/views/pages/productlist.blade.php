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
  <div class="row extra-filters clearfix">
    <div class="col-xs-12 clearfix">
      <div class="select">
        <select>
          <option selected hidden>Sorty by relevance</option>
          <option value="price-low">Price: high to low</option>
          <option value="price-high">Price: high to low</option>
          <option value="latest">Latest</option>
          <option value="oldest">Oldest</option>
        </select>
      </div>
      <div class="product-amount">
        {{Request::segment(2)}} items: <span class="bold">5 of 56</span>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="productlist-grid hot-items {{Request::segment(2)}} clearfix">
    <div class="col-md-6 col-sm-12 outer-productlist">
      <div class="col-xs-6">
        <a href="/productlist/{{Request::segment(2)}}/cooling-mat">
        <div class="h-item clearfix">
          <div class="img" style="background-image:url({{ secure_asset('images/hot-item-dog.png') }})">
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
        </a>
      </div>
      <div class="col-xs-6">
        <a href="/productlist/{{Request::segment(2)}}/cooling-mat">
        <div class="h-item clearfix">
          <div class="img" style="background-image:url({{ secure_asset('images/hot-item-dog.png') }})">
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
      </a>
      </div>
      <div class="col-xs-6">
        <a href="/productlist/{{Request::segment(2)}}/cooling-mat">
        <div class="h-item clearfix">
          <div class="img" style="background-image:url({{ secure_asset('images/hot-item-dog.png') }})">
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
      </a>
      </div>
      <div class="col-xs-6">
        <a href="/productlist/{{Request::segment(2)}}/cooling-mat">
        <div class="item-stack">
        <div class="h-item stacked stack-1"></div>
        <div class="h-item stacked stack-2"></div>
        <div class="h-item stacked clearfix">
          <div class="img" style="background-image:url({{ secure_asset('images/hot-item-dog.png') }})">
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
    </a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 outer-productlist">
      <div class="h-item featured clearfix">
        <div class="img" style="background-image:url({{ secure_asset('images/hot-item-dog.png') }})">
          <ol class="hot-item-indicators">
            <li class="h-item-indicator-1"></li>
            <li class="h-item-indicator-2"></li>
            <li class="h-item-indicator-3"></li>
          </ol>
        </div>

        <div class='h-item-textbox'>
          <h3>Cooling mat</h3>
          <p>Hier komt een deel van de beschrijvende tekst die bij elk product hoort. Ook terug te vinden in het product detail.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius....</p>
          <span class="h-item-price">€ 15,49</span>
          <a href="/productlist/{{Request::segment(2)}}/cooling-mat">
          <button class='btn style-1' name="button">Want to know more?</button>
        </a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
@endsection
