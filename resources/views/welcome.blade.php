@extends('layouts.base')

@section('body')
<!-- Header-->
<header data-background="{{ asset('img/header/civil-services-bg.jpg') }}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Civil Services</h1>
        <h4>Accountability in Action</h4>
    </div>
</header>
<!-- Slider-->
<section id="about" class="section-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Who We Are</h3>
                <p class="no-pad">The collaborative process of web development requires close integration of technology and design - two disciplines that inform one another. We make hip and exciting web sites. Big and Small. Concept development, interface design, production management.</p>
                <h2 class="classic">The Universal Team</h2>
            </div>
            <div data-wow-duration="0.2s" data-wow-delay=".2s" class="col-lg-5 col-lg-offset-1 wow zoomIn">
                <div id="carousel-light2" class="carousel slide carousel-fade">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-light2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-light2" data-slide-to="1"></li>
                        <li data-target="#carousel-light2" data-slide-to="2"></li>
                    </ol>
                    <div role="listbox" class="carousel-inner">
                        <div class="item active"><img  src="{{ asset('img/misc/6.png') }}" alt="" class="img-responsive center-block"></div>
                        <div class="item"><img  src="{{ asset('img/misc/5.png') }}" alt="" class="img-responsive center-block"></div>
                        <div class="item"><img  src="{{ asset('img/misc/4.png') }}" alt="" class="img-responsive center-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section-->
<section id="about2" class="bg-gray">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <h3>We have magic</h3>
                <p>Universal easily and efficiently scales your project with one code base. Amazing solution for portfolio websites which you can fit for freelancers, photographers or agency showcase.</p><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">Check it out</a>
            </div>
            <div class="col-lg-5 col-lg-offset-1 text-center">
                <h3>&nbsp;</h3>
                <div data-thickness="4" data-value="0.93" class="circle"><span></span>
                    <div class="agenda">Design</div>
                </div>
                <div data-thickness="10" data-value="0.82" class="circle"><span></span>
                    <div class="agenda">Programming</div>
                </div>
                <div data-thickness="18" data-value="0.68" class="circle"><span></span>
                    <div class="agenda">Photography</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section-->
<section id="services" class="bg-img4 text-center">
    <div class="overlay"></div>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>Our Services</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Doneceleifend, sem sed dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elits</p>
            </div>
        </div>
        <div class="row">
            <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-analytics-outline"></i> ANALITICS</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-pie-outline"></i> DESIGN</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i> CONSULTING</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-game-controller-b-outline"></i> ADVERTISING</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay="1s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big icon ion-ios-infinite-outline"></i>BRANDING</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay="1.2s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i>DEVELOPMENT</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay="1.4s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-monitor-outline"></i>OPTIMIZATION</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
            <div data-wow-delay="1.6s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon icon-big ion-ios-settings"></i>CUSTOMIZATION</h4>
                <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
            </div>
        </div>
    </div>
</section>
<!-- Slider-->
<section id="action-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>Awesome Template</h3>
                <p>Universal is the perfect template for your next project! It’s time to grow your business. Go make something awesome. Designed for Everyone. Let’s give your website a brand.</p><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">Get it Now!</a>
            </div>
            <div class="col-lg-6 col-lg-offset-1">
                <div id="carousel-light" class="carousel slide carousel-fade">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-light" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-light" data-slide-to="1"></li>
                        <li data-target="#carousel-light" data-slide-to="2"></li>
                    </ol>
                    <div role="listbox" class="carousel-inner">
                        <div class="item active"><img  src="{{ asset('img/misc/1.png') }}" alt="" class="img-responsive center-block"></div>
                        <div class="item"><img  src="{{ asset('img/misc/2.png') }}" alt="" class="img-responsive center-block"></div>
                        <div class="item"><img  src="{{ asset('img/misc/3.png') }}" alt="" class="img-responsive center-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Section-->
<section id="subscribe" class="section-small bg-img5 text-center">
    <div class="overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-offset-2">
                <h3>Subscribe</h3>
                <h5>Sign-Up For News Updates and Alerts</h5>
                <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
                <form id="mc-embedded-subscribe-form" action="http://forbetterweb.us11.list-manage.com/subscribe/post?u=4f751a6c58b225179404715f0&amp;id=18fc72763a" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="" class="form-inline subscribe-form">
                    <div class="input-group input-group-lg">
                        <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control"><span class="input-group-btn">
                  <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark">Subscribe</button></span>
                        <div id="mce-responses"></div>
                        <div id="mce-error-response" style="display:none" class="response"></div>
                        <div id="mce-success-response" style="display:none" class="response"></div>
                    </div>
                </form>
                <!-- End MailChimp Signup Form--><img  src="{{ asset('img/misc/mailchimp.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- News Block-->
