@extends('layouts.base')

@section('body')

<!-- Header-->
<header data-background="{{ asset('img/header/5.jpg') }}" class="intro introhalf">
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
                <h6 class="breadcrumb">
                    <a href="/">Home</a> / State
                </h6>
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
                <h2 class="classic">Civil Services Team</h2>
            </div>
            <div class="col-lg-5 col-lg-offset-1">
                @include('partials.map', ['base' => '/state'])
            </div>
        </div>
    </div>
</section>

@endsection
