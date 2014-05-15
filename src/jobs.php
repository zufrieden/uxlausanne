<?php
$app['jobs'] = $app->share(function($app) {
    // @TODO: add a cache
    $feed = 'http://freshjobs.ch/kategorie/design-jobs/feed/';
    $xml = simplexml_load_file($feed);
    if (false === $xml) {
        return array();
    }
    $xml->registerXPathNamespace('dc', 'http://purl.org/dc/elements/1.1/');
    $jobs = array();


    foreach ($xml->xpath('//item') as $item) {
        $categories = array_map(function($cat) { return (string) $cat; }, (array) $item->category);
            $item_dc = $item->children('http://purl.org/dc/elements/1.1/');


            $job = array(
            'title' => (string) $item->title,
            'categories' => $categories,
            'link' => (string) $item->link, // @TODO remove or replace utm tags
            'pubDate' => (string) $item->pubDate,
            'guid' => (string) $item->guid,
            'company' => (string) $item_dc->creator,
        );

        $jobs[] = $job;
    }

    return $jobs;
});
