<!-- Footer Section-->
<section class="section-small footer bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h5>Select Your State</h5>
                <ul class="list-unstyled state-list">
                @foreach ((new CivilServices\Data\State)->all() as $state)
                    <li><a href="/state/{{ $state->slug }}" title="View {{ $state->state }} Government">{{ $state->code }}</a></li>
                @endforeach
                </ul>
            </div>
            <div class="col-sm-2 col-sm-offset-1 footer-menu">
                <h5>Legal</h5>
                <h6 class="no-pad"><a href="/terms-of-use">Terms of Use</a></h6>
                <h6 class="no-pad"><a href="/privacy-policy">Privacy Policy</a></h6>
            </div>
            <div class="col-sm-2 footer-menu">
                <h5>Developers</h5>
                <h6 class="no-pad"><a href="https://github.com/CivilServiceUSA">Use Our Data</a></h6>
                <h6 class="no-pad"><a href="http://docs.civilservices.apiary.io/">API Docs</a></h6>
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
                <h6>Powered By <a href="https://civil.services"> civil.services</a></h6>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <h6>For <i class="fa fa-heart fa-fw"></i> the people</h6>
            </div>
            <div class="col-sm-3 col-sm-offset-1 text-right">
                <ul class="list-inline">
                    <li><a href="https://github.com/CivilServiceUSA" title="View our Open Source Projects"><i class="fa fa-github fa-fw fa-2x"></i></a></li>
                    <li><a href="https://twitter.com/CivilServiceUSA" title="Visit our Twitter Account"><i class="fa fa-twitter fa-fw fa-2x"></i></a></li>
                    <li><a href="https://www.facebook.com/CivilServiceUSA/" title="Visit our Facebook Account"><i class="fa fa-facebook fa-fw fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Load Page CSS -->
<script>
  var cb = function() {
    var plugins = document.createElement('link');
    plugins.rel = 'stylesheet';
    plugins.href = '{{ asset('css/plugins.css') }}';

    // @todo load the three @imports at the top of style.scss that webpack barfed on

    var styles = document.createElement('link');
    styles.rel = 'stylesheet';
    styles.href = '{{ asset('css/style.css') }}';

    var head = document.getElementsByTagName('head')[0];
    head.appendChild(plugins);

    // Remove Loading Screen if required CSS files were loaded
    plugins.addEventListener('load', function(){ head.appendChild(styles); });
    styles.addEventListener('load', function(){ document.body.className = 'top'; initWebsite(); });

  };

  var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
  if (raf) {
    raf(cb);
  }
  else {
    window.addEventListener('load', cb);
  }
</script>

<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/site.js') }}"></script>

<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
