<?php


$app->schedule = array(
    'wednesday' => array(
        'slug' => 'wednesday',
        'title' => "Wednesday, May 21st",
        'timeslots' => array (
            'wed21:30' => array ( 
                    'slug' => 'wed21:30',
                    'title' => '21:30 – till late',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['closing_party'],  
            ),
        )
    ),
    'thursday' => array(
        'slug' => 'thursday',
        'title' => "Thursday, May 22nd",
        'timeslots' => array (
            'th9:00' => array ( 
                    'slug' => 'th9:00',
                    'title' => '09:00 – 09:45',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['brigit_geiberger_and_peter_boersma_talk'],  
            ),
            'th9:14' => array ( 
                    'slug' => 'th9:14',
                    'title' => '09:00 – 09:45',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['brigit_geiberger_and_peter_boersma_talk'],  
            ),
            'thd12:00' => array ( 
                    'slug' => 'thd12:00',
                    'title' => '12:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['lunch'],  
            ),
            'th9:50' => array ( 
                    'slug' => 'th9:50',
                    'title' => '09:50 – 13:00',
                    'kind' => $app->talk_kinds['workshop'],
                    'workshops' => array(
                            $app->talks['anna_dahlstrom'],
                            $app->talks['brigit_geiberger_and_peter_boersma_workshop'],
                            $app->talks['nicolas_nova'],
                            $app->talks['nicolas_nova'],
                        ),  
            ),
        )
    ),



);