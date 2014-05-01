<?php

$app->daynames = array(
    'full' => "Full Program",
    'wednesday' => "Wednesday",
    'thursday' => "Thursday",
    'friday' => "Friday",
);

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
                    'title' => '12:15 – 13:30',
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
            'th18:00' => array ( 
                    'slug' => 'th18:00',
                    'title' => '18:00 – 19:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['thursdaydrinks'],  
            ),
            'th19:00' => array ( 
                    'slug' => 'th19:00',
                    'title' => '19:00 – 20:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['thursdaydance'],  
            ),
        )
    ),
    'friday' => array(
        'slug' => 'friday',
        'title' => "Friday, May 23rd",
        'timeslots' => array (
            'fr8:00' => array ( 
                    'slug' => 'fr8:00',
                    'title' => '08:00 – 09:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['breakfast'],  
            ),
            'fr9:00' => array ( 
                    'slug' => 'fr9:00',
                    'title' => '09:00 – 12:30',
                    'kind' => $app->talk_kinds['workshop'],
                    'workshops' => array(
                            $app->talks['nicolas_nova'],
                            $app->talks['anna_dahlstrom'],
                            $app->talks['ryan_rumsey'],
                            $app->talks['romira_kavcic'],
                            
                        ),  
            ),
            'fr12:30' => array ( 
                    'slug' => 'fr12:30',
                    'title' => '12:30 – 14:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['lunch'],  
            ),        
            'fr14:00' => array ( 
                    'slug' => 'fr14:00',
                    'title' => '14:00 – 14:40',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['adrian_zumbrunnen'],  
            ),
            'fr14:40' => array ( 
                    'slug' => 'fr14:40',
                    'title' => '14:45 – 15:25',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['janina_woods'],  
            ),
            'fr15:25' => array ( 
                    'slug' => 'fr15:25',
                    'title' => '15:25 – 16:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['afternoonbreak'],  
            ),
            'fr16:00' => array ( 
                    'slug' => 'fr16:00',
                    'title' => '16:00 – 16:40',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['simon_raess'],  
            ),
            'fr16:45' => array ( 
                    'slug' => 'fr16:45',
                    'title' => '16:45 – 17:25',
                    'kind' => $app->talk_kinds['talk'],
                    'talk' => $app->talks['oliver_reichenstein'],  
            ),
            
            'fr17:25' => array ( 
                    'slug' => 'fr17:25',
                    'title' => '17:25 – 17:40',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['closingremarks'],  
            ),
            'fr18:00' => array ( 
                    'slug' => 'fr18:00',
                    'title' => '19:00 – 22:00',
                    'kind' => $app->talk_kinds['other'],
                    'talk' => $app->talks['closing'],  
            ),
        )
    ),
);