<!-- Footer Section-->
<section class="section-small footer bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h5>Select Your State</h5>
                <ul class="list-unstyled state-list">
@foreach ((new CivilServices\Data\State)->all() as $state)
                    <li><a href="/state/{{ $state->slug }}" title="View {{ $state->state }} Government" {!! trackData('Nav', 'Footer', 'State ' . $state->state) !!}>{{ $state->code }}</a></li>
@endforeach
                </ul>
            </div>
            <div class="col-sm-2 col-sm-offset-1 footer-menu">
                <h5>Legal</h5>
                <h6 class="no-pad"><a href="/terms-of-use" {!! trackData('Nav', 'Footer', 'Terms of Use') !!}>Terms of Use</a></h6>
                <h6 class="no-pad"><a href="/privacy-policy" {!! trackData('Nav', 'Footer', 'Privacy Policy') !!}>Privacy Policy</a></h6>
            </div>
            <div class="col-sm-2 footer-menu">
                <h5>Developers</h5>
                <h6 class="no-pad"><a href="https://github.com/CivilServiceUSA" {!! trackData('Nav', 'Footer', 'Use Our Data') !!} target="_blank">Use Our Data</a></h6>
                <h6 class="no-pad"><a href="https://api.civil.services/guide/" {!! trackData('Nav', 'Footer', 'API Docs') !!} target="_blank">API Docs</a></h6>
            </div>
            <div class="col-sm-3 text-right">
                <h5>Next Federal Election</h5>
                <div id="next-election"></div>
            </div>
        </div>
    </div>
</section>
<section class="section-small footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h6>&copy; 2017 - {{ date('Y') }} <a href="https://civil.services"> civil.services</a></h6>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <h6>By the People <i class="fa fa-heart fa-fw"></i> For the People</h6>
            </div>
            <div class="col-sm-3 col-sm-offset-1 text-right">
                <ul class="list-inline">
                    <li>
                        <a href="https://github.com/CivilServiceUSA" title="View our Open Source Projects" {!! trackData('Nav', 'Footer', 'GitHub') !!}>
                            <i class="fa fa-github fa-fw fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CivilServiceUSA" title="Visit our Twitter Account" {!! trackData('Nav', 'Footer', 'Twitter') !!}>
                            <i class="fa fa-twitter fa-fw fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/CivilServiceUSA/" title="Visit our Facebook Account" {!! trackData('Nav', 'Footer', 'Facebook') !!}>
                            <i class="fa fa-facebook fa-fw fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('partials.share')

<script src="//d2wy8f7a9ursnm.cloudfront.net/bugsnag-3.min.js" data-apikey="2070965b720f8a895ab228e900a50000"></script>
<script src="{{ asset('/js/plugins.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>

<!-- Load Page CSS -->
<script>
  var cb = function() {
    var head = document.getElementsByTagName('head')[0];

    var plugins = document.createElement('link');
    plugins.rel = 'stylesheet';
    plugins.href = '{{ asset('css/plugins.css') }}';

    var styles = document.createElement('link');
    styles.rel = 'stylesheet';
    styles.href = '{{ mix('/css/style.css') }}';

    head.appendChild(plugins);

    // Remove Loading Screen if required CSS files were loaded
    plugins.addEventListener('load', function(){ head.appendChild(styles); });
    styles.addEventListener('load', function(){
      document.body.className = 'top';
      if (typeof CivilServices !== 'undefined') {
        CivilServices.anon = '{{ anon(Request::ip()) }}';
        CivilServices.env = '{{ env("APP_ENV") }}';
        CivilServices.devFlags.debug = {{ isDevelopment() }};
        CivilServices.init();
      }
    });

  };

  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) {
    raf(cb);
  }
  else {
    window.addEventListener('load', cb);
  }
</script>

<script type="text/javascript">
  if (typeof Bugsnag !== 'undefined') {
    Bugsnag.notifyReleaseStages = ['staging', 'production'];
    Bugsnag.releaseStage = '{{ env("APP_ENV") }}';
    Bugsnag.apiKey = '{{ env("BUGSNAG_API_KEY") }}';
  }

  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="4.0.0";
    analytics.load('{{ env("SEGMENT_API_KEY") }}');
    analytics.debug({{ isDevelopment() }});
    analytics.page({}, {
      context: {
        ip: "{{ anon(Request::ip()) }}"
      },
      integrations: {
        'All': {{ isProduction() }}
      }
    });
  }}();
</script>

<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
