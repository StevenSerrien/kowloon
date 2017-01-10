
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
