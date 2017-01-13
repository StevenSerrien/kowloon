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
    <div class="row">
      <h1 class='headtitle'>ABOUT US</h1>
      <div class="col-lg-9 more-info">
        <h2 class='headtitle'>KOWLOON</h2>
        <p>Pet Concept, active since 1998, is developing, importing and exporting products for pets worldwide.</p>
        <p>natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae sequi nesciunt.</p>
      </div>
      <div class="col-lg-3 more-info">
        <h2 class='headtitle'>CONTACT</h2>
        <ul>
          <li>Deckx Johan</li>
          <li>Bosdreef 7</li>
          <li>2200 Herentals</li>
        </ul>
      </div>
      <div class="col-sm-12 no-left-padding">
        <h2 class='headtitle'>LEAVE A MESSAGE</h2>
        <form class="contactForm" action="" method="post">
          <div class="row normalize">
            <div class="col-sm-3 col-xs-12 no-left-padding">
            <label for="email">E-mail</label>
            <input class="borderless" type="email" name="email" id="email" value="" placeholder='name@domain.com' required />
            </div>
          </div>
        <div class="row normalize">
        <div class="col-sm-9 col-xs-12 no-left-padding">
          <label for="email">Your message</label>
          <textarea rows="7" cols="80" placeholder='Write your message here.' required></textarea>
        </div>
        </div>
        <div class="row normalize">
          <div class="col-xs-12 col-sm-3 no-left-padding">
            <button class='btn style-1' type="submit" name="button">Send</button>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="row faq-area">
      <h2 class='headtitle'>FREQUENTLY ASKED QUESTIONS</h2>
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
    </div>
@endsection
