<?php

namespace Controllers;

use Models\SecondModel;

class SecondController extends \Core\Controller
{
    function index($params)
    {
        $data = SecondModel::getData();
        $this->view('view', $data);
    }
}