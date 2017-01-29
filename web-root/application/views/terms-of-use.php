<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= $meta['title']; ?></title>

    <meta http-equiv="Content-Security-Policy" content="img-src * data:; default-src * 'self' gap: ws:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' http://www.google-analytics.com https://maps.googleapis.com https://www.google-analytics.com https://cdnjs.cloudflare.com;">

    <meta name="description" content="<?= $meta['description']; ?>">
    <meta name="keywords" content="<?= $meta['keywords']; ?>" />
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
    <meta name="twitter:title" content="<?= $meta['title']; ?>">
    <meta name="twitter:site" content="@CivilServiceUSA">
    <meta name="twitter:creator" content="@CivilServiceUSA">
    <meta name="twitter:description" content="<?= $meta['description']; ?>">
    <meta name="twitter:image" content="<?= $meta['image']; ?>">
    <meta name="twitter:image:alt" content="<?= $meta['title']; ?>">
    <meta name="twitter:domain" content="civil.services">

    <!-- Open Graph Metadata -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $meta['title']; ?>">
    <meta property="og:url" content="https://civil.services">
    <meta property="og:image" content="<?= $meta['image']; ?>">
    <meta property="og:site_name" content="Civil Services">
    <meta property="og:description" content="<?= $meta['description']; ?>">

    <!-- Dublin Core Metadata -->
    <meta name="dc:language" content="en_US">
    <meta name="dc:title" content="<?= $meta['title']; ?>">
    <meta name="dc:source" content="https://civil.services">
    <meta name="dc:description" content="<?= $meta['description']; ?>">

    <!-- Structured Metadata -->
    <script type="application/ld+json"><?= $meta['json_ld']; ?></script>

    <!-- App Icons -->
    <link rel="shortcut icon" href="<?= $media_path ?>/assets/img/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $media_path ?>/assets/img/icons/favicon-retina-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $media_path ?>/assets/img/icons/favicon-retina-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $media_path ?>/assets/img/icons/favicon-standard-ipad.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $media_path ?>/assets/img/icons/favicon-standard-iphone.png">

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

<?= $header_menu; ?>

<!-- Header-->
<header data-background="<?= $media_path ?>/assets/img/header/civil-services-bg.jpg" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Terms of Use</h1>
        <h4>Last updated:&nbsp; January 1st, 2017</h4>
    </div>
</header>
<!-- Buttons-->
<section>
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-md-8 col-md-offset-2">
                <h2>Terms of Use</h2>

                <p>These Terms of Use tell you about our services, our relationship to you as a user, and the rights and responsibilities that guide us both.</p>

                <p>If you have any questions about this Privacy Policy, please <a href="mailto:hello@civil.services">contact us</a>.</p>

                <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">

                    <div class="panel panel-default">
                        <div id="headingOne" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Introduction
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the <a href="https://civil.services">https://civil.services</a> website (together, or individually, the "Service") operated by <a href="http://manifestinteractive.com">Manifest Interactive, LLC</a> ("us", "we", or "our").</p>

                                <p>Your access to and use of the Service is conditioned upon your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who wish to access or use the Service.</p>

                                <p><strong>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you do not have permission to access the Service.</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="headingTwo" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                    Links To Other Web Sites
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Our Service may contain links to third party web sites or services that are not owned or controlled by Manifest Interactive, LLC.</p>

                                <p>Manifest Interactive, LLC has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.</p>

                                <p>You acknowledge and agree that Manifest Interactive, LLC shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such third party web sites or services.</p>

                                <p>We strongly advise you to read the terms and conditions and privacy policies of any third party web sites or services that you visit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="headingThree" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                                    Termination
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We may terminate or suspend your access to the Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of the Terms.</p>

                                <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading4" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">
                                    Indemnification
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" role="tabpanel" aria-labelledby="heading4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>You agree to defend, indemnify and hold harmless Manifest Interactive, LLC and its licensee and licensors, and their employees, contractors, agents, officers and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees), resulting from or arising out of a) your use and access of the Service, or b) a breach of these Terms.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading5" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed">
                                    Limitation Of Liability
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" role="tabpanel" aria-labelledby="heading5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>In no event shall Manifest Interactive, LLC, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damage, and even if a remedy set forth herein is found to have failed of its essential purpose.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading6" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">
                                    Disclaimer
                                </a>
                            </h4>
                        </div>
                        <div id="collapse6" role="tabpanel" aria-labelledby="heading6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Your use of the Service is at your sole risk. The Service is provided on an "AS IS" and "AS AVAILABLE" basis. The Service is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement or course of performance.</p>

                                <p>Manifest Interactive, LLC its subsidiaries, affiliates, and its licensors do not warrant that a) the Service will function uninterrupted, secure or available at any particular time or location; b) any errors or defects will be corrected; c) the Service is free of viruses or other harmful components; or d) the results of using the Service will meet your requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading7" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed">
                                    Exclusions
                                </a>
                            </h4>
                        </div>
                        <div id="collapse7" role="tabpanel" aria-labelledby="heading7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Some jurisdictions do not allow the exclusion of certain warranties or the exclusion or limitation of liability for consequential or incidental damages, so the limitations above may not apply to you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading8" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed">
                                    Governing Law
                                </a>
                            </h4>
                        </div>
                        <div id="collapse8" role="tabpanel" aria-labelledby="heading8" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>These Terms shall be governed and construed in accordance with the laws of Florida, United States, without regard to its conflict of law provisions.</p>

                                <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have had between us regarding the Service.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="heading9" role="tab" class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed">
                                    Changes
                                </a>
                            </h4>
                        </div>
                        <div id="collapse9" role="tabpanel" aria-labelledby="heading9" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

                                <p>By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the Service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $footer; ?>

</body>
</html>