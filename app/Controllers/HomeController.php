<?php

namespace App\Controllers;

use App\Models\User;
use Silex\Application;

class HomeController
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function index()
    {
        $username = (new User('Your username'))->getUsername();
        return $username;
        return $this->app['twig']
                    ->render('index.twig', compact('username'));
    }
}
