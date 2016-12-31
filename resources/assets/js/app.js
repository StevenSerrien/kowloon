
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

$('a#search').click(function() {
  console.log('click');
  $('#morphsearch').toggleClass('open');
  $('#search').toggleClass('active');
});
