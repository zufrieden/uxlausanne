<?php

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_String();
$loader = new Twig_Loader_Filesystem('../app/templates');

$twig = new Twig_Environment($loader);

// @todo add cache
// $twig = new Twig_Environment($loader, array(
//     'cache' => '../app/cache',
// ));

$speakers = array(
    "speaker_will-evans" => array(
        "photo" => "speaker_will-evans.jpg",
        "name" => "Will Evans",
        "twitter" => "semanticwill",
        "url" => "http://semanticfoundry.com",
        "site" => "semanticfoundry.com",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_valerie-vuillerat" => array(
        "photo" => "speaker_valerie-vuillerat.jpg",
        "name" => "Valérie Vuillerat",
        "twitter" => "valeriewow",
        "url" => "http://ginetta.ch/en",
        "site" => "ginetta.ch",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_oliver-reichenstein" => array(
        "photo" => "speaker_oliver-reichenstein.jpg",
        "name" => "Oliver Reichenstein",
        "twitter" => "reichenstein",
        "url" => "http://www.ia.net",
        "site" => "ia.net",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_janina-woods" => array(
        "photo" => "speaker_janina-woods.jpeg",
        "name" => "Janina Woods",
        "twitter" => "Kaori_Ino",
        "url" => "http://www.ateo.ch/",
        "site" => "ateo.ch",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_ryan-rumsey" => array(
        "photo" => "speaker_ryan-rumsey.jpg",
        "name" => "Ryan Rumsey",
        "twitter" => "ryanrumsey",
        "url" => "http://ryanrumsey.com",
        "site" => "ryanrumsey.com",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_birgit-geiberger" => array(
        "photo" => "speaker_birgit-geiberger.jpg",
        "name" => "Birgit Geiberger",
        "twitter" => "birgitcom",
        "url" => "http://www.birgitg.com/",
        "site" => "birgitg.com",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_peter-boersma" => array(
        "photo" => "speaker_peter-boersma.jpg",
        "name" => "Peter Boersma",
        "twitter" => "pboersma",
        "url" => "http://www.linkedin.com/in/pboersma",
        "site" => "LinkedIn",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_fabian-hemmert" => array(
        "photo" => "speaker_fabian-hemmert.jpg",
        "name" => "Fabian Hemmert",
        "twitter" => "fabianhemmert",
        "url" => "http://www.fabianhemmert.com/",
        "site" => "fabianhemmert.com",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    ),
    "speaker_anna-dahlstrom" => array(
        "photo" => "speaker_anna-dahlstrom.jpg",
        "name" => "Anna Dahlstrom",
        "twitter" => "annadahlstrom.com",
        "url" => "http://www.annadahlstrom.com",
        "site" => "annadahlstrom.com",
		"desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper."
    )
);

$team = array(
    "gilles" => array(
        "photo" => "team_gilles.jpg",
        "name" => "Gilles Demarty",
        "twitter" => "gillesdemarty"
    ),
    "simon" => array(
        "photo" => "team_simon.jpg",
        "name" => "Simon Farine",
        "twitter" => "simonfarine"
    ),
    "darja" => array(
        "photo" => "team_darja.jpg",
        "name" => "Darja Gartner",
        "twitter" => "gartner"
    ),
    "jeremie" => array(
        "photo" => "team_jeremie.jpg",
        "name" => "Jérémie Fontana",
        "twitter" => "skynebula"
    ),
    "xavier" => array(
        "photo" => "team_xavier.jpg",
        "name" => "Xavier Alexandre",
        "twitter" => "xavieralexandre"
    ),
    "sophie" => array(
        "photo" => "team_sophie.jpg",
        "name" => "Sophie Delalay",
        "twitter" => "fatallyadapted"
    )
);


echo $twig->render('index.html.twig', array(
    'team' => $team, 
    'speakers' => $speakers
));