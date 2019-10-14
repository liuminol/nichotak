'use strict';

(function () {
  var date = new Date();
  var year = date.getFullYear();
  var node = document.querySelector('.footer__copy-year');

  node.textContent = year;
})();
