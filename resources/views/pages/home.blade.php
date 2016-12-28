<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('carousel')
  @include('includes.carousel')
@endsection

@section('content')
  <div class="row">
    <p class="intro-text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div class="home-categories clearfix">
    <div class="col-xs-6 col-md-2">
      <div class="kowloon-big-dogs">
      </div>
      <h2>DOGS</h2>
    </div>
    <div class="col-xs-6 col-md-2">
      <div class="kowloon-big-cats">
      </div>
      <h2>CATS</h2>
    </div>
    <div class="col-xs-6 col-md-2">
      <div class="kowloon-big-fish">
      </div>
      <h2>FISH</h2>
    </div>
    <div class="col-xs-6 col-md-2">
      <div class="kowloon-big-birds">
      </div>
      <h2>BIRDS</h2>
    </div>
    <div class="col-xs-6 col-md-2">
      <div class="kowloon-big-hamster">
      </div>
      <h2>SMALL ANIMALS</h2>
    </div>
    <div class="col-xs-6 col-md-2">
      <div class="kowloon-big-plus">
      </div>
      <h2>OTHER</h2>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
    <h2 class="bold">HOT ITEMS.</h2>
    </div>
    <div class="hot-items clearfix">
      <div class="col-md-3 col-xs-3">
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
      <div class="col-md-3 col-xs-3">
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
      <div class="col-md-3 col-xs-3">
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
      <div class="col-md-3 col-xs-3">
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
  </div>
  <section id="subscribe">
    <div class="col-md-7 subscribe-hero">
      <div class="subscribe-text">
        <span>discover amazing<br/>Kowloon deals!</span>
        <span>only in our newsletter</span>
      </div>
    </div>
    <div class="col-md-5">

    </div>
  </section>
@endsection
