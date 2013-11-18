<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo URL_PUBLIC; ?>public/themes/current/uxlausanne/assets/css/uxlausanne.css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:300,500,700">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" />
        <meta name="description" content="<?php echo ($this->description() != '') ? $this->description() : ''; ?>" />
        <meta name="keywords" content="<?php echo ($this->keywords() != '') ? $this->keywords() : '' ; ?>" />
        <title><?php echo $this->title(); ?></title>
        <script src="<?php echo URL_PUBLIC; ?>public/themes/current/uxlausanne/assets/js/modernizr.js"></script>
    </head>
    <body>

        <div id="outer-wrap">
            <div id="inner-wrap">
                <header class="section">
                    <div id="top">
                        <a class="nav-btn" id="nav-open-btn" href="#nav">Menu</a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="logo" class="text-center" role="banner">
                                    <h4 id="organizers" class="organizers"><a href="http://8ratio.ch" target="_blank">:ratio</a> and <a href="http://uxromandie.ch/" target="_blank">UXRomandie</a> present</h4>
                                    <h1><span>UX</span> LAUSANNE <sup>2014</sup></h1>
                                    <h3 class="baseline">Creating delightful User Experiences</h3>
                                    <h3 class="baseline">2 days ~ 8 talks ~ 8 workshops</h3>
                                    <h2 id="date">Thursday 22<sup>nd</sup> &amp; Friday 23<sup>rd</sup> May 2014</h2>

                                </div>
                            </div>
                            <div class="col-xs-12">
                                <p class="isolated text-center">
                                    <a href="http://register.uxlausanne.com/" class="btn btn-default btn-lg" target="_blank" onClick="_gaq.push(['_trackEvent', 'Buy Ticket Home', 'Click', 'Click sur le bouton Buy']);">Buy tickets</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </header>
                <nav id="nav" class="main-nav" role="navigation">
                    <ul class="nav nav-pills nav-centered">
                        <li><a href="#speakers">Speakers</a></li>
                        <!-- <li><a href="#sponsors">Sponsors</a></li> -->
                        <li><a href="#about">About UXRomandie</a></li>
                        <li class="register highlight"><a href="http://uxlausanne2014.eventbrite.com" target="_blank">Register (soon)</a></li>
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </nav>