@extends('layouts.base')

@section('body')

    <!-- Header-->
    <header data-background="{{ asset('img/header/us-house.jpg') }}" class="intro introhalf">
        <!-- Intro Header-->
        <div class="intro-body">
            <h1>House of Representatives</h1>
            <h4>115th United States Congress</h4>
        </div>
    </header>

    <div class="section section-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
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
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider-->
    <section id="about" class="section-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>U.S. House of Representatives</h3>
                    <p class="no-pad">Select a State to access Government &amp; Demographic data on the 115th United States House of Representatives. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
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
