jQuery(function($) {
  'use strict';

  // sticky header
  var navbarSticky = $('#sticker').parent();
  if (navbarSticky.hasClass('sticky-header')) {
    $(window).on('load', function() {
      headerSticky();
    });
    $(window).on('scroll', function() {
      headerSticky();
    });
  }

  function headerSticky() {
    var scrollToTop = $(window).scrollTop();
    if (scrollToTop > 46) {
      $('#sticker')
        .parent()
        .addClass('sticky');
      $('body').addClass('sticky-header');
    } else {
      $('#sticker')
        .parent()
        .removeClass('sticky');
      $('body').removeClass('sticky-header');
    }
  }

  $('form.checkout_coupon').show();
  $('.loader').hide();

  // quick search regex
  var qsRegex, selectFilter, ratingFilter;

  // init Isotope
  var $grid = $('.rq-car-grid').isotope({
    itemSelector: '.rq-filter-grid-item',
    layoutMode: 'masonry',
    filter() {
      var $this = $(this);
      var searchResult = qsRegex ? $this.text().match(qsRegex) : true;
      var selectResult = selectFilter ? $this.is(selectFilter) : true;
      var ratingResult = ratingFilter ? $this.is(ratingFilter) : true;
      return searchResult && selectResult && ratingResult;
    },
  });

  $grid.imagesLoaded().progress(function() {
    $grid.isotope('layout');
  });

  // change function
  $('#category-option').on('change', function() {
    selectFilter = $(this).val() ? '.' + $(this).val() : null;
    $grid.isotope();
  });

  // change function
  $('#car-rating').on('change', function() {
    ratingFilter = $(this).val() ? '.' + $(this).val() + 'star' : null;
    $grid.isotope();
  });

  // use value of search field to filter
  var $quicksearch = $('#quicksearch').keyup(
    debounce(function() {
      qsRegex = new RegExp($quicksearch.val(), 'gi');
      $grid.isotope();
    })
  );

  // change is-checked class on buttons
  $('.button-group').each(function(i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });

  // debounce so filtering doesn't happen every millisecond
  function debounce(fn, threshold) {
    var timeout;
    threshold = threshold || 100;
    return function debounced() {
      clearTimeout(timeout);
      var args = arguments;
      var _this = this;
      function delayed() {
        fn.apply(_this, args);
      }
      timeout = setTimeout(delayed, threshold);
    };
  }

  // wooCommerce mini cart js
  var miniCartSelector = $(
    '#main-wrapper .header .turbo-mini-cart .cart-counter'
  );
  miniCartSelector.click(function() {
    $(this)
      .parent()
      .toggleClass('active');
  });

  console.log('miniCartSelector', miniCartSelector);
});
