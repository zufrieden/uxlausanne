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
		"desc" => "Essential member of the UX and design thinking communities, Will Evans has been a specialist in Interaction and User Experience Design for more than 15 years.  After having worked for Lotus/IBM, TheLadders, Kayak.com and MIT, he manages now his own studio, Semantic Foundry, in New York. His works have been published in Business Week, The Economist, Fast Company, Time Magazine, Fortune, MSNBC, The Wall Street Journal."
    ),
    "speaker_valerie-vuillerat" => array(
        "photo" => "speaker_valerie-vuillerat.jpg",
        "name" => "Valérie Vuillerat",
        "twitter" => "valeriewow",
        "url" => "http://ginetta.ch/en",
        "site" => "ginetta.ch",
		"desc" => "Valérie is the Managing Director for Ginetta, a Digital Agency based in Zürich, who can boast of Swiss Government, Swiss Post, Doodle, Raiffeisen bank, local.ch and the University of Basel as its clients. An experienced UX practitioner, used to simplifying complex systems, Valérie has taught User-Oriented Design at the Swiss Marketing Institute in Bern and at somexcloud. She loves Andalucia, long bicycling trips and vanilla ice cream."
    ),
    "speaker_oliver-reichenstein" => array(
        "photo" => "speaker_oliver-reichenstein.jpg",
        "name" => "Oliver Reichenstein",
        "twitter" => "reichenstein",
        "url" => "http://www.ia.net",
        "site" => "ia.net",
		"desc" => "Oliver is the CEO & Founder of the Information Architects design agency, based in Tokyo & Zürich. He studied Philosophy, before noticing that handling abstract concepts was essential for Information Architecture Design. In 2005, he founded IA, that has had clients such as Firefox, Tamedia, Yandex, UBS and Ringier. Ambassador of simplicity and structure, he defends sleek design, with opinions. Admired, often envied and imitated, we are very happy to welcome him for our first edition."
    ),
    "speaker_janina-woods" => array(
        "photo" => "speaker_janina-woods.jpeg",
        "name" => "Janina Woods",
        "twitter" => "Kaori_Ino",
        "url" => "http://www.ateo.ch/",
        "site" => "ateo.ch",
		"desc" => "Janina works in Zurich, where she’s the Game Designer behind Black Island, a horror game for PC and Oculus Rift, in which she tries to exploit fully the immersive quality of the VR headset. After her studies at the ZHdK, she got involved in Game Design at YouRehab, a leading provider of interactive therapy systems for patients with movement disorders, where she was responsible for all aspects of game design."
    ),
    "speaker_ryan-rumsey" => array(
        "photo" => "speaker_ryan-rumsey.jpg",
        "name" => "Ryan Rumsey",
        "twitter" => "ryanrumsey",
        "url" => "http://ryanrumsey.com",
        "site" => "ryanrumsey.com",
		"desc" => "Ryan lives and plays in Lausanne, Switzerland, where he is a User Experience Leader at Nestlé.
Prior to working at Nestlé, he was Sr. Manager of User Experience at Electronic Arts and User Experience Lead at Apple, with his primary focus on building design teams and processes focused on enterprise level CRM, LMS, Portal and Performance Management tools. In his 14+ years leading interactive, creative and development solutions, Ryan has designed and launched products in a wide variety of industries, he specializes in User Experience Design and Evangelization."
    ),
    "speaker_birgit-geiberger" => array(
        "photo" => "speaker_birgit-geiberger.jpg",
        "name" => "Birgit Geiberger",
        "twitter" => "birgitcom",
        "url" => "http://www.birgitg.com/",
        "site" => "birgitg.com",
		"desc" => "Birgit is a Creative Director UX, Design Manager and Visual & Interaction Designer, and has worked for clients such as Olympus Europe, the EDEKA Group, ZEIT Online, Axel Springer Verlag, Monster Global, The Seattle Times, and Toyota Europe.  Birgit is IxDA's Regional Coordinator for Europe & Africa and founder and local leader of the IxDA Hamburg chapter."
    ),
    "speaker_peter-boersma" => array(
        "photo" => "speaker_peter-boersma.jpg",
        "name" => "Peter Boersma",
        "twitter" => "pboersma",
        "url" => "http://www.linkedin.com/in/pboersma",
        "site" => "LinkedIn",
		"desc" => "Peter is an Interaction Designer and Design Process Consultant at UX Team of Two, he studied computer science and ergonomics, and has been working in the UX field since 1995. Worked for clients such as info.nl, Adaptive Path, acted as Director of the Information Architecture Institute, Interaction Design Director for Blast Radius and chairman at The Web and Beyond. Self-proclaimed beer lover, he’s the host of the Amsterdam UX Cocktail Hours."
    ),
    "speaker_fabian-hemmert" => array(
        "photo" => "speaker_fabian-hemmert.jpg",
        "name" => "Fabian Hemmert",
        "twitter" => "fabianhemmert",
        "url" => "http://www.fabianhemmert.com/",
        "site" => "fabianhemmert.com",
		"desc" => "Young researcher, Fabian has nevertheless an impressive record, as he’s already worked for Nintendo Europe et Marvel Comics. His performance talks have been noticed and much commented on during SXSW 2012 & 2013 and TEDxBerlin, especially the one devoted to shape-shifiting cell phones. Fascinated with the non-visual communication techniques, he explores the impact of feeling, weight, touch and movement. He currently works for Deutsche Telekom."
    ),
    "speaker_anna-dahlstrom" => array(
        "photo" => "speaker_anna-dahlstrom.jpg",
        "name" => "Anna Dahlstrom",
        "twitter" => "annadahlstrom.com",
        "url" => "http://www.annadahlstrom.com",
        "site" => "annadahlstrom.com",
		"desc" => "Anna is a former Experience Lead with Dare, the Digital Communication Agency. After a couple of years, she decided to leave her position and go freelance, in order to pursue her own projects. She’s worked for BBC News, Disney, Tropicana, Max Factor, Google, Vodafone and Johnson & Johnson. She’s also an instructor at General Assembly in London where she’s based, although she hangs out in New York every now and then."
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