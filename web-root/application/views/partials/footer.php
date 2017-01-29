<!-- Footer Section-->
<section class="section-small footer bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h5>Select Your State</h5>
                <ul class="list-unstyled state-list">
                    <li><a href="/state/alaska" title="View Alaska Government">AK</a></li>
                    <li><a href="/state/alabama" title="View Alabama Government">AL</a></li>
                    <li><a href="/state/arkansas" title="View Arkansas Government">AR</a></li>
                    <li><a href="/state/arizona" title="View Arizona Government">AZ</a></li>
                    <li><a href="/state/california" title="View California Government">CA</a></li>
                    <li><a href="/state/colorado" title="View Colorado Government">CO</a></li>
                    <li><a href="/state/connecticut" title="View Connecticut Government">CT</a></li>
                    <li><a href="/state/delaware" title="View Delaware Government">DE</a></li>
                    <li><a href="/state/florida" title="View Florida Government">FL</a></li>
                    <li><a href="/state/georgia" title="View Georgia Government">GA</a></li>
                    <li><a href="/state/hawaii" title="View Hawaii Government">HI</a></li>
                    <li><a href="/state/iowa" title="View Iowa Government">IA</a></li>
                    <li><a href="/state/idaho" title="View Idaho Government">ID</a></li>
                    <li><a href="/state/illinois" title="View Illinois Government">IL</a></li>
                    <li><a href="/state/indiana" title="View Indiana Government">IN</a></li>
                    <li><a href="/state/kansas" title="View Kansas Government">KS</a></li>
                    <li><a href="/state/kentucky" title="View Kentucky Government">KY</a></li>
                    <li><a href="/state/louisiana" title="View Louisiana Government">LA</a></li>
                    <li><a href="/state/massachusetts" title="View Massachusetts Government">MA</a></li>
                    <li><a href="/state/maryland" title="View Maryland Government">MD</a></li>
                    <li><a href="/state/maine" title="View Maine Government">ME</a></li>
                    <li><a href="/state/michigan" title="View Michigan Government">MI</a></li>
                    <li><a href="/state/minnesota" title="View Minnesota Government">MN</a></li>
                    <li><a href="/state/missouri" title="View Missouri Government">MO</a></li>
                    <li><a href="/state/mississippi" title="View Mississippi Government">MS</a></li>
                    <li><a href="/state/montana" title="View Montana Government">MT</a></li>
                    <li><a href="/state/north-carolina" title="View North Carolina Government">NC</a></li>
                    <li><a href="/state/north-dakota" title="View North Dakota Government">ND</a></li>
                    <li><a href="/state/nebraska" title="View Nebraska Government">NE</a></li>
                    <li><a href="/state/new-hampshire" title="View New Hampshire Government">NH</a></li>
                    <li><a href="/state/new-jersey" title="View New Jersey Government">NJ</a></li>
                    <li><a href="/state/new-mexico" title="View New Mexico Government">NM</a></li>
                    <li><a href="/state/nevada" title="View Nevada Government">NV</a></li>
                    <li><a href="/state/new-york" title="View New York Government">NY</a></li>
                    <li><a href="/state/ohio" title="View Ohio Government">OH</a></li>
                    <li><a href="/state/oklahoma" title="View Oklahoma Government">OK</a></li>
                    <li><a href="/state/oregon" title="View Oregon Government">OR</a></li>
                    <li><a href="/state/pennsylvania" title="View Pennsylvania Government">PA</a></li>
                    <li><a href="/state/rhode-island" title="View Rhode Island Government">RI</a></li>
                    <li><a href="/state/south-carolina" title="View South Carolina Government">SC</a></li>
                    <li><a href="/state/south-dakota" title="View South Dakota Government">SD</a></li>
                    <li><a href="/state/tennessee" title="View Tennessee Government">TN</a></li>
                    <li><a href="/state/texas" title="View Texas Government">TX</a></li>
                    <li><a href="/state/utah" title="View Utah Government">UT</a></li>
                    <li><a href="/state/virginia" title="View Virginia Government">VA</a></li>
                    <li><a href="/state/vermont" title="View Vermont Government">VT</a></li>
                    <li><a href="/state/washington" title="View Washington Government">WA</a></li>
                    <li><a href="/state/wisconsin" title="View Wisconsin Government">WI</a></li>
                    <li><a href="/state/west-virginia" title="View West Virginia Government">WV</a></li>
                    <li><a href="/state/wyoming" title="View Wyoming Government">WY</a></li>
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
    plugins.href = '<?= $media_path ?>/assets/css/plugins.css';

    var styles = document.createElement('link');
    styles.rel = 'stylesheet';
    styles.href = '<?= $media_path ?>/assets/css/style.css';

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

<script src="<?= $media_path ?>/assets/js/plugins.js"></script>
<script src="<?= $media_path ?>/assets/js/site.js"></script>

<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->