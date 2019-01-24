@extends('layouts.base')

@section('body')

    <!-- Header-->
    <header data-background="{{ $senator->photo_url_sizes->size_1024x1024 }}" class="intro introhalf background-top">
        <!-- Intro Header-->
        <div class="intro-body">
            <h1>{{ $senator->name }}</h1>
            <h4>{{ titleCase($senator->state_name) }} {{ titleCase($senator->party) }} {{ titleCase($senator->title) }}</h4>
        </div>
    </header>

    <div class="section section-breadcrumb">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb component-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/" {!! trackData('Nav', 'Breadcrumb', 'Home') !!}>
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-senate" {!! trackData('Nav', 'Breadcrumb', 'U.S. Senate') !!}>
                                <span itemprop="name">U.S. Senate</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-senate/{{ $slug }}" {!! trackData('Nav', 'Breadcrumb', 'U.S. Senate ' . titleCase($slug) . ' Senators') !!}>
                                <span itemprop="name">{{ titleCase($slug) }} Senators</span>
                            </a>
                            <meta itemprop="position" content="3" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-senate/{{ $slug }}/senator/{{ $senator->name_slug }}" {!! trackData('Nav', 'Breadcrumb', 'U.S. Senator ' . $senator->name) !!}>
                                <span itemprop="name">{{ $senator->name }}</span>
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
                        <a href="{{ $senator->photo_url_sizes->size_1024x1024 }}" data-lightbox="senator" {!! trackData('U.S. Senate', 'Image', $senator->name) !!}>
                            <img src="{{ $senator->photo_url_sizes->size_1024x1024 }}" onerror="this.src='/img/no-photo.jpg';this.onerror=null;" alt="{{ titleCase($senator->title) }}" class="img-responsive center-block">
                        </a>
                    </div>
                    <div class="contact-buttons text-center">
                        <a href="{{ $senator->website }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="Visit {{ $senator->name }}'s Official Website" {!! trackData('U.S. Senate', 'Website', $senator->name) !!}>
                            <i class="fa fa-external-link-square fa-fw fa-lg"></i>
                        </a>
                        <a href="{{ $senator->contact_page }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="Contact {{ $senator->name }}" {!! trackData('U.S. Senate', 'Email', $senator->name) !!}>
                            <i class="fa fa-envelope fa-fw fa-lg"></i>
                        </a>
                        <a href="tel:{{ str_replace('-', '', $senator->phone) }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="Call {{ $senator->name }}" {!! trackData('U.S. Senate', 'Phone', $senator->name) !!}>
                            <i class="fa fa-phone fa-fw fa-lg"></i>
                        </a>
                        <a href="{{ $senator->twitter_url }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="View {{ $senator->name }}'s Twitter Profile" {!! trackData('U.S. Senate', 'Twitter', $senator->name) !!}>
                            <i class="fa fa-twitter fa-fw fa-lg"></i>
                        </a>
                        <a href="{{ $senator->facebook_url }}" target="_blank" rel="noreferrer" class="btn btn-gray btn-lg" title="View {{ $senator->name }}'s Facebook Profile" {!! trackData('U.S. Senate', 'Facebook', $senator->name) !!}>
                            <i class="fa fa-facebook fa-fw fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-1">
                    <h3>Senator {{ $senator->name }}</h3>
                    <h4>{{ titleCase($senator->state_name) }} {{ titleCase($senator->party) }} {{ titleCase($senator->title) }}</h4>
                    <p class="no-pad">{{ $senator->biography }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Information & Social Section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>{{ $senator->first_name }}'s Information</h3>

                    <?php if($senator->name): ?>
                    <h5>
                        <i class="fa fa-id-badge fa-fw fa-lg"></i>
                        Name:&nbsp; {{ $senator->name }} &nbsp;
                        <a href="javascript:void(0);" title="Hear how to Pronounce {{ $senator->name }}'s Name" onclick="CivilServices.speak('{{ $senator->name }}'); this.blur(); return false;" class="speak-text" {!! trackData('U.S. Senate', 'Pronounce', $senator->name) !!}><i class="fa fa-volume-up fa-fw fa-lg"></i></a>
                    </h5>
                    <?php endif; ?>

                    <?php if($senator->party): ?>
                    <h5>
                        <i class="fa fa-university fa-fw fa-lg"></i>
                        Party:&nbsp; {{ $senator->party }}
                    </h5>
                    <?php endif; ?>

                    <?php if($senator->title): ?>
                    <h5>
                        <i class="fa fa-tag fa-fw fa-lg"></i>
                        Title:&nbsp; {{ $senator->title }}
                    </h5>
                    <?php endif; ?>

                    <?php if($senator->class): ?>
                    <h5>
                        <i class="fa fa-bookmark fa-fw fa-lg"></i>
                        Class:&nbsp; {{ $senator->class }}
                    </h5>
                    <?php endif; ?>

                    <hr>

                    <?php if($senator->date_of_birth): ?>
                    <h5>
                        <i class="fa fa-birthday-cake fa-fw fa-lg"></i>
                        Date of Birth:&nbsp; {{ date_format(date_create($senator->date_of_birth), 'F jS, Y') }}
                        <small>( Age {{ $senator->age }} )</small>
                    </h5>
                    <?php endif; ?>

                    <?php if($senator->entered_office): ?>
                    <h5>
                        <i class="fa fa-sign-in fa-fw fa-lg"></i>
                        Entered Office:&nbsp; {{ date_format(date_create($senator->entered_office), 'F jS, Y') }}
                    </h5>
                    <?php endif; ?>

                    <?php if($senator->term_end): ?>
                    <h5>
                        <i class="fa fa-sign-out fa-fw fa-lg"></i>
                        Term Ends:&nbsp; {{ date_format(date_create($senator->term_end), 'F jS, Y') }}
                    </h5>
                    <?php endif; ?>

                </div>

                <div class="col-md-5 col-md-offset-2">
                    <h3>{{ $senator->first_name }}'s Social Media</h3>

                <?php if(isset($senator->facebook_url) && isset($senator->twitter_url)): ?>
                <!-- Nav tabs-->
                    <ul role="tablist" class="nav nav-tabs">
                        <?php if($senator->twitter_url): ?>
                        <li role="presentation" class="active">
                            <a href="#twitter_tab" aria-controls="twitter_tab" role="tab" data-toggle="tab" {!! trackData('Nav', 'Tab', 'Twitter') !!}><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                        </li>
                        <?php endif; ?>
                        <?php if($senator->facebook_url): ?>
                        <li role="presentation"<?php if(empty($senator->facebook_url)) echo ' class="active"'; ?>>
                            <a href="#facebook_tab" aria-controls="facebook_tab" role="tab" data-toggle="tab" {!! trackData('Nav', 'Tab', 'Facebook') !!}><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                        </li>
                        <?php endif; ?>
                    </ul>

                    <!-- Tab panes-->
                    <div class="tab-content">
                        <?php if($senator->twitter_url): ?>
                        <div id="twitter_tab" role="tabpanel" class="tab-pane fade in active">
                            <a class="twitter-timeline" data-height="400" data-dnt="true" data-theme="light" data-link-color="#2B7BB9" href="{{ $senator->twitter_url }}" {!! trackData('U.S. Senate', 'Twitter', $senator->name) !!}>
                                Loading Tweets from {{ $senator->name }} ...
                            </a>
                            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <?php endif; ?>
                        <?php if($senator->facebook_url): ?>
                        <div id="facebook_tab" role="tabpanel" class="tab-pane fade<?php if(empty($senator->facebook_url)) echo ' in active'; ?>">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1653504908282179";
                                fjs.parentNode.insertBefore(js, fjs);
                              }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-page" data-href="{{ $senator->facebook_url }}>" data-tabs="timeline, events" data-hide-cta="true" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                                <blockquote cite="{{ $senator->facebook_url }}>" class="fb-xfbml-parse-ignore" {!! trackData('U.S. Senate', 'Facebook', $senator->name) !!}>
                                    <a href="{{ $senator->facebook_url }}>">
                                        Loading Facebook from {{ $senator->name }} ...
                                    </a>
                                </blockquote>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php else: ?>

                    <p>{{ $senator->name }} does not have either a Twitter or Facebook Account.</p>

                    <span class="badge btn-dark-border"><i class="fa fa-fw fa-hashtag"></i>anti-social</span>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3>Accountability in Action</h3>
                    <p>There are 100 senators, two from each of the 50 U.S. states. This is a list of the current {{ titleCase($slug) }} Senator's of the United States Senate (116th United States Congress).</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-group accountability">
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->elections }}" target="_blank" rel="noreferrer" title="View Congressional Elections for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Congressional Elections', $senator->name) !!}>
                                Congressional Elections
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->industries }}" target="_blank" rel="noreferrer" title="View Top Industries for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Top Industries', $senator->name) !!}>
                                Top Industries
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->pacs }}" target="_blank" rel="noreferrer" title="View Political Action Committees for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Political Action Committees', $senator->name) !!}>
                                Political Action Committees
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->donors }}" target="_blank" rel="noreferrer" title="View Top 20 Contributors for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Top 20 Contributors', $senator->name) !!}>
                                Top 20 Contributors
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->geography }}" target="_blank" rel="noreferrer" title="View Contributions by Geography for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Contributions by Geography', $senator->name) !!}>
                                Contributions by Geography
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->expenditures }}" target="_blank" rel="noreferrer" title="View Expenditures for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Expenditures', $senator->name) !!}>
                                Expenditures
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->opensecrets_url_tabs->legislation }}" target="_blank" rel="noreferrer" title="View Congress Legislation for {{ $senator->name }} on OpenStates.org" {!! trackData('U.S. Senate', 'Congress Legislation', $senator->name) !!}>
                                Congress Legislation
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-group accountability">
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->summary }}" target="_blank" rel="noreferrer" title="View Political Summary for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Political Summary', $senator->name) !!}>
                                Political Summary
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->bio }}" target="_blank" rel="noreferrer" title="View Political Biography for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Political Biography', $senator->name) !!}>
                                Political Biography
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->votes }}" target="_blank" rel="noreferrer" title="View Voting Records for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Voting Records', $senator->name) !!}>
                                Voting Records
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->positions }}" target="_blank" rel="noreferrer" title="View Issue Positions for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Issue Positions', $senator->name) !!}>
                                Issue Positions
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->ratings }}" target="_blank" rel="noreferrer" title="View Ratings &amp; Endorsements for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Ratings & Endorsements', $senator->name) !!}>
                                Ratings &amp; Endorsements
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->speeches }}" target="_blank" rel="noreferrer" title="View Public Statements for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Public Statements', $senator->name) !!}>
                                Public Statements
                                <span class="badge float-right">GO</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ $senator->votesmart_url_tabs->funding }}" target="_blank" rel="noreferrer" title="View Campaign Finances for {{ $senator->name }} on VoteSmart.org" {!! trackData('U.S. Senate', 'Campaign Finances', $senator->name) !!}>
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
                    <h3>United States Senate</h3>
                    <p class="no-pad">Select a State to access Government &amp; Demographic data on the 116th United States Senate. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-1">
                    @include('partials.map', ['base' => '/us-senate'])
                </div>
            </div>
        </div>
    </section>

    <!-- Structured Metadata -->
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "GovernmentOrganization",
          "name": "United States Senate",
          "member": {
            "@type": "OrganizationRole",
            "member": {
              "@type": "Person",
              "name": "{{ $senator->name }}",
              "gender": "{{ titleCase($senator->gender) }}",
              "birthDate": "{{ date_format(date_create($senator->date_of_birth), 'F jS, Y') }}",
              "image": "{{ $senator->photo_url_sizes->size_512x512 }}",
              "jobTitle": "{{ titleCase($senator->title) }}",
              "url": "{{ $senator->website }}",
              "description": "{{ $senator->biography }}",
              "telephone": "{{ $senator->phone }}",
              "sameAs": [
                "{{ $senator->contact_page }}",
                "{{ $senator->twitter_url }}",
                "{{ $senator->facebook_url }}",
                "{{ $senator->opensecrets_url }}",
                "{{ $senator->votesmart_url }}"
              ]
            },
            "startDate": "{{ date_format(date_create($senator->entered_office), 'F jS, Y') }}",
            "endDate": "{{ date_format(date_create($senator->term_end), 'F jS, Y') }}",
            "roleName": "{{ titleCase($senator->title) }}"
          }
        }
    </script>

    @include('partials.senate-lists')

@endsection
