<?php

// Home page
$app->get('/', function () use ($app) {
    $offres = $app['dao.offre']->findAll();
    return $app['twig']->render('index.html.twig', array('offres' => $offres));
});

$app->get('/detail/{id}', function ($id) use ($app) {
    $article = $app['dao.offre']->find($id);
    return $app['twig']->render('detail.html.twig', array('offre' => $offre));
});