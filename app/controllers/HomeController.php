<?php

namespace Controllers;

class HomeController extends \Core\Controller
{
    function index($params)
    {


        $this->view('home/index', []);
    }
}