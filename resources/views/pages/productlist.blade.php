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
  </div>
  </div>
@endsection
