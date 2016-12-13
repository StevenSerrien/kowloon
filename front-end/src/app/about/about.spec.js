var angular = require('angular');
require('angular-mocks');
var about = require('./about');

describe('about component', function () {
  beforeEach(function () {
    angular
      .module('about', ['app/about/about.html'])
      .component('about', about);
    angular.mock.module('about');
  });

  it('should...', angular.mock.inject(function ($rootScope, $compile) {
    var element = $compile('<about></about>')($rootScope);
    $rootScope.$digest();
    expect(element).not.toBeNull();
  }));
});
