<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})
->bind('homepage')
;

$app->get('/speakers', function () use ($app) {
    return $app['twig']->render('speakers.html.twig');
})
->bind('speakers')
;

$app->get('/speakers/{slug}', function ($slug) use ($app) {
    if (!isset($app->speakers[$slug])) {
        $app->abort(404, "Speaker $slug does not exist.");
    }

    $speaker = $app->speakers[$slug];

    $talks = array();
    foreach ($app->talks as $talk) {
        if ($talk['speaker'] != "" && $slug === $talk['speaker']['slug']) {
            $talks[] = $talk;
        }
    }

    return $app['twig']->render('speaker.html.twig', array(
        'speaker' => $speaker,
        'talks' => $talks,
        ));
})
->bind('speaker')
;

$app->get('/schedule', function () use ($app) {
    return $app['twig']->render('schedule.html.twig');
})
->bind('schedule')
;


$app->get('/sponsors', function () use ($app) {
    return $app['twig']->render('sponsors.html.twig');
})
->bind('sponsors')
;

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    $page = 404 == $code ? '404.html.twig' : '500.html.twig';

    return new Response($app['twig']->render($page, array('code' => $code)), $code);
});

$app->get('/about', function () use ($app) {
    return $app['twig']->render('about.html.twig');
})
->bind('about');

$app->get('/venue', function () use ($app) {
    return $app['twig']->render('venue.html.twig');
})
->bind('venue');

$app->get('/lausanne', function () use ($app) {
    return $app['twig']->render('lausanne.html.twig');
})
->bind('lausanne');
