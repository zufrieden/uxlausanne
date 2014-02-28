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
    if (!isset($app->talks[$slug])) {
        $app->abort(404, "Speaker $slug does not have any talk.");
    }

    $speaker = $app->speakers[$slug];
    $talk = $app->talks[$slug];

    return $app['twig']->render('speaker.html.twig', array(
        'speaker' => $speaker,
        'talk' => $talk,
        ));
})
->bind('speaker')
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