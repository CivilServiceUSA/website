<!-- Navigation-->
<nav class="navbar navbar-universal navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#page-top" class="navbar-brand page-scroll">
                <img src="{{ asset('img/logo-white.svg') }}" alt="Logo" class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="logo-short">
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden"><a href="#page-top"></a></li>
                <li><a href="/us-house">House</a></li>
                <li><a href="/us-senate">Senate</a></li>
                <li><a href="/my-elected-officials">My Elected Officials</a></li>
                <li class="menu-divider visible-lg">&nbsp;</li>
                <li>
                    <a href="javascript:void(0);" class="toggle-search">
                        <i class="fa fa-search fa-lg"></i>
                    </a>
                    <form method="post" class="search-form animated fadeIn" autocomplete="off" onsubmit="return false;">
                        <button type="button" title="Search" class="search-button"><i class="fa fa-search fa-lg"></i></button>
                        <input type="text" id="search" placeholder="SEARCH" class="form-control search-field" autocomplete="off">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
