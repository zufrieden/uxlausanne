<?php


$app->schedule = array(
    'wednesday' => array(
        'slug' => 'wednesday',
        'title' => "Wednesday, May 21st",
        'timeslots' => array (
            'wed21:30' => array ( 
                    'slug' => 'wed18:00',
                    'title' => '18:00 – till late',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['opening'],  
            ),
        )
    ),
    'thursday' => array(
        'slug' => 'thursday',
        'title' => "Thursday, May 22nd",
        'timeslots' => array (
            'th8:00' => array ( 
                    'slug' => 'th8:00',
                    'title' => '08:00 – 09:30',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['breakfast'],  
            ),
            'th9:30' => array ( 
                    'slug' => 'th9:30',
                    'title' => '09:30 – 09:40',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['openingremarks'],  
            ),
            'th9:40' => array ( 
                    'slug' => 'th9:40',
                    'title' => '09:40 – 10:30',
                    'kind' => $app->talk_kinds['keynote'],
                    'talk' => $app->talks['giles_colborne_talk'],  
            ),
            'th10:30' => array ( 
                    'slug' => 'th10:30',
                    'title' => '10:30 – 10:50',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['morningbreak'],  
            ),
            'th10:50' => array ( 
                    'slug' => 'th10:50',
                    'title' => '10:50 – 11:30',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['indi_young_talk'],  
            ),
            'th11:35' => array ( 
                    'slug' => 'th11:35',
                    'title' => '11:35 – 12:15',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['brigit_geiberger_and_peter_boersma_talk'],  
            ),
            'thd12:15' => array ( 
                    'slug' => 'thd12:15',
                    'title' => '12:15 - 13:30',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['lunch'],  
            ),
            'th13:30' => array ( 
                    'slug' => 'th13:30',
                    'title' => '13:30 – 17:00',
                    'kind' => $app->talk_kinds['workshop'],
                    'workshops' => array(
                            $app->talks['brigit_geiberger_and_peter_boersma_workshop'],
                            $app->talks['indi_young_workshop'],
                            $app->talks['giles_colborne_workshop'],
                            
                        ),  
            ),
            'th17:00' => array ( 
                    'slug' => 'th17:00',
                    'title' => '17:00 – 17:20',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['afternoonbreak'],  
            ),
            'th17:20' => array ( 
                    'slug' => 'th17:20',
                    'title' => '17:20 – 18:00',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['fabian_hemmert'],  
            ),
        )
    ),



);