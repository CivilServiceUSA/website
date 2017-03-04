var CivilServices = {
  anon: '0.0.0.0',
  env: 'production',
  devFlags: {
    debug: false
  },

  /**
   * Track Event using Google Analytics with Anonymized IP Address
   * @param category
   * @param action
   * @param label
   * @param value
   */
  trackEvent: function (category, action, label, value) {
    if (typeof analytics !== 'undefined') {
      analytics.track(action, {
        category: category,
        label: label,
        value: value
      }, {
        context: {
          ip: CivilServices.anon
        },
        integrations: {
          'All': (CivilServices.env === 'production')
        }
      });
    }

    if (CivilServices.devFlags.debug) {
      console.log('Track Event:', category, action, label, value);
    }
  },

  /**
   * Bind Events to DOM Elements
   */
  bindEvents: function() {
    // Cache Element Lookups
    var mobileMenuButton = $('.navbar-onepage .navbar-collapse ul li a');
    var pageScroll = $('a.page-scroll');
    var searchButton = $('button.search-button');
    var searchForm = $('#search');
    var toggleSearch = $('a.toggle-search');

    // Remove Current Event Listeners
    $(document).off('scroll.civil-services', CivilServices.scrollWindow);
    mobileMenuButton.off('click.civil-services', CivilServices.closeMobileMenu);
    pageScroll.off('click.civil-services', CivilServices.backToTop);
    searchButton.off('click.civil-services', CivilServices.doSearch);
    searchForm.off('blur.civil-services', CivilServices.hideSearch);
    toggleSearch.off('click.civil-services', CivilServices.toggleSearch);

    // Add New Event Listeners
    $(document).on('scroll.civil-services', CivilServices.scrollWindow);
    mobileMenuButton.on('click.civil-services', CivilServices.closeMobileMenu);
    pageScroll.on('click.civil-services', CivilServices.backToTop);
    searchButton.on('click.civil-services', CivilServices.doSearch);
    searchForm.on('blur.civil-services', CivilServices.hideSearch);
    toggleSearch.on('click.civil-services', CivilServices.toggleSearch);
  },

  /**
   * Scroll to Top
   * @param event
   */
  backToTop: function (event) {
    var $anchor = $('a.page-scroll');
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top - 55)
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  },

  /**
   * Close Mobile Menu
   */
  closeMobileMenu: function () {
    $('.navbar-onepage .navbar-toggle:visible').click();
  },

  /**
   * Handle Window Scrolling Events
   */
  scrollWindow: function () {
    var introHeader = $('.intro');
    var nav = $('.navbar-universal');
    var navFixed = $('.navbar-fixed-top');

    var effectsModuleHeader = function (introHeader, elm) {
      if (introHeader.length > 0) {
        var height = introHeader.height();
        var topScroll = $(document).scrollTop();
        if ((introHeader.hasClass('intro')) && ($(elm).scrollTop() <= height)) {
          introHeader.css('top', (topScroll * .4));
        }
        if (introHeader.hasClass('intro') && ($(elm).scrollTop() <= height)) {
          introHeader.css('opacity', (1 - topScroll / introHeader.height()));
        }
      }
    };

    effectsModuleHeader(introHeader, this);

    if (nav.length) {
      if (nav.offset().top > 50) {
        navFixed.addClass("top-nav-collapse");
      } else {
        navFixed.removeClass("top-nav-collapse");
      }
    }
  },

  /**
   * Perform Search
   * @returns {boolean}
   */
  doSearch: function () {
    var value = $('#search').val();
    var url = $('#search-autocomplete option').filter(function() {
      return this.value == value;
    }).data('url');

    if (url) {
      window.location = url;
    }

    return false;
  },

  /**
   * Toggle Search Form
   */
  toggleSearch: function () {
    $('a.toggle-search').toggleClass('active');
    $('form.search-form').toggleClass('active');

    if ($('form.search-form').hasClass('active')) {
      setTimeout(function(){
        $('#search').focus();
      }, 25)
    }
  },

  /**
   * Hide Search Form
   */
  hideSearch: function () {
    if ($(this).val() == '' && $('form.search-form').hasClass('active')) {
      CivilServices.toggleSearch();
    }
  },

  /**
   * Update User Interface
   */
  updateUI: function () {
    // Handle Preloader
    $('#preloader').fadeOut();
    $('#loading').fadeOut('slow');

    // HTML5 Placeholder
    if (typeof $.fn.placeholder === 'function') {
      $('input, textarea').placeholder();
    }

    // Load WOW.js
    new WOW().init();

    // jQuery Animated Number
    if (typeof $.fn.scrollzipInit === 'function') {
      $(document).scrollzipInit();
    }
    if (typeof $.fn.rollerInit === 'function') {
      $(document).rollerInit();
    }


    // Set Backgraound Image from Data Attribute
    $('.intro').each(function (i) {
      if ($(this).attr('data-background')) {
        $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
      }
    });

    // ScrollSpy on Body
    if (typeof $.fn.scrollspy === 'function') {
      $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 65
      });
    }


    // Set Active Classes
    var url = window.location;
    $('ul.nav a[href="' + url + '"]').parent().addClass('active');
    $('ul.nav a').filter(function () {
      return this.href == url;
    }).parent().addClass('active');

    $('ul.state-list a[href="' + url + '"]').parent().addClass('active');
    $('ul.state-list a').filter(function () {
      return this.href == url;
    }).parent().addClass('active');
  },

  /**
   * Render Charts
   */
  renderCharts: function () {
    if (typeof $.fn.appear === 'function' && typeof $.fn.circleProgress === 'function') {
      var el = $('.circle');
      var inited = false;

      if (el.length > 0) {
        el.appear({ force_process: true });
        el.on('appear', function () {
          if (!inited) {
            el.circleProgress();
            inited = true;
          }
        });

        el.circleProgress({
          size: 100,
          fill: { color: "#333" },
          startAngle: 300,
          animation: { duration: 4000 }
        })
        .on('circle-animation-progress', function (event, progress, stepValue) {
          $(this).find('span').text((stepValue * 100).toFixed(1));
        });
      }
    }
  },

  /**
   * Render Parallax
   */
  renderParallax: function () {
    if (typeof $.fn.parallax === 'function') {
      $('.bg-img').parallax("50%", .12, true);
      $('.bg-img2').parallax("50%", .12, true);
      $('.bg-img3').parallax("50%", .12, true);
      $('.bg-img4').parallax("50%", .12, true);
      $('.bg-img5').parallax("50%", .12, true);
    }
  },

  /**
   * Render Progress Bars
   */
  renderProgressBar: function () {
    $(".progress-bar").each(function () {
      var each_bar_width;
      each_bar_width = $(this).attr('aria-valuenow');
      $(this).width(each_bar_width + '%');
    });
  },

  /**
   * Render Carousel
   */
  renderCarousel: function () {
    if (typeof $.fn.carousel === 'function') {
      $('.carousel-big').carousel({
        interval: 6500, //changes the speed
        pause: "false"
      });

      $('.carousel-small').carousel({
        interval: 5000, //changes the speed
        pause: "false"
      });
    }
  },

  /**
   * Render Countdown
   */
  renderCountdown: function () {
    if (typeof $.fn.countdown === 'function') {
      $('#next-election').countdown('2018/11/06 14:00:00').on('update.countdown', function (event) {
        var $this = $(this).html(event.strftime(''
          + '<div><span>%-w</span>week%!w</div>'
          + '<div><span>%-d</span>day%!d</div>'));
      });

      setTimeout(function () {
        $('#next-election').countdown('stop');
      }, 100);
    }
  },

  /**
   * Render Swipe Box
   */
  renderSwipeBox: function () {
    if (typeof $.fn.swipebox === 'function' && typeof $.fn.scrollzip === 'function') {
      $('.swipebox').swipebox({
        useCSS: true, // false will force the use of jQuery for animations
        useSVG: false, // false to force the use of png for buttons
        hideCloseButtonOnMobile: false, // true will hide the close button on mobile devices
        hideBarsDelay: 0, // delay before hiding bars on desktop
        videoMaxWidth: 1140, // videos max width
        loopAtEnd: false, // true will return to the first image after the last image is reached
        autoplayVideos: true // true will autoplay Youtube and Vimeo videos
      });

      $('.swipebox-video').swipebox();

      jQuery(document.body)
        .on('click touchend', '#swipebox-slider .current img', function (e) {
          return false;
        })
        .on('click touchend', '#swipebox-slider .current', function (e) {
          jQuery('#swipebox-close').trigger('click');
        });

      $(window).on("load scroll resize", function () {
        $('.numscroller').scrollzip({
          showFunction: function () {
            numberRoller($(this).attr('data-slno'));
          },
          wholeVisible: false,
        });
      });
    }
  },

  /**
   * Render Grid
   */
  renderGrid: function () {
    shuffleme.init();
  },

  /**
   * Initialize Website
   */
  init: function () {
    CivilServices.bindEvents();
    CivilServices.updateUI();
    CivilServices.renderCharts();
    CivilServices.renderParallax();
    CivilServices.renderProgressBar();
    CivilServices.renderCarousel();
    CivilServices.renderCountdown();
    CivilServices.renderSwipeBox();
    CivilServices.renderGrid();
  }
};