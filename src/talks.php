<?php

$app->talk_kinds = array(
    'workshop' => "Workshop",
    'talk' => "Talk"
);

$app->talks = array(
    'will_evans' => array(
        'slug' => 'will_evans',
        'speaker' => $app->speakers['will_evans'],
        'position' => 0,
        'when' => "Thusday, Mai 22 @ 2pm",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Title of the workshop",
        'teaser' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, fugiat, omnis, molestias sunt quis aliquam nam ipsa excepturi repellat error accusantium qui tempora cum dolorum quaerat ea expedita natus iste.",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, fugiat, omnis, molestias sunt quis aliquam nam ipsa excepturi repellat error accusantium qui tempora cum dolorum quaerat ea expedita natus iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, fugiat, omnis, molestias sunt quis aliquam nam ipsa excepturi repellat error accusantium qui tempora cum dolorum quaerat ea expedita natus iste.",
    ),
    'anna_dahlstrom' => array(
        'slug' => 'anna_dahlstrom',
        'speaker' => $app->speakers['anna_dahlstrom'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Device agnostic design ",
        'teaser' => "how to get your content to go anywhere.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'brigit_geiberger_and_peter_boersma_workshop' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma_workshop',
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Do the right thing",
        'teaser' => "People in the field of User Experience are taught that having empathy for the end-user is the holy grail. We believe that, by studying the way your fellow project team members work, what their needs are, and what & how they deliver, you can develop another type of empathy, one that may prove to be more important for business success and results in a delightful work environment.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'brigit_geiberger_and_peter_boersma_talk' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma_talk',
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Do the right thing",
        'teaser' => "People in the field of User Experience are taught that having empathy for the end-user is the holy grail. We believe that, by studying the way your fellow project team members work, what their needs are, and what & how they deliver, you can develop another type of empathy, one that may prove to be more important for business success and results in a delightful work environment.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
    ),
    'janina_woods' => array(
        'slug' => 'janina_woods',
        'speaker' => $app->speakers['janina_woods'],
        'position' => 0,
        'when' => "Saturday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "The Virtual Reality Experience",
        'teaser' => "An interactive overview of current state of the virtual reality interactions",
        'description' => "In this talk, Janina reflects on the latest evolution of the world of Virtual Reality by showcasing her own research and reflects on how those new devices imply new paradigms of UI and UX - both in games, and in a broader spectrums of fields.   She will then describe a near-future world where our Classic interface with the world will be replaced by an virtual Augmented Reality one and explore usages of Virtual reality features in everyday applications.",
    ),
    'fabian_hemmert' => array(
        'slug' => 'fabian_hemmert',
        'speaker' => $app->speakers['fabian_hemmert'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Bodily Experiences of the Digital",
        'teaser' => "An interactive overview of current state of the virtual reality interactions",
        'description' => "How our body treats digital information like physical stuff, information consumption like food consumption, and technical devices like social, living beings. <br>For many people, the digital world is still hard to grasp. It leaves us cognitively overwhelmed, and bodily unchallenged.   In this session Fabian will develop how our experience of the digital world is metaphorically physical and impacts on our body.  He will demonstrate  ways to make us physically embrace the digital world through industrial and interaction design - by giving life to objects based on their digital presence.   Finally, he will raise the fundamental question of whether we want devices that are behaving like humans, or - worse - humans that are becoming robots. ",
    )

);