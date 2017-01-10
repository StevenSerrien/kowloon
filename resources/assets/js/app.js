
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


$('.m-expand').click(function() {
  console.log('click');
  $('#sidemenu').toggleClass('sidemenu-collapsed');
  $('#sidemenu').toggleClass('sidemenu-expanded');
});

var overlayActive = false;


$('a#search').click(function() {
  // Check if overlay active
  if (!overlayActive) {
    $('#morph-search-faq').toggleClass('open');
    overlayActive = true;
  }
  $('#search').toggleClass('active');
  $('#faq').removeClass('active');

  // Display content on overlay self
  $('div#m-search').addClass('m-active');
  $('div#m-faq').removeClass('m-active');
});

$('a#faq').click(function() {
  if (!overlayActive) {
  $('#morph-search-faq').toggleClass('open');
  overlayActive = true;
  }
  $('#faq').toggleClass('active');
  $('#search').removeClass('active');

  // Display content on overlay self
  $('div#m-faq').addClass('m-active');
  $('div#m-search').removeClass('m-active');
});

$('#m-close-button').click(function() {
  $('#morph-search-faq').removeClass('open');
  $('#search').removeClass('active');
  $('#faq').removeClass('active');
  $('div#m-search').removeClass('m-active');
  $('div#m-faq').removeClass('m-active');
  overlayActive = false;
});

$('a#advanced-filter').click(function() {
  $('span.arrow-filter').toggleClass('arrow-filter-active');
});


$( function() {
  // RANGESLIDER
    $( "#slider-range" ).slider({
      range: true,
      min: 8.00,
      max: 499.00,
      values: [ 8, 499 ],
      slide: function( event, ui ) {
        $('#amount_1').val( "€           " + ui.values[ 0 ] + ",00");
        $('#amount_2').val( "€           " + ui.values[ 1 ] + ",00");
      }
    });
    $( "#amount_1" ).val( "€           " + $( "#slider-range" ).slider( "values", 0 ) + ",00");
    $( "#amount_2" ).val( "€           " + $( "#slider-range" ).slider( "values", 1 ) + ",00");

    // SEARCH INPUT
    $("label.search-placeholder").click(function() {
        $(this).next().focus();
        $(this).addClass('s-invisible');
    });

    $("input#big-search-input").blur(function() {
        if (($(this).val().length) === 0) {
          $("label.search-placeholder").removeClass('s-invisible');
        };
    });

    if (($(this).val().length) === 0) {
      $("label.search-placeholder").removeClass('s-invisible');
    };

    $('button#m-clear').click(function() {
      $("input#big-search-input").val('');
      $("label.search-placeholder").removeClass('s-invisible');
    });



    // Put user input in inputfield once he/she starts typing


      $('body').on('keydown', function() {
        if ($('#m-search').hasClass('m-active')) {
        var input = $('input#big-search-input');

        if(!input.is(':focus')) {
          input.focus();
          $('label.search-placeholder').addClass('s-invisible');
        }
      }
      });

  });
