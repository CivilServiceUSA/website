@extends('layouts.base')

@section('body')

<!-- Header-->
<header data-background="{{ asset('img/header/statue-of-liberty.jpg') }}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>State Government</h1>
        <h4>Find Information on Your State</h4>
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
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/state" {!! trackData('Nav', 'Breadcrumb', 'State') !!}>
                            <span itemprop="name">State</span>
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
                <h3>State Government</h3>
                <p class="no-pad">Select a State to access Government &amp; Demographic data.  We also provide a Phone Number, Mailing Address, Official Website, Twitter & Facebook Accounts of each State Senator &amp; House Representative.  In the next few months, we will be providing access to State Legislators, Bills & Votes on Legislation.</p>
                <h2 class="classic">- Civil Services Team</h2>
            </div>
            <div class="col-lg-5 col-lg-offset-1">
                @include('partials.map', ['base' => '/state'])
            </div>
        </div>
    </div>
</section>

@endsection
