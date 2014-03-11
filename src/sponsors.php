<?php

$app->sponsors_kinds = array(
    'lead' => "Lead",
    'major' => "Major",
    'executive' => "Executive",
    'media' => "Media Partner",
);

$app->sponsors_lead = array(
    'first_sponsor' => array(
        'slug' => "acme",
        'title' => "Become our official sponsor",
        'teaser' => "This space could be yours",
        'description' => "",
        'urls' => array(
            array(
                'url' => '../assets/pdf/uxlausanne_sponsorkit_general.pdf',
                'label' => 'Download our sponsor kit'
            ),
            array(
                'url' => 'email:sponsoring@uxromandie.ch',
                'label' => 'sponsoring@uxromandie.ch'
            )
        ),
        'photo' => '/assets/img/sponsor_lead_you.png',
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
        'photo' => '/assets/img/sponsor_major_sqli.png',
        'kind' => $app->sponsors_kinds['major']
    ),
    'liip' => array(
        'slug' => "liip",
        'title' => "Liip",
        'teaser' => "Agile Web development",
        'description' => "Agile Web development",
        'urls' => array(
            array(
                'url' => 'http://www.liip.ch/en',
                'label' => 'www.liip.ch/en'
            ),
            array(
                'url' => 'https://twitter.com/liip',
                'label' => '@liip'
            )
        ),
        'photo' => '/assets/img/sponsor_major_liip.png',
        'kind' => $app->sponsors_kinds['major']
    ),
);
$app->sponsors_executive = array(
    'balsamiq' => array(
        'slug' => "balsamiq",
        'title' => "Balsamiq",
        'teaser' => "Rapid, effective and fun wireframing ",
        'description' => "Rapid, effective and fun wireframing ",
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
        'teaser' => "Simple online time tracking software",
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
        'teaser' => "Send better email",
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
        'teaser' => "Strategic user-centred design",
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
        'teaser' => "The fresh job platform",
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


$app->partners_media = array(
    'ict' => array(
        'slug' => "ict",
        'title' => "ICT Journal",
        'teaser' => "The Swiss magazine of information technologies for the entreprise",
        'description' => "The Swiss magazine of information technology",
        'urls' => array(
            array(
                'url' => 'http://www.ictjournal.ch',
                'label' => 'ictjournal.ch'
            )
        ),
        'photo' => '/assets/img/partner_ict.png',
        'kind' => $app->sponsors_kinds['media']
    ),
    'cominmag' => array(
        'slug' => "cominmag",
        'title' => "Cominmag",
        'teaser' => "The B2B of marketing, communication and medias",
        'description' => "",
        'urls' => array(
            array(
                'url' => 'http://www.COMINMAG.ch',
                'label' => 'COMINMAG.ch'
            )
        ),
        'photo' => '/assets/img/partner_cominmag.png',
        'kind' => $app->sponsors_kinds['media']
    ),
);