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

          </div>
          <div class='h-item-textbox'>
            <span class="h-item-name bold">Cooling mat</span>
            <span class="h-item-price">€ 15,49</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-3">

      </div>
      <div class="col-md-3 col-xs-3">

      </div>
      <div class="col-md-4 col-xs-4">

      </div>
    </div>
  </div>
@endsection
