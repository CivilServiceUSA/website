<!-- Navigation-->
<nav class="navbar navbar-universal navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle" {!! trackData('Nav', 'Header', 'Toggle Navigation') !!}>
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#page-top" class="navbar-brand page-scroll" {!! trackData('Nav', 'Header', 'Logo') !!}>
                <img src="{{ asset('img/logo-white.svg') }}" alt="Logo" class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="logo-short">
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden">
                    <a href="#page-top" {!! trackData('Nav', 'Header', 'Page Top') !!}></a>
                </li>
                <li>
                    <a href="/us-house" {!! trackData('Nav', 'Header', 'House') !!}>
                        House
                    </a>
                </li>
                <li>
                    <a href="/us-senate" {!! trackData('Nav', 'Header', 'Senate') !!}>
                        Senate
                    </a>
                </li>
                <li>
                    <a href="/my-elected-officials" {!! trackData('Nav', 'Header', 'My Elected Officials') !!}>
                        My Elected Officials
                    </a>
                </li>
                <li class="menu-divider visible-lg">&nbsp;</li>
                <li>
                    <a href="javascript:void(0);" class="toggle-search" {!! trackData('Nav', 'Header', 'Search') !!}>
                        <i class="fa fa-search fa-lg"></i>
                    </a>
                    <form method="post" class="search-form animated fadeIn" autocomplete="off" onsubmit="return false;">
                        <button type="button" title="Search" class="search-button" {!! trackData('Nav', 'Header', 'Search') !!}>
                            <i class="fa fa-search fa-lg"></i>
                        </button>
                        <input type="text" id="search" placeholder="SEARCH" class="form-control search-field" autocomplete="off" {!! trackData('Form', 'Search') !!}>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
