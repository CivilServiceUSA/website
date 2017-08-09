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
   * Setup Tracking on Links
   * @param event
   */
  trackLinks: function(event){
    var data;

    if (typeof event.target !== 'undefined' && typeof event.target.dataset !== 'undefined' && typeof event.target.dataset.track !== 'undefined') {
      data = event.target.dataset;
    } else if (typeof event.target !== 'undefined' && typeof event.target.parentNode !== 'undefined' && typeof event.target.parentNode.dataset !== 'undefined' && typeof event.target.parentNode.dataset.track !== 'undefined') {
      data = event.target.parentNode.dataset;
    }

    if (typeof data === 'object' && typeof data.category === 'string' && typeof data.action === 'string' && typeof data.label === 'string') {
      CivilServices.trackEvent(data.category, data.action, data.label, data.value);
    }
  },

  /**
   * Setup Tracking on Input
   * @param event
   */
  trackInput: function(event){
    var data;

    if (typeof event.target !== 'undefined' && typeof event.target.dataset !== 'undefined' && typeof event.target.dataset.track !== 'undefined') {
      data = event.target.dataset;
    } else if (typeof event.target !== 'undefined' && typeof event.target.parentNode !== 'undefined' && typeof event.target.parentNode.dataset !== 'undefined' && typeof event.target.parentNode.dataset.track !== 'undefined') {
      data = event.target.parentNode.dataset;
    }
    
    if (typeof data === 'object' && typeof data.category === 'string' && typeof data.action === 'string') {
      CivilServices.trackEvent(data.category, data.action, event.target.value, event.target.value.length);
    }
  },

  /**
   * Bind Events to DOM Elements
   */
  bindEvents: function() {
    // Cache Element Lookups
    var mobileMenuButton = $('.navbar-onepage .navbar-collapse ul li a');
    var navbarBrand = $('a.navbar-brand');
    var pageScroll = $('a.page-scroll');
    var searchForm = $('#search');
    var toggleSearch = $('a.toggle-search');
    var detectLocation = $('#detect-location');
    var shareButton = $('#share-button');
    var shareOverlay = $('.share-overlay');
    var shareOptions = $('.share-options a');
    var trackLinks = $('a[data-track], button[data-track]');
    var trackInput = $('input[data-track], textarea[data-track], select[data-track]');

    // Remove Current Event Listeners
    $(document).off('scroll.civil-services', CivilServices.scrollWindow);
    mobileMenuButton.off('click.civil-services', CivilServices.closeMobileMenu);
    navbarBrand.off('click.civil-services', CivilServices.backToTop);
    pageScroll.off('click.civil-services', CivilServices.pageScroll);
    searchForm.off('blur.civil-services', CivilServices.hideSearch);
    toggleSearch.off('click.civil-services', CivilServices.toggleSearch);
    detectLocation.off('click.civil-services', CivilServices.detectLocation);
    shareButton.off('click.civil-services', CivilServices.openShare);
    shareOverlay.off('click.civil-services', CivilServices.closeShare);
    shareOptions.off('click.civil-services', CivilServices.closeShare);
    trackLinks.off('click.civil-services', CivilServices.trackLinks);
    trackInput.off('change.civil-services', CivilServices.trackInput);

    // Add New Event Listeners
    $(document).on('scroll.civil-services', CivilServices.scrollWindow);
    mobileMenuButton.on('click.civil-services', CivilServices.closeMobileMenu);
    navbarBrand.on('click.civil-services', CivilServices.backToTop);
    pageScroll.on('click.civil-services', CivilServices.pageScroll);
    searchForm.on('blur.civil-services', CivilServices.hideSearch);
    toggleSearch.on('click.civil-services', CivilServices.toggleSearch);
    detectLocation.on('click.civil-services', CivilServices.detectLocation);
    shareButton.on('click.civil-services', CivilServices.openShare);
    shareOverlay.on('click.civil-services', CivilServices.closeShare);
    shareOptions.on('click.civil-services', CivilServices.closeShare);
    trackLinks.on('click.civil-services', CivilServices.trackLinks);
    trackInput.on('change.civil-services', CivilServices.trackInput);
  },

  /**
   * Scroll to Top
   * @param event
   */
  backToTop: function (event) {

    if ($('body').scrollTop() === 0) {
      window.location = '/';
    } else {
      var $anchor = $('a.navbar-brand');
      $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top - 55)
      }, 1500, 'easeInOutExpo');
    }

    event.preventDefault();
  },

  /**
   * Page Scroll
   * @param event
   */
  pageScroll: function (event) {
    var $anchor = $(this);
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
   * Open Share Widget
   */
  openShare: function () {
    $('#share-widget').fadeIn();
  },

  /**
   * Close Share Widget
   */
  closeShare: function () {
    $('#share-widget').fadeOut();
  },

  /**
   * Toggle Search Form
   */
  toggleSearch: function () {
    $('a.toggle-search').toggleClass('active');
    $('form.search-form').toggleClass('active');

    if ($('form.search-form').hasClass('active')) {
      $('#search').focus();
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

    $('body').removeClass('loading');

    $(window).on('beforeunload', function() {
      $('body').addClass('loading');
      $('#preloader').fadeIn('slow');
      $('#loading').fadeIn();
    });

    // HTML5 Placeholder
    if (typeof $.fn.placeholder === 'function') {
      $('input, textarea').placeholder();
    }

    // Hide Speech Synthesis if Not Supported
    if (!'speechSynthesis' in window) {
      $('.speak-text').hide();
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
    $('ul.state-list a[href="' + url + '"]').parent().addClass('active');
    $('ul.state-list a').filter(function () {
      return this.href == url;
    }).parent().addClass('active');

    if (typeof lightbox === 'object') {
      lightbox.option({
        'fadeDuration': 200,
        'resizeDuration': 200,
        'imageFadeDuration': 200,
        'showImageNumberLabel': false,
        'wrapAround': true
      })
    }

    // Hide Detect Location on Insecure / Non Supported Browsers
    if (!navigator.geolocation || document.location.protocol !== 'https:') {
      $('#detect-location').hide();
    }

    if (typeof $.fn.jqBootstrapValidation === 'function') {
      $('input,select,textarea').not('[type=submit]').jqBootstrapValidation();
    }

    // Support Standalone mode and keep local links within app
    if (('standalone' in window.navigator) && window.navigator.standalone) {
      $('a').on('click', function(e){
        var new_location = $(this).attr('href');
        if (new_location !== undefined && new_location.substr(0, 1) !== '#' && $(this).attr('target') !== '_blank' && $(this).attr('data-lightbox') === undefined){
          window.location = new_location;
          e.preventDefault();
        }
      });
    }

    if (typeof $.fn.easyAutocomplete === 'function') {
      var seachTimeOut = null;
      $('#search').easyAutocomplete({
        url: function(phrase) {
          return '/search/' + phrase;
        },
        getValue: function(element) {
          return element.name;
        },
        theme: 'bootstrap',
        template: {
          type: 'custom',
          method: function(value, item) {

            // Website does not currently have pages for these types
            if (item.data_type === 'us-governor' || item.data_type === 'city-councilor') {
              return '';
            }

            var image = (item.data_type === 'us-state')
              ? item.photo_url.replace('512x512', '64x64')
              : item.photo_url.replace('1280x720', '640x360');

            var title = item.data_type.replace(/-/g, ' ');

            var html = '<div class="search-result">' +
              '<div class="image" style="background-image: url(\'' + image + '\')"></div>' +
              '<div class="details">' +
                '<div class="name">' +
                  value +
                '</div>' +
                '<div class="title">' +
                  title +
                '</div>' +
              '</div>' +
            '</div>';

            return html;
          }
        },
        list: {
          maxNumberOfElements: 5,
          match: {
            enabled: true
          },
          sort: {
            enabled: true
          },
          onChooseEvent: function () {
            var selection = $('#search').getSelectedItemData();
            if (selection.civil_services_url) {
              window.location = selection.civil_services_url.replace('https://civil.services', '');
            }
          },
          showAnimation: {
            type: 'slide',
            time: 100,
            callback: function() {
              console.log('showAnimation');
              $('.search-form input').removeClass('no-results');
              clearTimeout(seachTimeOut);
            }
          },
          hideAnimation: {
            type: 'slide',
            time: 100,
            callback: function() {
              var $input = $('.search-form input');
              var keyword = $('#search').val();

              clearTimeout(seachTimeOut);

              $input.removeClass('no-results');
              if ($('.easy-autocomplete-container ul li').length === 0 && keyword.length >= 3) {
                seachTimeOut = setTimeout(function(){
                  $input.addClass('no-results');
                }, 1000);
              }
            }
          }
        }
      });
    }

    if (typeof $.fn.contactUs === 'function') {
      $('#contactForm').contactUs();
    }

    if (typeof $.fn.subscribe === 'function') {
      $('#signup-form').subscribe();
    }

    if (typeof LazyLoad !== 'undefined') {
      LazyLoad.lazyLoadImages();

      $(document).scroll(function () {
        clearTimeout(window.lazyInterval);
        window.lazyInterval = setTimeout(LazyLoad.lazyLoadImages, 25);
      });
    }
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
          fill: { color: '#333' },
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
      $('.bg-img').parallax('50%', .12, true);
      $('.bg-img2').parallax('50%', .12, true);
      $('.bg-img3').parallax('50%', .12, true);
      $('.bg-img4').parallax('50%', .12, true);
      $('.bg-img5').parallax('50%', .12, true);
    }
  },

  /**
   * Render Progress Bars
   */
  renderProgressBar: function () {
    $('.progress-bar').each(function () {
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
        pause: 'false'
      });

      $('.carousel-small').carousel({
        interval: 5000, //changes the speed
        pause: 'false'
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

      $(window).on('load scroll resize', function () {
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
   * Speak Name
   *
   * @param string
   */
  getVoice: function (string) {
    if ('speechSynthesis' in window) {
      return speechSynthesis.getVoices().filter(function(voice) { return voice.name == 'Google US English'; })[0];
    }
  },

  /**
   * Speak Text
   *
   * @param message
   */
  speak: function (message) {
    if ('speechSynthesis' in window) {
      var msg = new SpeechSynthesisUtterance();

      msg.text = message;
      msg.volume = 1;
      msg.rate = 0.9;
      msg.pitch = 1;
      msg.voice = CivilServices.getVoice();

      window.speechSynthesis.speak(msg);
    }
  },

  /**
   * Detect Browser Location
   */
  detectLocation: function (event) {
    event.preventDefault();
    event.stopPropagation();

    $('#fetching-location').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>&nbsp; Fetching Location ...');

    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function (position) {
        if (typeof position === 'object' && typeof position.coords === 'object' && position.coords.latitude && position.coords.longitude) {
          $('#fetching-location').html('<i class="fa fa-check fa-fw"></i>&nbsp; Redirecting ...');
          window.location = '/my-elected-officials/geolocation/' + position.coords.latitude + '/' + position.coords.longitude;
        } else {
          $('#fetching-location').html('&nbsp;');
          CivilServices.trackEvent('Error', 'GPS', 'Unable to Fetch Location.');
          alert('Unable to Fetch Location.');
        }
      }, function (error) {
        $('#fetching-location').html('&nbsp;');
        switch(error.code) {
          case error.PERMISSION_DENIED:
            CivilServices.trackEvent('Error', 'GPS', 'User denied the request for Geolocation.');
            alert('User denied the request for Geolocation.');
            break;
          case error.POSITION_UNAVAILABLE:
            CivilServices.trackEvent('Error', 'GPS', 'Location information is unavailable.');
            alert('Location information is unavailable.');
            break;
          case error.TIMEOUT:
            CivilServices.trackEvent('Error', 'GPS', 'The request to get user location timed out.');
            alert('The request to get user location timed out.');
            break;
          case error.UNKNOWN_ERROR:
            CivilServices.trackEvent('Error', 'GPS', 'An unknown error occurred.');
            alert('An unknown error occurred.');
            break;
        }
      }, {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
      });
    }

    return false;
  },

  /**
   * Geocode Address
   */
  geoCodeAddress: function (event) {
    event.preventDefault();
    event.stopPropagation();

    var address = $('#find-officials-address').val().trim();
    var city = $('#find-officials-city').val().trim();
    var state = $('#find-officials-state').val().trim();
    var zipcode = $('#find-officials-zipcode').val().trim();

    if (address !== '' && city !== '' && state !== '' && zipcode !== '') {
      var buildAddress = address + ', ' + city + ', ' + state + '' + zipcode;
      var cleanAddress = buildAddress.replace(/ /g, '+');

      var jsonpUrl = 'https://maps.googleapis.com/maps/api/geocode/json?address=' + cleanAddress + '&key=AIzaSyBlgFUsVry1HfM7cbWEfNmbu_RSPNQin9o';

      jQuery.ajax({
        url: jsonpUrl,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
          if (response.status && response.status === 'OK' && response && response.results && response.results.length > 0) {
            window.location = '/my-elected-officials/geolocation/' + response.results[0].geometry.location.lat + '/' + response.results[0].geometry.location.lng;
          } else {
            CivilServices.trackEvent('Error', 'GeoCode', 'Unable to Fetch Location.');
            alert('Unable to Fetch Location.');
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(jqXHR, textStatus, errorThrown);
          CivilServices.trackEvent('Error', 'GeoCode', errorThrown);
          alert(errorThrown);
        }
      });
    }

    return false;
  },

  /**
   * Initialize Website
   */
  init: function () {
    CivilServices.updateUI();
    CivilServices.renderCharts();
    CivilServices.renderParallax();
    CivilServices.renderProgressBar();
    CivilServices.renderCarousel();
    CivilServices.renderCountdown();
    CivilServices.renderSwipeBox();
    CivilServices.renderGrid();
    CivilServices.getVoice();
    CivilServices.bindEvents();
  }
};