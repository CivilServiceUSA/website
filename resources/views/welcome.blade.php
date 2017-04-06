@extends('layouts.base')

@section('body')

<!-- Header-->
<header data-background="{{ asset('img/header/civil-services-bg.jpg') }}" class="intro">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Accountability in Action</h1>
        <h4>Be a part of your Local, State & Federal Government.</h4>
        <ul class="list-inline lead">
            <li><a href="#about" class="btn btn-border btn-lg page-scroll">Get Started</a></li>
        </ul>
    </div>
</header>

<!-- Slider-->
<section id="about" class="section-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>By the People. For the People.</h3>
                <p class="no-pad"><strong>Civil Service USA Corp</strong> is a nonpartisan, independent and <strong>Non-Profit Organization</strong> with the goal to help United States Citizens to be a part of what is happening in their Local, State & Federal Governments.</p>
                <h2 class="classic">Civil Services Team</h2>
            </div>
            <div class="col-lg-5 col-lg-offset-1">
                @include('partials.map', ['base' => '/state'])
            </div>
        </div>
    </div>
</section>

<!-- Why Section-->
<section>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>Our Services</h3>
            </div>
        </div>
        <div class="row">
            <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-bookmarks-outline"></i> Developer API</h4>
                <p>Software Developers and Researchers can use our API to help people find useful information.</p>
                <p><a href="https://api.civil.services/guide/" rel="noopener" target="_blank" class="btn btn-dark btn-xs">More Info</a></p>
            </div>
            <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-chatboxes-outline"></i> Contact Officials</h4>
                <p>Open Search Engine to locate your Local, State & Federal Government Elected Officials.</p>
                <p><a href="/state" class="btn btn-dark btn-xs">Get Started</a></p>
            </div>
            <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-navigate-outline"></i> District Maps</h4>
                <p>Easily Locate, View & Download Map Files for Local, State & Federal Government Districts.</p>
                <p><a href="javascript:void(0);" class="btn btn-dark-border btn-xs">Coming Soon</a></p>
            </div>
            <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-search"></i> Legislation Searches</h4>
                <p>Find Local, State & Federal Legislation and which elected officials are involved.</p>
                <p><a href="javascript:void(0);" class="btn btn-dark-border btn-xs">Coming Soon</a></p>
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
                <form id="mc-embedded-subscribe-form" action="https://forbetterweb.us11.list-manage.com/subscribe/post?u=4f751a6c58b225179404715f0&amp;id=18fc72763a" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="" class="form-inline subscribe-form">
                    <div class="input-group input-group-lg">
                        <label><input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control"></label>
                        <span class="input-group-btn">
                            <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark">Subscribe</button>
                        </span>
                        <div id="mce-responses"></div>
                        <div id="mce-error-response" style="display:none" class="response"></div>
                        <div id="mce-success-response" style="display:none" class="response"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Team Section-->
<section id="team" class="bg-white text-center">
    <div class="container">
        <h3>MEET OUR TEAM</h3>
        <p>Below are the main people that keep things moving at Civil Services.</p><p>We would also like to thank 100+ volunteers that help us with our data entry.</p>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <p><img src="{{ asset('img/team/peter-schmalfeldt.jpg') }}" alt="Peter Schmalfeldt" class="img-responsive center-block"></p>
                <h2 class="classic">Peter Schmalfeldt</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/mrmidi" rel="noopener" target="_blank" title="Peter Schmalfeldt's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/manifestinteractive" rel="noopener" target="_blank" title="Peter Schmalfeldt's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="https://peterschmalfeldt.com" rel="noopener" target="_blank" title="Peter Schmalfeldt's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6>Founder &nbsp;|&nbsp; Engineer &nbsp;|&nbsp; Designer</h6>
            </div>
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/matt-stauffer.jpg') }}" alt="Matt Stauffer" class="img-responsive center-block"></p>
                <h2 class="classic">Matt Stauffer</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/stauffermatt" rel="noopener" target="_blank" title="Matt Stauffer's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/mattstauffer" rel="noopener" target="_blank" title="Matt Stauffer's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="https://mattstauffer.co" rel="noopener" target="_blank" title="Matt Stauffer's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6>Director &nbsp;|&nbsp; Engineer</h6>
            </div>
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/john-kramlich.jpg') }}" alt="John Kramlich" class="img-responsive center-block"></p>
                <h2 class="classic">John Kramlich</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/jkramlich" rel="noopener" target="_blank" title="John Kramlich's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/johnkramlich" rel="noopener" target="_blank" title="John Kramlich's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="http://johnkramlich.com" rel="noopener" target="_blank" title="John Kramlich's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6>Director &nbsp;|&nbsp; Engineer</h6>
            </div>
            <div class="col-md-3 col-sm-6">
                <p><img  src="{{ asset('img/team/samuel-sinyangwe.jpg') }}" alt="Samuel Sinyangwe" class="img-responsive center-block"></p>
                <h2 class="classic">Samuel Sinyangwe</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/samswey" rel="noopener" target="_blank" title="Samuel Sinyangwe's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/campaignzero" rel="noopener" target="_blank" title="Samuel Sinyangwe's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Samuel_Sinyangwe" rel="noopener" target="_blank" title="Samuel Sinyangwe's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6>Policy Analyst &nbsp;|&nbsp; Advisor</h6>
            </div>
        </div>
    </div>
</section>

<!-- Facts section-->
<section class="facts section-small bg-img">
    <div class="overlay"></div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3"><span data-min="0" data-max="100" data-delay="1" data-increment="3" class="numscroller">0</span>
                <h5 class="no-pad">Senators</h5>
            </div>
            <div class="col-sm-3"><span data-min="0" data-max="435" data-delay="2" data-increment="4" class="numscroller">0</span>
                <h5 class="no-pad">House of Representatives</h5>
            </div>
            <div class="col-sm-3"><span data-min="0" data-max="50" data-delay="3" data-increment="3" class="numscroller">0</span>
                <h5 class="no-pad">State Governments</h5>
            </div>
            <div class="col-sm-3"><span data-min="0" data-max="29793" data-delay="4" data-increment="123" class="numscroller">0</span>
                <h5 class="no-pad">Zip Codes</h5>
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


@endsection
