@extends('layouts.master')

@section('title', 'Product Kowloon - Details over dit product.')
@section('description', 'Kowloon - Lees hier over de uitgebreide specificaties van het product.')

@section('logo-header')
  @include('includes.logoheader')
@endsection
@section('content')
<div class='productdetail-section'>
  <div class="row">
    <div id='carousel-bounding-box clearfix' class="col-md-6 clearfix">
      <div class="carousel slide" id="thumbnail-carousel" data-interval="false">
        <div class="carousel-inner">
          <div class="active item" data-slide-number="0">
            <img src="{{secure_asset('/images/hot-item-dog.png')}}">
          </div>
            <div class="item" data-slide-number="1">
              <img src="{{secure_asset('/images/hot-item-dog.png')}}">
            </div>

            <div class="item" data-slide-number="2">
              <img src="{{secure_asset('/images/hot-item-dog.png')}}">
            </div>
            {{-- <a class="left carousel-control" href="#thumbnail-carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbnail-carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a> --}}
          </div>
          <div class="thumbnail-container clearfix" id="thumbnail-selector" >
            <ul class="hide-bullets clearfix">
              <li class="col-xs-4">
                <a class="thumbnail active" id="carousel-selector-0">
                  <div class="inactive-overlay"></div>
                  <img src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
                <p>woordje tekst</p>
              </li>
              <li class="col-xs-4">
                <a class="thumbnail not-active" id="carousel-selector-1">
                  <div class="inactive-overlay"></div>
                  <img src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
                <p>woordje tekst</p>
              </li>
              <li class="col-xs-4">
                <a class="thumbnail not-active" id="carousel-selector-2">
                  <div class="inactive-overlay"></div>
                  <img src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
                <p>woordje tekst</p>
              </li>
            </ul>
          </div>
        </div>
    </div>
    <div class="col-md-6">
      <span class='branding-letter'>K</span><tag><span class='circle {{Request::segment(2)}}'></span>{{Request::segment(2)}}</tag><tag>Splash 'n Fun</tag>
      <h1 class='headtitle'>COOLING MAT</h1>
      <h2>€ 15,49</h2>
      <h3 class='half-size'>Colors</h3>
      <div class="hot-item-indicators-container clearfix">
        <ol class="hot-item-indicators">
          <li class="h-item-indicator-1"></li>
          <li class="h-item-indicator-2"></li>
          <li class="h-item-indicator-3"></li>
        </ol>
      </div>
      <h3 class='half-size'>Description</h3>
      <p>Hier komt een de volledige beschrijvende tekst met een max. aantal karakters. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea clit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat consectetur.</p>
      <div class="geometry-shapes">
        <span class='rectangle'></span><span class='circle'></span><span class='triangle'></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="product-specs">
        <h2 class='size-2x'>Specifications</h2>
        <h3 class='size-1x'>Dimensions</h3>
        <p class='spec-detail'><detail><span class='bold'>S - </span>Ø 53x18cm</detail><detail><span class='bold'>M - </span>Ø 53x18cm</detail><detail><span class='bold'>L - </span>Ø 53x18cm</detail></p>
        <h3 class='size-1x'>Titel</h3>
        <p class='spec-detail'<detail><span class='bold'>S - </span>Hier komt technische tekst</detail></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <h1 class='headtitle size-2x'>Gerelateerde producten</h1>
      <div class="carousel slide media-carousel {{Request::segment(2)}}" id="related-products">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-3 first">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
              <div class="col-md-3 middle">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
              <div class="col-md-3 middle">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
              <div class="col-md-3 last">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 first">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
              <div class="col-md-3 middle">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
              <div class="col-md-3 middle">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
              <div class="col-md-3 last">
                <a class="thumbnail" href="#">
                  <div class="img-overlay">
                    <div class="icon-details">
                      <span>view details</span>
                    </div>
                  </div>
                  <img alt="foto van gerelateerd product" src="{{secure_asset('/images/hot-item-dog.png')}}">
                </a>
              </div>
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#related-products" class="left carousel-control"><span class='icon'>‹</span></a>
        <a data-slide="next" href="#related-products" class="right carousel-control"><span class='icon'>›</span></a>
      </div>
    </div>
    <div class="col-xs-12">
      <a class='view-more' href="/productlist/{{Request::segment(2)}}">view more</a>
    </div>
  </div>
  <div class="row faq-area">
    <div class="col-xs-12 ">
      <h1 class='headtitle size-2x'>Frequently asked questions</h1>
      <div class="col-xs-12 question-block">
        <h3>Dit is een vraag</h3>
        <span class='arrow-filter pointer no-decoration collapsed' data-toggle="collapse" data-target="#collapseQuestion1" aria-expanded="false" aria-controls="collapseQuestion1"> </span>
        <div id="collapseQuestion1" class="answer-block collapse">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
        </div>
      </div>
      <div class="col-xs-12 question-block">
        <h3>Dit is een vraag</h3>
        <span class='arrow-filter pointer no-decoration collapsed' data-toggle="collapse" data-target="#collapseQuestion2" aria-expanded="false" aria-controls="collapseQuestion2"> </span>
        <div id="collapseQuestion2" class="answer-block collapse">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
        </div>
      </div>
      <div class="col-xs-12 question-block">
        <h3>Dit is een vraag</h3>
        <span class='arrow-filter pointer no-decoration collapsed' data-toggle="collapse" data-target="#collapseQuestion3" aria-expanded="false" aria-controls="collapseQuestion3"> </span>
        <div id="collapseQuestion3" class="answer-block collapse">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..</p>
        </div>
    </div>
  </div>
  <div class="col-xs-12">
    <a class='view-more' href="/">More questions?</a>
  </div>
</div>
<section id="subscribe" class='subscribe-on-productdetail'>
  <div class="col-md-7 subscribe-hero">
    <div class="subscribe-text">
      <span>discover amazing<br/>Kowloon deals!</span>
      <span>only in our newsletter</span>
    </div>
  </div>
  <div class="col-md-5 outer">
    <div class="subscribe-form span-blocks inner-center">
      <span class="size-1x bold">Subscribe to our newsletter</span>
      <span>Lorem ipsum dolor sit amet.</span>
      <form action="{{ secure_url('/subscribe') }}" method="post">
        <input class="borderless" type="email" name="email" placeholder="domain @ name.com" value="">
        <button class="borderless paste-left" type="submit" name="button">OK</button>
      </form>
      @if(session('message'))
      <span>{{ session('message') }}</span>
      @endif
    </div>
  </div>
</section>
@endsection
