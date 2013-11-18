<?php $this->includeSnippet('header'); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="logo" class="text-center" role="banner">
                    <h4 id="organizers" class="organizers"><a href="http://8ratio.ch" target="_blank">:ratio</a> and <a href="http://uxromandie.ch/" target="_blank">UXRomandie</a> present</h4>
                    <h1><span>UX</span> LAUSANNE <sup>2014</sup></h1>
                    <h3 class="baseline">Creating delightful User Experiences</h3>
                    <h3 class="baseline">2 days ~ 8 talks ~ 8 workshops</h3>
                    <h2 id="date">Thursday 22<sup>nd</sup> &amp; Friday 23<sup>rd</sup> May 2014</h2>
                    <h2 id="location">@ Arsenic – Lausanne, Switzerland</h2>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="about title-section section">
    <div class="container section-title">
        <h1><?php echo $this->content('intro-title'); ?></h1>
    </div>
    <div class="isolated">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center">
                    <h2>
                        <?php echo $this->content('intro-teaser'); ?>
                    </h2>
                    <div class="isolated"><hr class="hidden-xs"></div>
                        <?php echo $this->content('intro-content'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="speaker inverse-section section">
    <div class="container section-title">
        <h1><?php echo $this->content('speaker-section-title'); ?></h1>
    </div>
    <div class="isolated">
        <div class="isolated">
            <div class="container">
                <div class="row">

                    <!-- speaker loop -->
                    <div class="col-xs-12 col-sm-3 text-center">
                        <div class="isolated">
                            <img src="assets/img/{{ speaker.photo }}" alt="{{ speaker.name }}" class="img-responsive thumbnail text-center">
                            <h3>{{ speaker.name }}</h3>
                            <h4>
                                <a href="https://twitter.com/{{ speaker.twitter }}">@{{ speaker.twitter }}</a>
                                <br/>
                                <a href="{{ speaker.url }}">{{ speaker.site }}</a>
                            </h4>
                        </div>
                    </div>
                    <!-- /speaker loop -->

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->includeSnippet('footer'); ?>