'use strict';

(function () {
  var OFFSET_TOP = 500;
  var SCROLL_STEP = 30;
  var SCROLL_DELAY = 3;
  var button = document.querySelector('.to-top-button');

  var scrollHandler = function () {
    if (window.pageYOffset > OFFSET_TOP) {
      button.classList.add('to-top-button--isShow');
    } else {
      button.classList.remove('to-top-button--isShow');
    }
  };

  var scrollToTop = function () {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -SCROLL_STEP);
      setTimeout(scrollToTop, SCROLL_DELAY);
    }
  };

  document.addEventListener('scroll', scrollHandler);
  button.addEventListener('click', scrollToTop);
})();
