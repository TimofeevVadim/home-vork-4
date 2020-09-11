<?php

namespace Controllers;

use Models\ThirdModel;

class ThirdController extends \Core\Controller
{
    function index($params)
    {
        $data = ThirdModel::getData();
        $this->view('view', $data);
    }
}