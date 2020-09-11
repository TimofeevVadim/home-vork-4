<?php

namespace Controllers;

use Models\FirstModel;

class FirstController extends \Core\Controller
{
    function index($params)
    {
        $data = FirstModel::getData();
        $this->view('view', $data);
    }
}