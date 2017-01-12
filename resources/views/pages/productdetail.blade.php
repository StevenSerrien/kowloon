@extends('layouts.master')

@section('logo-header')
  @include('includes.logoheader')
@endsection
@section('content')
<div class='productdetail-section'>
  <div class="row">
    <div class="col-md-6">

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
</div>
@endsection
