<?php

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_String();
$loader = new Twig_Loader_Filesystem('../app/templates');

$twig = new Twig_Environment($loader);

// @todo add cache
// $twig = new Twig_Environment($loader, array(
//     'cache' => '../app/cache',
// ));

$speakers = [
    "speaker_will-evans" => [
        "photo" => "speaker_will-evans.jpg",
        "name" => "Will Evans",
        "twitter" => "semanticwill",
        "url" => "http://semanticfoundry.com",
        "site" => "semanticfoundry.com"
    ],
    "speaker_jeroen-van-geel" => [
        "photo" => "speaker_jeroen-van-geel.jpg",
        "name" => "Jeroen Van Geel",
        "twitter" => "jeroenvangeel",
        "url" => "http://www.jeroenvangeel.com",
        "site" => "jeroenvangeel.com"
    ],
    "speaker_ryan-rumsey" => [
        "photo" => "speaker_ryan-rumsey.jpg",
        "name" => "Ryan Rumsey",
        "twitter" => "ryanrumsey",
        "url" => "http://ryanrumsey.com",
        "site" => "ryanrumsey.com"
    ],
    "speaker_valerie-vuillerat" => [
        "photo" => "speaker_valerie-vuillerat.jpg",
        "name" => "Valérie Vuillerat",
        "twitter" => "valeriewow",
        "url" => "http://ginetta.ch/en",
        "site" => "ginetta.ch"
    ]
];

$team = [
    "simon" => [
        "photo" => "team_simon.jpg",
        "name" => "Simon Farine",
        "twitter" => "simonfarine"
    ],
    "gilles" => [
        "photo" => "team_gilles.jpg",
        "name" => "Gilles Demarty",
        "twitter" => "gillesdemarty"
    ],
    "xavier" => [
        "photo" => "team_xavier.jpg",
        "name" => "Xavier Alexandre",
        "twitter" => "xavieralexandre"
    ],
    "jeremie" => [
        "photo" => "team_jeremie.jpg",
        "name" => "Jérémie Fontana",
        "twitter" => "skynebula"
    ],
    "darja" => [
        "photo" => "team_darja.jpg",
        "name" => "Darja Gartner",
        "twitter" => "gartner"
    ],
    "sophie" => [
        "photo" => "team_sophie.jpg",
        "name" => "Sophie Delalay",
        "twitter" => "fatallyadapted"
    ]
];


echo $twig->render('index.html.twig', array(
    'team' => $team, 
    'speakers' => $speakers
));