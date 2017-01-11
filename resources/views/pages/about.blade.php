@extends('layouts.master')

@section('carousel-about')
  <div id="big-hero-aboutus" class="carousel slide">
    <!-- Static Logo -->
    <div class="carousel-logo">
      <img src="{{ asset('images/kowloon-logo.png') }}" alt="kowloon logo">
    </div>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('images/aboutus-hero.png') }}" alt="Big promotional hero image - first">
      </div>
    </div>
  </div>
@endsection

@section('content')
    <div id='aboutus-section'>
    <div class="row">
      <span class='branding-letter'>K</span><tag>about us</tag>
    </div>
    </div>
@endsection
