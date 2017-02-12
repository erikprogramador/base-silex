<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return $this->app['twig']->render('index.twig');
    }
}
