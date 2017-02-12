<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $username = (new User('Your username'))->getUsername();
        return $this->app['twig']
                    ->render('index.twig', compact('username'));
    }
}
