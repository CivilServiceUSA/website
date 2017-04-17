@extends('layouts.base')

@section('body')

    <!-- Header-->
    <header data-background="{{ asset('img/header/us-senate.jpg') }}" class="intro introhalf">
        <!-- Intro Header-->
        <div class="intro-body">
            <h1>{{ titleCase($filter) }}</h1>
            <h4>115th United States Congress - U.S. Senate</h4>
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
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-senate/{{ $filter }}" {!! trackData('Nav', 'Breadcrumb', 'U.S. Senate ' . titleCase($filter)) !!}>
                                <span itemprop="name">{{ titleCase($filter) }}</span>
                            </a>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h3>{{ str_replace('Senators', '', titleCase($filter)) }} Senators</h3>
                    <p>There are 100 senators, two from each of the 50 U.S. states. This is a list of the <strong>{{ count($senators) }} {{ str_replace('Senators', '', titleCase($filter)) }} Senators</strong> of the United States Senate (115th United States Congress).</p>
                </div>
            </div>
            <div class="row">
                @foreach ($senators as $key => $senator)
                    @if (count($senators) === 1)
                        @include('partials.senators', [
                          'senators' => $senators,
                          'classes' => 'col-md-6 col-sm-6 col-md-offset-3',
                          'offset' => '',
                          'key' => $key
                        ])
                    @elseif(count($senators) === 2)
                        @include('partials.senators', [
                          'senators' => $senators,
                          'classes' => 'col-md-4 col-sm-6',
                          'offset' => 'col-md-offset-2',
                          'key' => $key
                        ])
                    @elseif(count($senators) === 3)
                        @include('partials.senators', [
                          'senators' => $senators,
                          'classes' => 'col-md-2 col-sm-6',
                          'offset' => 'col-md-offset-3',
                          'key' => $key
                        ])
                    @elseif(count($senators) === 4)
                        @include('partials.senators', [
                          'senators' => $senators,
                          'classes' => 'col-md-2 col-sm-6',
                          'offset' => 'col-md-offset-2',
                          'key' => $key
                        ])
                    @elseif(count($senators) >= 5)
                        @include('partials.senators', [
                          'senators' => $senators,
                          'classes' => 'col-md-2 col-sm-6',
                          'offset' => 'col-md-offset-1',
                          'key' => $key
                        ])
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- Slider-->
    <section id="about" class="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>United States Senate</h3>
                    <p class="no-pad">Select a State to access Government &amp; Demographic data on the 115th United States Senate. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
                    <h2 class="classic">- Civil Services Team</h2>
                </div>
                <div class="col-lg-5 col-lg-offset-1">
                    @include('partials.map', ['base' => '/us-senate'])
                </div>
            </div>
        </div>
    </section>

    @include('partials.senate-lists')

@endsection
