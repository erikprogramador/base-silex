<?php

use App\Controllers\{
  HomeController
};


$app['HomeController'] = function () use ($app) {
    return new HomeController($app);
};
