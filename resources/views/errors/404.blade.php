@extends('layouts.master')


@section('content')
<div class='row'>
  <div class="col-xs-12 missing-section">
    <div class="inner-center">
    <h1 class='headtitle'>Oops! Seems like nothing's here</h1>
    <h2 class='big-af'>404</h2>
    <a href="{{ secure_url('/') }}"><button class="btn style-1">Return me to a safe area, please.</button></a>
    </div>
  </div>
</div>

@endsection