<section id="news">
    <div class="container">
        <h3 class="pull-left">Latest news</h3>
        <div class="pull-right">
            <h5><a href="news3.html">SEE ALL</a></h5>
        </div>
        <div class="clearfix"></div>
        <div class="row grid-pad">
            <div class="col-sm-4"><a href="news-single-sidebar.html"><img  src="{{ asset('img/header/3.jpg') }}" alt="" class="img-responsive center-block">
                    <h5>o tempora, o mores. sem sed dictum</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
            </div>
            <div class="col-sm-4"><a href="news-single-sidebar.html"><img  src="{{ asset('img/header/bg-video.jpg') }}" alt="" class="img-responsive center-block">
                    <h5>o tempora, o mores. sem sed dictum</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
            </div>
            <div class="col-sm-4"><a href="news-single-sidebar.html"><img  src="{{ asset('img/header/20.jpg') }}" alt="" class="img-responsive center-block">
                    <h5>o tempora, o mores. sem sed dictum</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
            </div>
            <div class="col-sm-4"><a href="news-single-sidebar.html"><img  src="{{ asset('img/header/9.jpg') }}" alt="" class="img-responsive center-block">
                    <h5>o tempora, o mores. sem sed dictum</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
            </div>
            <div class="col-sm-4"><a href="news-single-sidebar.html"><img  src="{{ asset('img/header/7.jpg') }}" alt="" class="img-responsive center-block">
                    <h5>o tempora, o mores. sem sed dictum</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
            </div>
            <div class="col-sm-4"><a href="news-single-sidebar.html"><img  src="{{ asset('img/header/5.jpg') }}" alt="" class="img-responsive center-block">
                    <h5>o tempora, o mores. sem sed dictum</h5></a>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<section id="portfolio" class="bg-gray no-pad-btm">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h3>Portfolio</h3>
                <ul class="portfolio-sorting list-inline text-center">
                    <li><a href="portfolio-single.html" data-group="all" class="active">All</a></li>
                    <li><a href="portfolio-single.html" data-group="photo">Photo</a></li>
                    <li><a href="portfolio-single.html" data-group="design">Design</a></li>
                    <li><a href="portfolio-single.html" data-group="branding">Branding</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="grid" class="row portfolio-items">
            <div data-groups="[&quot;design&quot;, &quot;branding&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/1.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
            <div data-groups="[&quot;photo&quot;, &quot;branding&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/2.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
            <div data-groups="[&quot;&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/13.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
            <div data-groups="[&quot;design&quot;, &quot;photo&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/3.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
            <div data-groups="[&quot;branding&quot;, &quot;design&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/5.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
            <div data-groups="[&quot;photo&quot;, &quot;design&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/6.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
            <div data-groups="[&quot;photo&quot;, &quot;branding&quot;]" class="col-md-3 col-sm-6 no-pad">
                <div class="portfolio-item"><a href="portfolio-single.html"><img  src="{{ asset('img/portfolio/7.jpg') }}" alt="">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
                            </div>
                        </div></a></div>
            </div>
        </div>
    </div>
</section>
<div class="section-small action bg-gray text-center"><a href="portfolio-masonry-4.html" class="btn btn-dark-border">View All Portfolio</a></div>
<!-- Team Section-->
<section id="team" class="bg-white text-center">
    <div class="container">
        <h3>MEET OUR LEADERS</h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/avatar1.jpg') }}" alt="" class="img-responsive center-block"></p>
                <h2 class="classic">James Daniels</h2>
                <ul class="list-inline">
                    <li><a href="/"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-google-plus fa-lg"></i></a></li>
                </ul>
                <h6>CEO</h6>
            </div>
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/avatar2.jpg') }}" alt="" class="img-responsive center-block"></p>
                <h2 class="classic">Michael Williams</h2>
                <ul class="list-inline">
                    <li><a href="/"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-steam fa-lg"></i></a></li>
                </ul>
                <h6>Manager</h6>
            </div>
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/avatar3.jpg') }}" alt="" class="img-responsive center-block"></p>
                <h2 class="classic">Ethan Oliver</h2>
                <ul class="list-inline">
                    <li><a href="/"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <h6>Developer</h6>
            </div>
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/avatar4.jpg') }}" alt="" class="img-responsive center-block"></p>
                <h2 class="classic">Charlotte Harrison</h2>
                <ul class="list-inline">
                    <li><a href="/"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="/"><i class="fa fa-pinterest fa-lg"></i></a></li>
                </ul>
                <h6>Designer</h6>
            </div>
        </div>
    </div>
