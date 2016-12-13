var angular = require('angular');

var techsModule = require('./app/techs/index');
require('angular-ui-router');
var routesConfig = require('./routes');

var main = require('./app/main');
var header = require('./app/header');
var title = require('./app/title');
var footer = require('./app/footer');

var about = require('./app/about/about');

require('./index.scss');

angular
  .module('app', [techsModule, 'ui.router'])
  .config(routesConfig)
  .component('home', main)
  .component('kowloonHeader', header)
  .component('fountainTitle', title)
  .component('kowloonFooter', footer)
  .component('about', about);
