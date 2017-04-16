@extends('layouts.base')

@section('body')
<!-- Header-->
<header data-background="{{ $state->skyline->size_1280x720 }}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>{{ $state->state_name }}</h1>
        <h4>Cities &amp; Zip Codes</h4>
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
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/state">
                            <span itemprop="name">State</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/state/{{ $state->state_name_slug }}">
                            <span itemprop="name">{{ $state->state_name }}</span>
                        </a>
                        <meta itemprop="position" content="3" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/state/{{ $state->state_name_slug }}/zip-codes">
                            <span itemprop="name">Zip Codes</span>
                        </a>
                        <meta itemprop="position" content="4" />
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <h3>{{ $state->state_name }} Cities &amp; Zip Codes</h3>
                <p>Select a City in {{ $state->state_name }} to view a list of Zip Codes within that city.  Clicking a Zip Code will take you to the Elected Officials representing that area.</p>
            </div>
        </div>
        <div class="row component-cities">
            <?php $key=0; foreach ($cities as $city => $zip_codes): $key++; ?>
                <div class="col-md-3">
                    <div role="tablist" aria-multiselectable="true" class="panel-group">
                        <div class="panel panel-default">
                            <div id="heading{{ $key }}" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" title="View Zip Codes for {{ $city }}, {{ $state->state_name }}" data-toggle="collapse" data-parent="#z{{ $key }}" href="#z{{ $key }}" aria-expanded="false" aria-controls="z{{ $key }}">
                                        {{ $city }}
                                    </a>
                                </h4>
                            </div>
                            <div id="z{{ $key }}" role="tabpanel" aria-labelledby="heading{{ $key }}" class="panel-collapse collapse" aria-expanded="true">
                                <div class="panel-body">
                                    <ul>
                                        <?php foreach ($zip_codes as $zip_code): ?>
                                        <li>
                                            <a title="View Elected Officials for {{ $city }}, {{ $state->state_name }} {{ $zip_code }}" href="/my-elected-officials/zipcode/{{ $zip_code }}">{{ $zip_code }}</a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(($key) % 4 === 0) { echo '</div><div class="row component-cities">'; } ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

@endsection
