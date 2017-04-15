@extends('layouts.base')

@section('body')

    <!-- Header-->
    <header data-background="{{ $representative->photo_url_sizes->size_1024x1024 }}" class="intro introhalf background-top">
        <!-- Intro Header-->
        <div class="intro-body">
            <h1>{{ $representative->name }}</h1>
            <h4>{{ titleCase($representative->state_name) }} {{ titleCase($representative->party) }} {{ titleCase($representative->title) }}</h4>
        </div>
    </header>

    <div class="section section-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb component-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-house">
                                <span itemprop="name">U.S. House</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-house/{{ $slug }}">
                                <span itemprop="name">{{ titleCase($slug) }} Representatives</span>
                            </a>
                            <meta itemprop="position" content="3" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-house/{{ $slug }}/{{ $representative->name_slug }}">
                                <span itemprop="name">{{ $representative->name }}</span>
                            </a>
                            <meta itemprop="position" content="4" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section iclass="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div>
                        <a href="{{ $representative->photo_url_sizes->size_1024x1024 }}" data-lightbox="representative">
                            <img src="{{ $representative->photo_url_sizes->size_1024x1024 }}" onerror="this.src='/img/no-photo.jpg';this.onerror=null;" alt="{{ titleCase($representative->title) }}" class="img-responsive center-block">
                        </a>
                    </div>
                    <div class="contact-buttons text-center">
                        <a href="{{ $representative->website }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="Visit {{ $representative->name }}'s Official Website">
                            <i class="fa fa-external-link-square fa-fw fa-lg"></i>
                        </a>
                        <a href="{{ $representative->contact_page }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="Contact {{ $representative->name }}">
                            <i class="fa fa-envelope fa-fw fa-lg"></i>
                        </a>
                        <a href="tel:{{ str_replace('-', '', $representative->phone) }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="Call {{ $representative->name }}">
                            <i class="fa fa-phone fa-fw fa-lg"></i>
                        </a>
                        <a href="{{ $representative->twitter_url }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="View {{ $representative->name }}'s Twitter Profile">
                            <i class="fa fa-twitter fa-fw fa-lg"></i>
                        </a>
                        <a href="{{ $representative->facebook_url }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="View {{ $representative->name }}'s Facebook Profile">
                            <i class="fa fa-facebook fa-fw fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-1">
                    <h3>Representative {{ $representative->name }}</h3>
                    <h4>{{ titleCase($representative->state_name) }} {{ titleCase($representative->party) }} {{ titleCase($representative->title) }}</h4>
                    <p class="no-pad">{{ $representative->biography }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Information & Social Section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>{{ $representative->first_name }}'s Information</h3>

                    <?php if($representative->name): ?>
                    <h5>
                        <i class="fa fa-id-badge fa-fw fa-lg"></i>
                        Name:&nbsp; {{ $representative->name }} &nbsp;
                        <a href="javascript:void(0);" title="Hear how to Pronounce {{ $representative->name }}'s Name" onclick="CivilServices.speak('{{ $representative->name }}'); this.blur(); return false;" class="speak-text"><i class="fa fa-volume-up fa-fw fa-lg"></i></a>
                    </h5>
                    <?php endif; ?>

                    <?php if($representative->party): ?>
                    <h5>
                        <i class="fa fa-university fa-fw fa-lg"></i>
                        Party:&nbsp; {{ $representative->party }}
                    </h5>
                    <?php endif; ?>

                    <?php if($representative->title): ?>
                    <h5>
                        <i class="fa fa-tag fa-fw fa-lg"></i>
                        Title:&nbsp; {{ $representative->title }}
                    </h5>
                    <?php endif; ?>

                    <?php if($representative->district): ?>
                    <h5>
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                        District:&nbsp; {{ $representative->district }}
                    </h5>
                    <?php endif; ?>

                    <?php if($representative->at_large): ?>
                    <h5>
                        <i class="fa fa-map-marker fa-fw fa-lg"></i>
                        District:&nbsp; At-Large
                    </h5>
                    <?php endif; ?>

                    <hr>

                    <?php if($representative->date_of_birth): ?>
                    <h5>
                        <i class="fa fa-birthday-cake fa-fw fa-lg"></i>
                        Date of Birth:&nbsp; {{ date_format(date_create($representative->date_of_birth), 'F jS, Y') }}
                        <small>( Age {{ $representative->age }} )</small>
                    </h5>
                    <?php endif; ?>

                    <?php if($representative->entered_office): ?>
                    <h5>
                        <i class="fa fa-sign-in fa-fw fa-lg"></i>
                        Entered Office:&nbsp; {{ date_format(date_create($representative->entered_office), 'F jS, Y') }}
                    </h5>
                    <?php endif; ?>

                    <?php if($representative->term_end): ?>
                    <h5>
                        <i class="fa fa-sign-out fa-fw fa-lg"></i>
                        Term Ends:&nbsp; {{ date_format(date_create($representative->term_end), 'F jS, Y') }}
                    </h5>
                    <?php endif; ?>

                </div>

                <div class="col-md-5 col-md-offset-2">
                    <h3>{{ $representative->first_name }}'s Social Media</h3>

                <?php if(isset($representative->facebook_url) && isset($representative->twitter_url)): ?>
                <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs">
                        <?php if($representative->twitter_url): ?>
                        <li role="presentation" class="active">
                            <a href="#twitter_tab" aria-controls="twitter_tab" role="tab" data-toggle="tab"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                        </li>
                        <?php endif; ?>
                        <?php if($representative->facebook_url): ?>
                        <li role="presentation"<?php if(empty($representative->facebook_url)) echo ' class="active"'; ?>>
                            <a href="#facebook_tab" aria-controls="facebook_tab" role="tab" data-toggle="tab"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <!-- Tab panes-->
                    <div class="tab-content">
                        <?php if($representative->twitter_url): ?>
                        <div id="twitter_tab" role="tabpanel" class="tab-pane fade in active">
                            <a class="twitter-timeline" data-height="400" data-dnt="true" data-theme="light" data-link-color="#2B7BB9" href="{{ $representative->twitter_url }}">
                                Loading Tweets from {{ $representative->name }} ...
                            </a>
                            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <?php endif; ?>
                        <?php if($representative->facebook_url): ?>
                        <div id="facebook_tab" role="tabpanel" class="tab-pane fade<?php if(empty($representative->facebook_url)) echo ' in active'; ?>">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1653504908282179";
                                fjs.parentNode.insertBefore(js, fjs);
                              }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-page" data-href="{{ $representative->facebook_url }}>" data-tabs="timeline, events" data-hide-cta="true" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                                <blockquote cite="{{ $representative->facebook_url }}>" class="fb-xfbml-parse-ignore">
                                    <a href="{{ $representative->facebook_url }}>">
                                        Loading Facebook from {{ $representative->name }} ...
                                    </a>
                                </blockquote>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php else: ?>

                    <p>{{ $representative->name }} does not have either a Twitter or Facebook Account.</p>

                    <span class="badge btn-dark-border"><i class="fa fa-fw fa-hashtag"></i>anti-social</span>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-small">
        <div class="container">
            <div class="row text-center component-district-map">
                <h3>Representative Area</h3>
                <?php if($representative->district): ?>
                    <script src="https://embed.github.com/view/geojson/CivilServiceUSA/us-house/dev/us-house/geojson/us-house-{{ $representative->state_code_slug }}-{{ $representative->district }}.geojson"></script>
                <?php else: ?>
                    <script src="https://embed.github.com/view/geojson/CivilServiceUSA/us-house/dev/us-house/geojson/us-house-{{ $representative->state_code_slug }}.geojson"></script>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3>Accountability in Action</h3>
                    <p>There are 435 Representatives, who sit in congressional districts which are allocated to each of the 50 U.S states. This is a list of the current {{ titleCase($slug) }} Representatives's of the United States House of Representatives (115th United States Congress).</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-group accountability">
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->elections }}" target="_blank" rel="noreferrer" title="View Congressional Elections for {{ $representative->name }} on OpenStates.org">
                                Congressional Elections
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->industries }}" target="_blank" rel="noreferrer" title="View Top Industries for {{ $representative->name }} on OpenStates.org">
                                Top Industries
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->pacs }}" target="_blank" rel="noreferrer" title="View Political Action Committees for {{ $representative->name }} on OpenStates.org">
                                Political Action Committees
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->donors }}" target="_blank" rel="noreferrer" title="View Top 20 Contributors for {{ $representative->name }} on OpenStates.org">
                                Top 20 Contributors
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->geography }}" target="_blank" rel="noreferrer" title="View Contributions by Geography for {{ $representative->name }} on OpenStates.org">
                                Contributions by Geography
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->expenditures }}" target="_blank" rel="noreferrer" title="View Expenditures for {{ $representative->name }} on OpenStates.org">
                                Expenditures
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->opensecrets_url_tabs->legislation }}" target="_blank" rel="noreferrer" title="View Congress Legislation for {{ $representative->name }} on OpenStates.org">
                                Congress Legislation
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-group accountability">
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->summary }}" target="_blank" rel="noreferrer" title="View Political Summary for {{ $representative->name }} on VoteSmart.org">
                                Political Summary
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->bio }}" target="_blank" rel="noreferrer" title="View Political Biography for {{ $representative->name }} on VoteSmart.org">
                                Political Biography
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->votes }}" target="_blank" rel="noreferrer" title="View Voting Records for {{ $representative->name }} on VoteSmart.org">
                                Voting Records
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->positions }}" target="_blank" rel="noreferrer" title="View Issue Positions for {{ $representative->name }} on VoteSmart.org">
                                Issue Positions
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->ratings }}" target="_blank" rel="noreferrer" title="View Ratings &amp; Endorsements for {{ $representative->name }} on VoteSmart.org">
                                Ratings &amp; Endorsements
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->speeches }}" target="_blank" rel="noreferrer" title="View Public Statements for {{ $representative->name }} on VoteSmart.org">
                                Public Statements
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $representative->votesmart_url_tabs->funding }}" target="_blank" rel="noreferrer" title="View Campaign Finances for {{ $representative->name }} on VoteSmart.org">
                                Campaign Finances
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>U.S. House of Representatives</h3>
                    <p class="no-pad">Select a State to access Government &amp; Demographic data on the 115th United States House of Representatives. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-1">
                    @include('partials.map', ['base' => '/us-house'])
                </div>
            </div>
        </div>
    </section>

    <!-- Structured Metadata -->
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "GovernmentOrganization",
          "name": "United States House of Representatives",
          "member": {
            "@type": "OrganizationRole",
            "member": {
              "@type": "Person",
              "name": "{{ $representative->name }}",
              "gender": "{{ titleCase($representative->gender) }}",
              "birthDate": "{{ date_format(date_create($representative->date_of_birth), 'F jS, Y') }}",
              "image": "{{ $representative->photo_url_sizes->size_512x512 }}",
              "jobTitle": "{{ titleCase($representative->title) }}",
              "url": "{{ $representative->website }}",
              "description": "{{ $representative->biography }}",
              "telephone": "{{ $representative->phone }}",
              "sameAs": [
                "{{ $representative->contact_page }}",
                "{{ $representative->twitter_url }}",
                "{{ $representative->facebook_url }}",
                "{{ $representative->opensecrets_url }}",
                "{{ $representative->votesmart_url }}"
              ]
            },
            "startDate": "{{ date_format(date_create($representative->entered_office), 'F jS, Y') }}",
            "endDate": "{{ date_format(date_create($representative->term_end), 'F jS, Y') }}",
            "roleName": "{{ titleCase($representative->title) }}"
          }
        }
    </script>

    @include('partials.house-lists')

@endsection
