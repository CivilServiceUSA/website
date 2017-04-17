@extends('layouts.base')

@section('body')

<!-- Header-->
<header data-background="{{ $state->skyline->size_1280x720 }}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>My Elected Officials</h1>
        <h4>Contact Information &amp; Political History.</h4>
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
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/my-elected-officials" {!! trackData('Nav', 'Breadcrumb', 'My Elected Officials') !!}>
                            <span itemprop="name">My Elected Officials</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/my-elected-officials/{{ $breadcrumb->url }}" {!! trackData('Nav', 'Breadcrumb', 'My Elected Officials ' . $breadcrumb->name) !!}>
                            <span itemprop="name">{{ $breadcrumb->name }}</span>
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
                <h3>My U.S. Representatives</h3>
                <p>This is <strong>Your U.S. Representative</strong> in the state of <strong>{{ $state->state_name }}</strong>.</p>
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

<section>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <h3>My U.S. Senators</h3>
                <p>These are <strong>Your U.S. Senators</strong> in the state of <strong>{{ $state->state_name }}</strong>.</p>
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

@endsection
