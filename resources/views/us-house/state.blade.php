@extends('layouts.base')

@section('body')

    <!-- Header-->
    <header data-background="{{ $state->landscape->size_1280x720 }}" class="intro introhalf">
        <!-- Intro Header-->
        <div class="intro-body">
            <h1>{{ titleCase($slug) }} Representatives</h1>
            <h4>116th United States Congress - U.S. House of Representatives</h4>
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
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-house" {!! trackData('Nav', 'Breadcrumb', 'U.S. House') !!}>
                                <span itemprop="name">U.S. House</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/us-house/{{ $slug }}" {!! trackData('Nav', 'Breadcrumb', 'U.S. House ' . titleCase($slug)) !!}>
                                <span itemprop="name">{{ titleCase($slug) }} Representatives</span>
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
                    <h3>{{ titleCase($slug) }} Representatives</h3>
                    <p>There are 435 Representatives, who sit in congressional districts which are allocated to each of the 50 U.S states. This is a list of the current {{ titleCase($slug) }} Representatives's of the United States House of Representatives (116th United States Congress).</p>
                </div>
            </div>
            <div class="row">
                @foreach ($representatives as $key => $representative)
                    @if (count($representatives) === 1)
                      @include('partials.representatives', [
                        'representatives' => $representatives,
                        'classes' => 'col-md-6 col-sm-6 col-md-offset-3',
                        'offset' => '',
                        'key' => $key
                      ])
                    @elseif(count($representatives) === 2)
                      @include('partials.representatives', [
                        'representatives' => $representatives,
                        'classes' => 'col-md-4 col-sm-6',
                        'offset' => 'col-md-offset-2',
                        'key' => $key
                      ])
                    @elseif(count($representatives) === 3)
                      @include('partials.representatives', [
                        'representatives' => $representatives,
                        'classes' => 'col-md-2 col-sm-6',
                        'offset' => 'col-md-offset-3',
                        'key' => $key
                      ])
                    @elseif(count($representatives) === 4)
                      @include('partials.representatives', [
                        'representatives' => $representatives,
                        'classes' => 'col-md-2 col-sm-6',
                        'offset' => 'col-md-offset-2',
                        'key' => $key
                      ])
                    @elseif(count($representatives) >= 5)
                      @include('partials.representatives', [
                        'representatives' => $representatives,
                        'classes' => 'col-md-2 col-sm-6',
                        'offset' => 'col-md-offset-1',
                        'key' => $key
                      ])
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="about" class="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>U.S. House of Representatives</h3>
                    <p class="no-pad">Select a State to access Government &amp; Demographic data on the 116th United States House of Representatives. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
                    <h2 class="classic">- Civil Services Team</h2>
                </div>
                <div class="col-lg-5 col-lg-offset-1">
                    @include('partials.map', ['base' => '/us-house'])
                </div>
            </div>
        </div>
    </section>

    @include('partials.house-lists')

@endsection
