<?php

use App\User;

$app->get('/', function () use ($app) {
    $user = new User('Your username');
    $username = $user->getUsername();
    return $app['twig']->render('index.twig', compact('username'));
});
