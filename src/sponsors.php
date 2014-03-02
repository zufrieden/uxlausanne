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
        'kind' => $app->sponsors_kinds['major']
    ),
);
$app->sponsors_executive = array(
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
        'kind' => $app->sponsors_kinds['executive']
    ),
);