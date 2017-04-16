@extends('layouts.base')

@section('body')

<!-- Header-->
<header data-background="{{ asset('img/header/lady-justice.jpg') }}" class="intro">
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
                <p><strong>Civil Service USA Corp</strong> is a nonpartisan, independent and <strong>Non-Profit Organization</strong> with the goal to help United States Citizens to be a part of what is happening in their Local, State & Federal Governments.</p>
                <p class="no-pad">Select a State to access Government & Demographic data on the 115th United States Congress. Contact Information includes Phone Number, Mailing Address, Official Website, Twitter &amp; Facebook Accounts.</p>
                <h2 class="classic">- Civil Services Team</h2>
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
                <p>Use our API in your application to connect users to government.</p>
                <p><a href="https://api.civil.services/guide/" rel="noopener" target="_blank" class="btn btn-dark btn-xs">More Info</a></p>
            </div>
            <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-chatboxes-outline"></i> Contact Officials</h4>
                <p>Search for Elected Officials and get their Contact Information.</p>
                <p><a href="/state" class="btn btn-dark btn-xs">Get Started</a></p>
            </div>
            <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-contact-outline"></i> State Legislators</h4>
                <p>Find the Elected Officials for your States House &amp; Senate.</p>
                <p><a href="javascript:void(0);" class="btn btn-dark-border btn-xs">Coming Soon</a></p>
            </div>
            <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
                <h4><i class="icon-big ion-ios-search"></i> Legislation Searches</h4>
                <p>Search for Bills in your state and how Elected Officials Voted.</p>
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
                <div id="subscribe-status" class="block-message note">
                    <div class="message"></div>
                </div>
                <form id="signup-form" action="https://services.us14.list-manage.com/subscribe/post-json?u=158de27f713f7ed26783835cd&id=3336234d25&c=?" method="post" class="form-inline subscribe-form">
                    <div class="input-group input-group-lg">
                        <label for="mce-EMAIL" class="sr-only control-label">Email Address</label>
                        <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control">
                        <span class="input-group-btn">
                            <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark btn-sm">Subscribe</button>
                        </span>
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
        <p>Below are the main people that keep things moving at Civil Services.</p>
        <p>We would also like to thank the 100+ volunteers that help us with data collection.</p>
        <div class="row">
            <div class="col-md-3 col-sm-6" itemscope itemtype="http://schema.org/Person">
                <p><img itemprop="image" src="{{ asset('img/team/peter-schmalfeldt.jpg') }}" alt="Peter Schmalfeldt" class="img-responsive center-block"></p>
                <h2 class="classic" itemprop="name">Peter Schmalfeldt</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/mrmidi" itemprop="sameAs" rel="noopener" target="_blank" title="Peter Schmalfeldt's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/manifestinteractive" itemprop="sameAs" rel="noopener" target="_blank" title="Peter Schmalfeldt's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="https://peterschmalfeldt.com" itemprop="url" rel="noopener" target="_blank" title="Peter Schmalfeldt's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6 itemprop="jobTitle">Founder &nbsp;|&nbsp; Engineer &nbsp;|&nbsp; Designer</h6>
            </div>
            <div class="col-md-3 col-sm-6" itemscope itemtype="http://schema.org/Person">
                <p><img itemprop="image"  src="{{ asset('img/team/matt-stauffer.jpg') }}" alt="Matt Stauffer" class="img-responsive center-block"></p>
                <h2 class="classic"itemprop="name">Matt Stauffer</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/stauffermatt" itemprop="sameAs" rel="noopener" target="_blank" title="Matt Stauffer's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/mattstauffer" itemprop="sameAs" rel="noopener" target="_blank" title="Matt Stauffer's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="https://mattstauffer.co" rel="noopener" itemprop="url" target="_blank" title="Matt Stauffer's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6 itemprop="jobTitle">Director &nbsp;|&nbsp; Engineer</h6>
            </div>
            <div class="col-md-3 col-sm-6" itemscope itemtype="http://schema.org/Person">
                <p><img itemprop="image" src="{{ asset('img/team/john-kramlich.jpg') }}" alt="John Kramlich" class="img-responsive center-block"></p>
                <h2 class="classic"itemprop="name">John Kramlich</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/jkramlich" itemprop="sameAs" rel="noopener" target="_blank" title="John Kramlich's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/johnkramlich" itemprop="sameAs" rel="noopener" target="_blank" title="John Kramlich's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="http://johnkramlich.com" rel="noopener" itemprop="url" target="_blank" title="John Kramlich's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6 itemprop="jobTitle">Director &nbsp;|&nbsp; Engineer</h6>
            </div>
            <div class="col-md-3 col-sm-6" itemscope itemtype="http://schema.org/Person">
                <p><img itemprop="image" src="{{ asset('img/team/samuel-sinyangwe.jpg') }}" alt="Samuel Sinyangwe" class="img-responsive center-block"></p>
                <h2 class="classic"itemprop="name">Samuel Sinyangwe</h2>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/samswey" itemprop="sameAs" rel="noopener" target="_blank" title="Samuel Sinyangwe's Twitter Profile"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://github.com/campaignzero" itemprop="sameAs" rel="noopener" target="_blank" title="Samuel Sinyangwe's Github Profile"><i class="fa fa-github fa-lg"></i></a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Samuel_Sinyangwe" itemprop="url" rel="noopener" target="_blank" title="Samuel Sinyangwe's Website"><i class="fa fa-external-link fa-lg"></i></a></li>
                </ul>
                <h6 itemprop="jobTitle">Policy Analyst &nbsp;|&nbsp; Advisor</h6>
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
                <p>
                    Be a part of your Local, State & Federal Government. The Civil Services team is here to help!
                </p>

                <hr>

                <h5>
                    <i class="fa fa-map-marker fa-fw fa-lg"></i> 200 2nd Avenue South<br>
                    <i class="fa fa-fw fa-lg"></i> Suite 420<br>
                    <i class="fa fa-fw fa-lg"></i> St. Petersburg, FL 33701
                </h5>
                <h5>
                    <i class="fa fa-envelope fa-fw fa-lg"></i>
                    <a href="mailto:hello@civil.services">hello@civil.services</a>
                </h5>
                <h5>
                    <i class="fa fa-phone fa-fw fa-lg"></i>
                    <a href="tel:7273145214">(727) 314-5214</a>
                </h5>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h3>Say hello</h3>

                <div id="contact-status" class="block-message note">
                    <div class="message"></div>
                </div>

                <form id="contactForm" action="https://services.us14.list-manage.com/subscribe/post-json?u=158de27f713f7ed26783835cd&id=9d016f8b94&c=?" method="POST" name="sentMessage" novalidate="">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="name" class="sr-only control-label">Your Name</label>
                            <input id="name" name="NAME" type="text" placeholder="Your Name" required="" data-validation-required-message="Please Enter Your Name" class="form-control input-lg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="email" class="sr-only control-label">Your Email Address</label>
                            <input id="email" name="EMAIL" type="email" placeholder="Your Email Address" required="" data-validation-required-message="Please Enter Your Email Address" class="form-control input-lg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="message" class="sr-only control-label">Message</label>
                            <textarea id="message" name="MESSAGE" rows="4" placeholder="Message" required="" data-validation-required-message="Please Enter a Message." aria-invalid="false" class="form-control input-lg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