</section>
<!-- Quotes-->
<section class="quote section-small bg-img3 text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p><i class="icon fa fa-quote-left fa-lg"></i></p>
                <p>Teach self-denial and make its practice pleasure, and you can create for the world a destiny more sublime that ever issued from the brain of the wildest dreamer.</p>
                <h2 class="no-pad classic">Sir Walter Scott</h2>
            </div>
        </div>
    </div>
</section>
<!-- Why Section-->
<section>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>Why Choose Us?</h3>
            </div>
        </div>
        <div class="row">
            <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big icon ion-ios-infinite-outline"></i> Multi-purpose</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
            </div>
            <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-sunny-outline"></i> Coder friendly</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
            </div>
            <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-glasses-outline"></i> Good readability</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
            </div>
            <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-pulse"></i> Easy to Use</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
            </div>
        </div>
    </div>
</section>
<!-- Facts section-->
<section class="facts section-small bg-img">
    <div class="overlay"></div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3"><span data-min="0" data-max="29" data-delay="5" data-increment="1" class="numscroller">0</span>
                <h5 class="no-pad">Themes released</h5>
            </div>
            <div class="col-sm-3"><span data-min="0" data-max="2785" data-delay="5" data-increment="3" class="numscroller">0</span>
                <h5 class="no-pad">Happy Customers</h5>
            </div>
            <div class="col-sm-3"><span data-min="0" data-max="12" data-delay="5" data-increment="1" class="numscroller">0</span>
                <h5 class="no-pad">Winning awards</h5>
            </div>
            <div class="col-sm-3"><span data-min="0" data-max="78" data-delay="5" data-increment="1" class="numscroller">0</span>
                <h5 class="no-pad">Completed project</h5>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section-->
<section id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="text-center">Testimonials</h3>
                <div id="carousel-testimonials" data-ride="carousel" class="carousel slide carousel-fade">
                    <!-- Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides-->
                    <div role="listbox" class="carousel-inner">
                        <div class="item active"><img  src="{{ asset('img/testimonials/1.jpg') }}" alt="" class="center-block">
                            <div class="carousel-caption">
                                <h2 class="classic">Richard Kindall</h2>
                                <h5 class="no-pad">Thank you very much, the template is great! Very concise and simple.</h5>
                            </div>
                        </div>
                        <div class="item"><img  src="{{ asset('img/testimonials/2.jpg') }}" alt="" class="center-block">
                            <div class="carousel-caption">
                                <h2 class="classic">David Cohen</h2>
                                <h5 class="no-pad">Adorable minimalist theme! Should be working well as a canvas for any upcoming project.</h5>
                            </div>
                        </div>
                        <div class="item"><img  src="{{ asset('img/testimonials/3.jpg') }}" alt="" class="center-block">
                            <div class="carousel-caption">
                                <h2 class="classic">Jane Navarro</h2>
                                <h5 class="no-pad">Amazing and SUPER easy to incorporate, looks like a great theme, full functionality indeed</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Action video-->
<section class="section-small bg-img2 text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2"><a href="https://vimeo.com/155463374" class="swipebox-video"><i class="icon icon-big ion-ios-videocam-outline"></i></a>
                <h2>Watch <span class="bold">Video</span>
                </h2>
                <p>A business has to be involving, it has to be fun, and it has to exercise your creative instincts. Start where you are. Use what you have. Do what you can.</p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>contact us</h3>
                <p>Feel free to contact us. A business has to be involving, it has to be fun, and it has to exercise your creative instincts. Start where you are. Use what you have. Do what you can. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <hr>
                <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> 1234 Some Avenue, New York, NY 56789
                </h5>
                <h5><i class="fa fa-envelope fa-fw fa-lg"></i> info@youwebsite.com
                </h5>
                <h5><i class="fa fa-phone fa-fw fa-lg"></i> (123) 456-7890
                </h5>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h3>Say hello</h3>
                <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
                <form id="contactForm" name="sentMessage" novalidate="">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="name" class="sr-only control-label">You Name</label>
                            <input id="name" type="text" placeholder="You Name" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="email" class="sr-only control-label">You Email</label>
                            <input id="email" type="email" placeholder="You Email" required="" data-validation-required-message="Please enter email" class="form-control input-lg"><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="phone" class="sr-only control-label">You Phone</label>
                            <input id="phone" type="tel" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number" class="form-control input-lg"><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="message" class="sr-only control-label">Message</label>
                            <textarea id="message" rows="2" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Map Section-->
<div id="map"></div>
<!-- Action Section-->
<section class="action section-small bg-gray2">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-10">
                <h3 class="no-pad"><span class="bold">Universal</span> is the perfect template for your next project!
                </h3>
            </div>
            <div class="col-md-2 text-right"><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">get it now</a></div>
        </div>
    </div>
</section>

@endsection
