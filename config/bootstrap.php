<?php

use Silex\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application;

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
