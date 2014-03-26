<?php

$app->talk_kinds = array(
    'workshop' => "Workshop",
    'talk' => "Talk"
);

$app->talks = array(
    'anna_dahlstrom' => array(
        'slug' => 'anna_dahlstrom',
        'speaker' => $app->speakers['anna_dahlstrom'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Device Agnostic Design ",
        'teaser' => "how to get your content to go anywhere",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'brigit_geiberger_and_peter_boersma_talk' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma_talk',
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "UX sells, but not by itself",
        'teaser' => "A deep exploration on the mechanism of selling UX. ",
        'description' => "Designing a user experience is only half the job. The other half is responding to a brief (whether internal or external) by defining the scope and selling the project. In many organizations, our work is defined by project managers and sold by sales people. But shouldn't we be responsible for defining our work? And shouldn't we be as good at selling it as the sales people?<br/>In this presentation, we want to share our thoughts about - and experiences with - selling UX work. We want to help you:<ul><li>Identify who you are selling to and how to flex your selling style</li><li>Pick the right content and structure for your proposal</li><li>Apply the same tricks that salespeople use to be successful</li></ul>",
    ),
    'brigit_geiberger_and_peter_boersma_workshop' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma_workshop',
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 1,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Do The Right Thing",
        'teaser' => "Learn how to make your design accepted by building a better understanding of the design process and the people you will interact with.",
        'description' => "<p>People in the field of User Experience are taught that having empathy for the end-user is the holy grail. We believe that, by studying the way your fellow project team members work, what their needs are, and what & how they deliver, you can develop another type of empathy, one that may prove to be more important for business success and results in a delightful work environment. </p><p>In the first half of this workshop, we want to walk you through the design process and the people you will meet on the way, mostly from outside of your design team's environment. We will show how your skills and contributions allow you to influence their work and, indirectly, the resulting end-user experience.<br/>Peter will explain that documenting your organization's design process allows you to sell your work better, to train new team members easier, to maintain a consistent vocabulary for your team, and to measure and improve your team’s effectiveness.<br/>Activities in this part will include sketching organizational charts and design process diagrams to identify the relevant people to influence, as well as specifying input and deliverables that will help your organization to identify, design and build successful user experiences. The end-result is a plan to improve your process.</p><p>In the second half, we will focus on how to successfully communicate your contributions to different stakeholders during the design process.<br/>Birgit will explain the concept of communication styles, and show you how to identify your own style and that of co-workers. She will teach you how to adapt your own style to others to ensure you will be heard during a project, and help you to overcome conflicts. <br/> Activities in this part will include discussing a typical work-related communication problem; finding a solution and gaining a common ground; a self evaluation exercise; applying the communication styles on the earlier introduced problem and finding more effective ways to solve this (and other) challenges.</p><p>We believe that by paying attention to these two aspects, process and people, you will develop that other kind of empathy, the kind that makes you a better participant in the design process, helps you communicate your designs better, while enjoying your work more. It makes you do the right thing.</p><h4>Who is this workshop for?</h4><p>User Experience designers, of course, as well as people in the roles around the design process: from user researchers, via project managers and front-end developers, to account managers and heads of design departments.</br>The focus of this workshop is on learning how to determine the best design process for your team and the importance of communication that is needed to successfully work within a team environment.</p><h4>What will you learn?</h4><ul><li> Understand the roles involved in the design process</li><li>Document your work process</li><li>Define your team's deliverables</li><li>Communicate your process</li><li>Communication style theories</li><li>Understand your own communication style and that of co-workers</li><li>Methods to flex your style to others</li><li>Become aware of - and overcome - communication pain-points in the design process</li></ul><h4>Prior knowledge from participants:</h4><p>It helps if participants have thought about their design process and the way they communicate before but, more importantly, they should have some experience designing in different teams and for different internal or external clients.</p>",    
    ),
    'janina_woods' => array(
        'slug' => 'janina_woods',
        'speaker' => $app->speakers['janina_woods'],
        'position' => 0,
        'when' => "Saturday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "The Virtual Reality Experience",
        'teaser' => "An interactive overview of current state of the virtual reality interactions",
        'description' => "In this talk, Janina reflects on the latest evolution of the world of Virtual Reality by showcasing her current concrete work and on how those new devices imply new paradigms of UI and UX - in games as well as in a broader spectrum of fields. <br />She will then describe a near-future world where our current interface with the world will be replaced by an virtual Augmented Reality one and explore usages of Virtual reality as featured in marketing and game contexts.",
    ),
    'fabian_hemmert' => array(
        'slug' => 'fabian_hemmert',
        'speaker' => $app->speakers['fabian_hemmert'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Bodily Experiences of the Digital",
        'teaser' => "How our body treats digital information like physical stuff, information consumption like food consumption, and technical devices like social, living beings.",
        'description' => "For many people, the digital world is still hard to grasp. It leaves us cognitively overwhelmed, and bodily unchallenged. <br/>  In this session Fabian will develop how our experience of the digital world is metaphorically physical and impacts on our body. <br/>  He will demonstrate  ways to make us physically embrace the digital world through industrial and interaction design - by giving life to objects based on their digital presence. <br/>  Finally, he will raise the fundamental question of whether we want devices that are behaving like humans, or - worse - humans that are becoming robots.",
    ),
    'nicolas_nova' => array(
        'slug' => 'nicolas_nova',
        'speaker' => $app->speakers['nicolas_nova'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Design Ethnography and User-Centered Design : The missing link",
        'teaser' => "How to make your user research actionable",
        'description' => "One of the premises of User-Centered Design is that documenting people’s practices through field work (observation, interviews, etc.) is relevant to inspire and frame design or innovation.   <br />  However - more often than not - this premise corresponds to a form of wishful thinking, as opposed to an actual approach used by designers. This problem is quite prevalent when it comes to explaining how to transfer results from field research to design purposes. This phase is indeed very briefly dealt with, or presented very quickly without a thorough explanation of the different sets of solution possibilities. This workshop focuses on how to use results and collected data from field research in order to turn them as a design output.  <br />  The attendee will go through several activities to understand the different kind of insights that exist in field research and how they can be turned into design decisions for each steps of a project.",
    ),
    'oliver_reichenstein' => array(
        'slug' => 'oliver_reichenstein',
        'speaker' => $app->speakers['oliver_reichenstein'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Information ↔ Entropy",
        'teaser' => "Will information technology affect our minds the same way the environment was affected by our analogue technology?",
        'description' => "Designers hold a key position in dealing with ever increasing data pollution. We are mostly focussed on speeding things up, on making sharing easier, faster, more accessible. But speed, usability, accessibility are not the main issue anymore. The main issues are not technological, they are structural, processual. <br/> What we lack is clarity, correctness, depth, time. Are there counter-techniques we can employ to turn data into information, information into knowledge, knowledge into wisdom?",
    )

);