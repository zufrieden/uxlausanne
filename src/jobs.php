<?php
$app['jobs'] = $app->share(function($app) {
    // @TODO: add a cache
    $feed = 'http://freshjobs.ch/kategorie/design-jobs/feed/';

    $xml = simplexml_load_file($feed);
    if (false === $xml) {
        return array();
    }

    $jobs = array();
    foreach ($xml->xpath('//item') as $item) {
        $categories = array_map(function($cat) { return (string) $cat; }, (array) $item->category);

        $job = array(
            'title' => (string) $item->title,
            'categories' => $categories,
            'link' => (string) $item->link, // @TODO remove or replace utm tags
            'pubDate' => (string) $item->pubDate,
            'guid' => (string) $item->guid,
        );

        $jobs[] = $job;
    }

    return $jobs;
});
