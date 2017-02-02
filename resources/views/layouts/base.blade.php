<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ meta('title') }}</title>

    <meta http-equiv="Content-Security-Policy" content="img-src * data:; default-src * 'self' gap: ws:; style-src 'self' 'unsafe-inline' https://ton.twimg.com http://platform.twitter.com https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' http://connect.facebook.net https://cdn.syndication.twimg.com http://platform.twitter.com http://www.google-analytics.com https://maps.googleapis.com https://www.google-analytics.com https://cdnjs.cloudflare.com;">

    <meta name="description" content="{{ meta('description') }}">
    <meta name="keywords" content="{{ meta('keywords') }}" />
    <meta name="author" content="Civil Services">
    <meta name="robots" content="noodp,noydir">
    <meta name="robots" content="index,follow">
    <meta name="coverage" content="worldwide">
    <meta name="cache-control" content="public">
    <meta name="googlebot" content="index,follow">

    <!-- Mobile Metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Civil Services">
    <meta name="application-name" content="Civil Services">

    <!-- Twitter Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ meta('title') }}">
    <meta name="twitter:site" content="@CivilServiceUSA">
    <meta name="twitter:creator" content="@CivilServiceUSA">
    <meta name="twitter:description" content="{{ meta('description') }}">
    <meta name="twitter:image" content="{{ meta('image') }}">
    <meta name="twitter:image:alt" content="{{ meta('title') }}">
    <meta name="twitter:domain" content="civil.services">

    <!-- Open Graph Metadata -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ meta('title') }}">
    <meta property="og:url" content="https://civil.services">
    <meta property="og:image" content="{{ meta('image') }}">
    <meta property="og:site_name" content="Civil Services">
    <meta property="og:description" content="{{ meta('description') }}">

    <!-- Dublin Core Metadata -->
    <meta name="dc:language" content="en_US">
    <meta name="dc:title" content="{{ meta('title') }}">
    <meta name="dc:source" content="https://civil.services">
    <meta name="dc:description" content="{{ meta('description') }}">

    <!-- Structured Metadata -->
    <script type="application/ld+json">{{ meta('json_ld') }}</script>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/assets/img/icons/favicon-retina-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/img/icons/favicon-retina-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/img/icons/favicon-standard-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/assets/img/icons/favicon-standard-iphone.png') }}">

    <!-- Minimal CSS to prevent blocking page load -->
    <style>
        html, body { width: 100% !important; height: 100% !important; }
        body.loading nav, body.loading div, body.loading header, body.loading section { display: none; }
        body.loading #preloader { display: block; top: 0; left: 0; right: 0; bottom: 0; position: absolute; background-color: #fff; z-index: 99999; height: 100%; width: 100%; overflow: hidden; }
        body.loading #status { position: absolute; left: 47%; top: 50%; margin: auto; width: 49px; height: 49px; border-radius: 50%; display: inline-block; vertical-align: middle; background: #999; animation: 1.15s infinite ease-in-out; -webkit-animation: 1.15s infinite ease-in-out; -moz-animation: 1.15s infinite ease-in-out; animation-name: loader; -webkit-animation-name: loader; -moz-animation-name: loader; }
        body.loading #status:before, body.loading #status:after { width: 100%; height: 100%; border-radius: 50%; position: absolute; top: 0; left: 0; animation: 1.15s infinite ease-in-out; -webkit-animation: 1.15s infinite ease-in-out; -moz-animation: 1.15s infinite ease-in-out; }
        @keyframes loader { from { transform: scale(0); opacity: 1; } to { transform: scale(1); opacity: 0.5; } }
        @-ms-keyframes loader { from { -ms-transform: scale(0); opacity: 1; } to { -ms-transform: scale(1); opacity: 0.5; } }
        @-webkit-keyframes loader { from { -webkit-transform: scale(0); opacity: 1; } to { -webkit-transform: scale(1); opacity: 0.5; } }
        @-moz-keyframes loader { from { -moz-transform: scale(0); opacity: 1; } to { -moz-transform: scale(1); opacity: 0.5; } }
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top loading">

<!-- Preloader-->
<div id="preloader">
    <div id="status"></div>
</div>

@include('partials.header')

@yield('body')

<!-- Visit Website -->
<div class="section action section-small bg-gray2">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-9">
                <h3 class="no-pad"><i class="fa fa-fw fa-code"></i>&nbsp; We Open Source Our Data</h3>
            </div>
            <div class="col-md-3 text-right">
                <a href="https://github.com/CivilServiceUSA" class="btn btn-dark btn-lg wow fadeInDown">View  Our Github</a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

</body>
</html>
