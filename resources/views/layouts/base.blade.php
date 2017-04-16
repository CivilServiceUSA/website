<!DOCTYPE html>
<html lang="en" class="{{ pageClass(Request::path()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ MetaTag::get('title') }}</title>

    <meta http-equiv="Content-Security-Policy" content="img-src * data:; default-src * 'self' gap: ws:; style-src 'self' 'unsafe-inline' data: https://ton.twimg.com http://platform.twitter.com https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://embed.githubusercontent.com https://embed.github.com http://d2wy8f7a9ursnm.cloudfront.net http://cdn.segment.com http://connect.facebook.net https://cdn.syndication.twimg.com http://platform.twitter.com http://www.google-analytics.com https://maps.googleapis.com https://www.google-analytics.com https://cdnjs.cloudflare.com https://services.us14.list-manage.com;">

    {!! MetaTag::tag('description') !!}{!! MetaTag::tag('keywords') !!}
    <meta name="author" content="Civil Services">
    <meta name="robots" content="noodp,noydir">
    <meta name="robots" content="index,follow">
    <meta name="coverage" content="worldwide">
    <meta name="cache-control" content="public">
    <meta name="googlebot" content="index,follow">

    <!-- Progressive Web App -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#1E72A1">

    <!-- Mobile Metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Civil Services">
    <meta name="application-name" content="Civil Services">

    <!-- Twitter Metadata -->
    {!! MetaTag::twitterCard() !!}
    <!-- Open Graph Metadata -->
    {!! MetaTag::openGraph() !!}
    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ asset('img/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icons/favicon-retina-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icons/favicon-retina-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icons/favicon-standard-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icons/favicon-standard-iphone.png') }}">

    <!-- Minimal CSS to prevent blocking page load -->
    <style>
    * {-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
    :after, :before {-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
    html, body {padding:0;margin:0;width:100%;height:100%;}
    body.loading {overflow:hidden;pointer-events:none;touch-action:none;}
    body.loading div.section, body.loading section {display:none;}
    #loading {width:100%;height:100%;background:#1e72a1;position:absolute;z-index:2000;top:0;right:0;bottom:0;left:0;pointer-events:none;touch-action:none;}
    #loading #preloader {position:relative;width:100%;height:80px;top:calc(50% - 50px);text-align:center;margin:0 auto}
    #loading #preloader:after {content:"Civil Services";position:absolute;text-transform:uppercase;font-size:12px;font-weight:400;color:#fff;letter-spacing:1px;font-family:"Raleway", "Helvetica Neue", "Lucida Grande", Arial, Verdana, sans-serif;top:90px;width:100%;left:0;right:0;height:1px;text-align:center}
    #loading #preloader span {position:absolute;border:8px solid #fff;border-top:8px solid transparent;border-radius:999px}
    #loading #preloader span:nth-child(1) {width:80px;height:80px;left:calc(50% - 40px);-webkit-animation:spin-1 1s infinite ease;-moz-animation:spin-1 1s infinite ease;animation:spin-1 1s infinite ease}
    #loading #preloader span:nth-child(2) {top:20px;left:calc(50% - 20px);width:40px;height:40px;-webkit-animation:spin-2 1s infinite ease;-moz-animation:spin-2 1s infinite ease;animation:spin-2 1s infinite ease}
    @-webkit-keyframes spin-1 {0% {-webkit-transform:rotate(360deg);opacity:1}50% {-webkit-transform:rotate(180deg);opacity:0.5}100% {-webkit-transform:rotate(0deg);opacity:1}}
    @-moz-keyframes spin-1 {0% {-moz-transform:rotate(360deg);opacity:1}50% {-moz-transform:rotate(180deg);opacity:0.5}100% {-moz-transform:rotate(0deg);opacity:1}}
    @keyframes spin-1 {0% {-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg);opacity:1}50% {-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg);opacity:0.5}100% {-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg);opacity:1}}
    @-webkit-keyframes spin-2 {0% {-webkit-transform:rotate(0deg);opacity:0.5}50% {-webkit-transform:rotate(180deg);opacity:1}100% {-webkit-transform:rotate(360deg);opacity:0.5}}
    @-moz-keyframes spin-2 {0% {-moz-transform:rotate(0deg);opacity:0.5}50% {-moz-transform:rotate(180deg);opacity:1}100% {-moz-transform:rotate(360deg);opacity:0.5}}
    @keyframes spin-2 {0% {-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-ms-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg);opacity:0.5}50% {-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg);opacity:1}100% {-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg);opacity:0.5}}
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top loading">

<!-- Page preloader -->
<div id="loading">
    <div id="preloader">
        <span></span>
        <span></span>
    </div>
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
