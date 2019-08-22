<?php


namespace App\Controllers;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->isAuthenticate();
    }

    public function index()
    {
        $this->render('home/index');
    }
}
