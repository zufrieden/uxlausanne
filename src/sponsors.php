<?php

$app->sponsors_kinds = array(
    'lead' => "Lead",
    'major' => "Major",
    'executive' => "Executive",
);

$app->sponsors_lead = array(
    'first_sponsor' => array(
        'slug' => "acme",
        'title' => "ACME Inc",
        'teaser' => "Awesome company",
        'description' => "More about this company in one or more sentences",
        'urls' => array(
            array(
                'url' => 'http://exemple.org/',
                'label' => 'exemple.org'
            ),
            array(
                'url' => 'http://twitter.com/twitter',
                'label' => '@twitter'
            )
        ),
        'photo' => '/assets/img/speaker_janina_woods.jpeg',
        'kind' => $app->sponsors_kinds['lead']
    ),
);
$app->sponsors_major = array(
    'sqli' => array(
        'slug' => "sqli",
        'title' => "SQLI Agency",
        'teaser' => "Think x Design x Share",
        'description' => "Think x Design x Share",
        'urls' => array(
            array(
                'url' => 'http://sqliagency.ch',
                'label' => 'sqliagency.ch'
            ),
            array(
                'url' => 'http://twitter.com/sqliagency_ch',
                'label' => '@sqliagency_ch'
            )
        ),
        'photo' => '/assets/img/sponsor_major_sqliagencych.jpeg',
        'kind' => $app->sponsors_kinds['major']
    ),
);
$app->sponsors_executive = array(
    'balsamiq' => array(
        'slug' => "balsamiq",
        'title' => "Balsamiq",
        'teaser' => "",
        'description' => "Rapid, effective and fun wireframing software",
        'urls' => array(
            array(
                'url' => 'http://balsamiq.com',
                'label' => 'balsamiq.com'
            ),
            array(
                'url' => 'http://twitter.com/balsamiq',
                'label' => '@balsamiq'
            )
        ),
        'photo' => '/assets/img/sponsor_executive_balsamiq.png',
        'kind' => $app->sponsors_kinds['executive']
    ),
    'harvest' => array(
        'slug' => "harvest",
        'title' => "Harvest",
        'teaser' => "",
        'description' => "Simple online time tracking software",
        'urls' => array(
            array(
                'url' => 'http://getharvest.com',
                'label' => 'getharvest.com'
            ),
            array(
                'url' => 'http://twitter.com/harvest',
                'label' => '@harvest'
            )
        ),
        'photo' => '/assets/img/sponsor_executive_harvest.png',
        'kind' => $app->sponsors_kinds['executive']
    ),
    'mailchimp' => array(
        'slug' => "mailchimp",
        'title' => "Mailchimp",
        'teaser' => "",
        'description' => "Send better email",
        'urls' => array(
            array(
                'url' => 'http://mailchimp.com',
                'label' => 'mailchimp.com'
            ),
            array(
                'url' => 'http://twitter.com/mailchimp',
                'label' => '@MailChimp'
            )
        ),
        'photo' => '/assets/img/sponsor_executive_mailchimp.png',
        'kind' => $app->sponsors_kinds['executive']
    ),
    'telono' => array(
        'slug' => "telono",
        'title' => "Telono",
        'teaser' => "",
        'description' => "User experience (UX) | usability | web accessibility | Geneva",
        'urls' => array(
            array(
                'url' => 'http://telono.com/en',
                'label' => 'telono.com'
            ),
            array(
                'url' => 'http://twitter.com/telono',
                'label' => '@Telono'
            )
        ),
        'photo' => '/assets/img/sponsor_executive_telono.png',
        'kind' => $app->sponsors_kinds['executive']
    ),
    'freshjobs' => array(
        'slug' => "freshjobs",
        'title' => "Freshjobs",
        'teaser' => "",
        'description' => "Die frische Job-Plattform - arbeiten mit Internet.",
        'urls' => array(
            array(
                'url' => 'http://freshjobs.ch',
                'label' => 'freshjobs.ch'
            ),
            array(
                'url' => 'http://twitter.com/freshjobs',
                'label' => '@Freshjobs'
            )
        ),
        'photo' => '/assets/img/sponsor_executive_freshjobs.png',
        'kind' => $app->sponsors_kinds['executive']
    ),
);