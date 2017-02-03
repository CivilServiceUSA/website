@extends('layouts.base')

@section('body')
<!-- Header-->
<header data-background="{{ $state->landscape_background_url }}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>{{ $state->state }}</h1>
        <h4>Government Data &amp; Social Media</h4>
    </div>
</header>

<div class="section section-breadcrumb">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">
                <h6 class="breadcrumb">
                    <a href="/">Home</a> / <a href="/state/{{ $state->slug }}">State</a> / {{ $state->state }}
                </h6>
            </div>
        </div>
    </div>
</div>

<!-- Government Section-->
<section>
    <div class="container">
        <div class="row grid-pad">
            <div class="col-sm-6">
                <h3>United States Senate</h3>

                <a href="/senate/state/{{ $state->slug }}">
                    <img src="{{ asset('img/senate.png') }}" alt="" class="img-responsive center-block">
                    <h5>Contact {{ $state->state }} Senators</h5>
                </a>

                <p>Get Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts of {{ $state->state }} Senators.</p>

                <a href="/senate/state/{{ $state->slug }}" class="btn btn-success btn-lg">View Senators</a>
            </div>
            <div class="col-sm-6">
                <h3>House of Representatives</h3>

                <img src="{{ asset('img/house.png') }}" alt="" class="img-responsive center-block">
                <h5>Contact {{ $state->state }} House Members</h5>

                <p>We are currently collecting this information and will release it as soon as it is available.</p>

                <button class="btn btn-gray btn-lg" disabled="disabled">Coming Soon</button>
            </div>
        </div>
    </div>
</section>

<!-- Information & Social Section-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>Information</h3>
                <p>A variety of state specific facts and other useful information.</p>
                <hr>
                <?php if($state->state): ?><h5><i class="fa fa-map-marker fa-fw fa-lg"></i> State:&nbsp; {{ $state->state }}</h5><?php endif; ?>
                <?php if($state->nickname): ?><h5><i class="fa fa-bookmark-o fa-fw fa-lg"></i> Nickname:&nbsp; {{ $state->nickname }}</h5><?php endif; ?>
                <?php if($state->capital_city): ?><h5><i class="fa fa-university fa-fw fa-lg"></i> Capital City:&nbsp; <a href="{{ $state->capital_url }}" rel="noopener" title="Visit {{ $state->state }}'s Capital City">{{ $state->capital_city }}</a></h5><?php endif; ?>
                <hr>
                <?php if($state->population && $state->population_rank): ?><h5><i class="fa fa-user-circle-o fa-fw fa-lg"></i> Population:&nbsp; {{ number_format($state->population) }} <small>( {{ $state->population_rank }} / 50 )</small></h5><?php endif; ?>
                <?php if($state->admission_date && $state->admission_number): ?><h5><i class="fa fa-clock-o fa-fw fa-lg"></i> Admission:&nbsp; {{ date_format(date_create($state->admission_date), 'F jS, Y') }} <small>( {{ $state->admission_number }} / 50 )</small></h5><?php endif; ?>
                <?php if($state->constitution_url): ?><h5><i class="fa fa-gavel fa-fw fa-lg"></i> <a href="{{ $state->constitution_url }}" rel="noopener" title="Read {{ $state->state }}'s Constitution">{{ $state->state }}'s Constitution</a></h5><?php endif; ?>
                <hr>
                <h5><i class="fa fa-share-alt fa-fw fa-lg"></i> Links:&nbsp;
                <?php if($state->website): ?><a href="{{ $state->website }}" rel="noopener" title="Visit {{ $state->state }}'s Official Website"><i class="fa fa-fw fa-lg fa-external-link-square"></i></a><?php endif; ?>
                <?php if($state->twitter_url): ?><a href="{{ $state->twitter_url }}" rel="noopener" title="Visit {{ $state->state }}'s Official Twitter Page"><i class="fa fa-fw fa-lg fa-twitter-square"></i></a><?php endif; ?>
                <?php if($state->facebook_url): ?><a href="{{ $state->facebook_url }}" rel="noopener" title="Visit {{ $state->state }}'s Official Facebook Page"><i class="fa fa-fw fa-lg fa-facebook-square"></i></a><?php endif; ?>
                </h5>
            </div>

            <div class="col-md-5 col-md-offset-2">
                <h3>Social Media</h3>

            <?php if(isset($state->facebook_url) && isset($state->twitter_url)): ?>
                <!-- Nav tabs-->
                <ul role="tablist" class="nav nav-tabs">
                <?php if($state->twitter_url): ?>
                    <li role="presentation" class="active">
                        <a href="#twitter_tab" aria-controls="twitter_tab" role="tab" data-toggle="tab"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                    </li>
                <?php endif; ?>
                <?php if($state->facebook_url): ?>
                    <li role="presentation"<?php if(empty($state->facebook_url)) echo ' class="active"'; ?>>
                        <a href="#facebook_tab" aria-controls="facebook_tab" role="tab" data-toggle="tab"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                    </li>
                <?php endif; ?>
                </ul>

                <!-- Tab panes-->
                <div class="tab-content">
                <?php if($state->twitter_url): ?>
                    <div id="twitter_tab" role="tabpanel" class="tab-pane fade in active">
                        <a class="twitter-timeline" data-height="400" data-dnt="true" data-theme="light" data-link-color="#2B7BB9" href="{{ $state->twitter_url }}">
                            Loading Tweets from {{ $state->state }} ...
                        </a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                <?php endif; ?>
                <?php if($state->facebook_url): ?>
                    <div id="facebook_tab" role="tabpanel" class="tab-pane fade<?php if(empty($state->facebook_url)) echo ' in active'; ?>">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1653504908282179";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-page" data-href="{{ $state->facebook_url }}>" data-tabs="timeline, events" data-hide-cta="true" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                            <blockquote cite="{{ $state->facebook_url }}>" class="fb-xfbml-parse-ignore">
                                <a href="{{ $state->facebook_url }}>">
                                    Loading Facebook from {{ $state->state }} ...
                                </a>
                            </blockquote>
                        </div>
                    </div>
                <?php endif; ?>
                </div>

            <?php else: ?>

                <p>{{ $state->state }} does not have either a Twitter or Facebook Account.</p>

                <span class="badge btn-dark-border"><i class="fa fa-fw fa-hashtag"></i>anti-social</span>

            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Image Block-->
<section id="clients">
    <div class="container text-center">
        <div class="row grid-pad">
            <div class="col-sm-6 col-md-4">
                <h5>{{ $state->state }} Map</h5>
                <p><img src="{{ $state->map_image_url }}" alt="{{ $state->state }} Map Image" class="img-responsive center-block max-h-240" /></p>
            </div>
            <div class="col-sm-6 col-md-4">
                <h5>{{ $state->state }}'s State Flag</h5>
                <p><img src="{{ $state->state_flag_url }}" alt="{{ $state->state }}'s State Flag Image" class="img-responsive center-block max-h-240" /></p>
            </div>
            <div class="col-sm-6 col-md-4">
                <h5>{{ $state->state }}'s State Seal</h5>
                <p><img src="{{ $state->state_seal_url }}" alt="{{ $state->state }}'s State Seal Image" class="img-responsive center-block max-h-240" /></p>
            </div>
        </div>
    </div>
</section>
@endsection
