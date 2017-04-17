<div class="social-share-component">
    <div class="share-button">
        <a href="javascript:void(0);" id="share-button" {!! trackData('View', 'Modal', 'Share') !!}>
            <i class="fa fa-share-alt fa-fw"></i>
        </a>
    </div>
    <div class="share-widget" id="share-widget">
        <div class="share-wrapper">
            <div class="header">
                Share This Page
            </div>
            <div class="share-options">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareComponent->url) }}&t={{ urlencode($shareComponent->title) }}" title="Share on Facebook" target="_blank" {!! trackData('Nav', 'Share', 'Facebook') !!}>
                            <i class="fa fa-facebook fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?source={{ urlencode($shareComponent->url) }}&text={{ urlencode($shareComponent->title) }}%0D%0A%0D%0A{{ urlencode($shareComponent->url) }}&via=CivilServiceUSA" target="_blank" title="Tweet" {!! trackData('Nav', 'Share', 'Twitter') !!}>
                            <i class="fa fa-twitter fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:?subject={{ rawurlencode($shareComponent->title) }}&body={{ rawurlencode($shareComponent->description) }}%0D%0A%0D%0A{{ rawurlencode($shareComponent->url) }}" target="_blank" title="Send email" {!! trackData('Nav', 'Share', 'Email') !!}>
                            <i class="fa fa-envelope fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/share?url={{ urlencode($shareComponent->url) }}" target="_blank" title="Share on Google+" {!! trackData('Nav', 'Share', 'Google Plus') !!}>
                            <i class="fa fa-google-plus fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.tumblr.com/share?v=3&u={{ urlencode($shareComponent->url) }}&t={{ urlencode($shareComponent->title) }}&s=" target="_blank" title="Post to Tumblr" {!! trackData('Nav', 'Share', 'Tumblr') !!}>
                            <i class="fa fa-tumblr fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://pinterest.com/pin/create/button/?url={{ urlencode($shareComponent->url) }}&media={{ urlencode($shareComponent->image) }}&description={{ urlencode($shareComponent->description) }}" target="_blank" title="Pin it" {!! trackData('Nav', 'Share', 'Pinterest') !!}>
                            <i class="fa fa-pinterest-p fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.reddit.com/submit?url={{ urlencode($shareComponent->url) }}&title={{ urlencode($shareComponent->title) }}" target="_blank" title="Submit to Reddit" {!! trackData('Nav', 'Share', 'Reddit') !!}>
                            <i class="fa fa-reddit-alien fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($shareComponent->url) }}&title={{ urlencode($shareComponent->title) }}&summary={{ urlencode($shareComponent->description) }}&source={{ urlencode($shareComponent->url) }}" target="_blank" title="Share on LinkedIn" {!! trackData('Nav', 'Share', 'LinkedIn') !!}>
                            <i class="fa fa-linkedin fa-fw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://wordpress.com/press-this.php?u={{ urlencode($shareComponent->url) }}&t={{ urlencode($shareComponent->title) }}&s={{ urlencode($shareComponent->description) }}&i={{ urlencode($shareComponent->image) }}" target="_blank" title="Publish on WordPress" {!! trackData('Nav', 'Share', 'WordPress') !!}>
                            <i class="fa fa-wordpress fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="share-overlay"></div>
    </div>
</div>