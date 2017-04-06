@extends('layouts.base')

@section('body')

    <!-- Header-->
    <header data-background="{{ asset('img/header/us-senate.jpg') }}" class="intro introhalf">
        <!-- Intro Header-->
        <div class="intro-body">
            <h1>United States Senate</h1>
            <h4>115th United States Congress</h4>
        </div>
    </header>

    <div class="section section-breadcrumb">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="breadcrumb">
                        <a href="/">Home</a> / US Senate
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
                    <h3>United States Senate</h3>
                    <p class="no-pad">Select a State to access Government &amp; Demographic data on the 115th United States Senate. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
                    <h2 class="classic">Civil Services Team</h2>
                </div>
                <div class="col-lg-5 col-lg-offset-1">
                    @include('partials.map', ['base' => '/us-senate'])
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container filter-list">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="show">Senate Lists</h4>
                    <ul>
                        <li><a href="/us-senate/list/democratic-party">Democratic Senators</a></li>
                        <li><a href="/us-senate/list/independent-party">Independent Senators</a></li>
                        <li><a href="/us-senate/list/republican-party">Republican Senators</a></li>
                        <li><a href="/us-senate/list/class-i">Class I Senators</a></li>
                        <li><a href="/us-senate/list/class-ii">Class II Senators</a></li>
                        <li><a href="/us-senate/list/class-iii">Class III Senators</a></li>
                        <li><a href="/us-senate/list/female-senators">Female Senators</a></li>
                        <li><a href="/us-senate/list/male-senators">Male Senators</a></li>
                        <li><a href="/us-senate/list/majority-leaders">Senate Majority Leaders</a></li>
                        <li><a href="/us-senate/list/minority-leaders">Senate Minority Leaders</a></li>
                        <li><a href="/us-senate/list/african-american-senators">African American Senators</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>&nbsp;</h4>
                    <ul>
                        <li><a href="/us-senate/list/asian-american-senators">Asian American Senators</a></li>
                        <li><a href="/us-senate/list/hispanic-american-senators">Hispanic American Senators</a></li>
                        <li><a href="/us-senate/list/white-american-senators">White American Senators</a></li>
                        <li><a href="/us-senate/list/baptist-senators">Baptist Senators</a></li>
                        <li><a href="/us-senate/list/buddhist-senators">Buddhist Senators</a></li>
                        <li><a href="/us-senate/list/christian-senators">Christian Senators</a></li>
                        <li><a href="/us-senate/list/church-of-christ-senators">Church of Christ Senators</a></li>
                        <li><a href="/us-senate/list/church-of-god-senators">Church of God Senators</a></li>
                        <li><a href="/us-senate/list/congregationalist-senators">Congregationalist Senators</a></li>
                        <li><a href="/us-senate/list/deist-senators">Deist Senators</a></li>
                        <li><a href="/us-senate/list/episcopalian-senators">Episcopalian Senators</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>&nbsp;</h4>
                    <ul>
                        <li><a href="/us-senate/list/evangelical-senators">Evangelical Senators</a></li>
                        <li><a href="/us-senate/list/evangelical-lutheran-senators">Evangelical Lutheran Senators</a></li>
                        <li><a href="/us-senate/list/jewish-senators">Jewish Senators</a></li>
                        <li><a href="/us-senate/list/lutheran-senators">Lutheran Senators</a></li>
                        <li><a href="/us-senate/list/methodist-senators">Methodist Senators</a></li>
                        <li><a href="/us-senate/list/mormon-senators">Mormon Senators</a></li>
                        <li><a href="/us-senate/list/presbyterian-senators">Presbyterian Senators</a></li>
                        <li><a href="/us-senate/list/protestant-senators">Protestant Senators</a></li>
                        <li><a href="/us-senate/list/roman-catholic-senators">Roman Catholic Senators</a></li>
                        <li><a href="/us-senate/list/southern-baptist-senators">Southern Baptist Senators</a></li>
                        <li><a href="/us-senate/list/united-church-of-christ-senators">United Church of Christ Senators</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
