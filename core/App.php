<?php

namespace Core;

class App
{
    protected $controllerName = "home";
    protected $controller;
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        $controllerName = 'Controllers\\'.ucfirst($url[0]).'Controller';

        if (class_exists($controllerName)) {

            $this->controller = new $controllerName;
        }

        if (isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {

                $this->method = $url[1];
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        $uri = $_SERVER['REQUEST_URI'];
        if (strpos($uri, '?') === true) {
            $uri = substr($uri, 1, strpos($uri, '?'));
        } else {
            $uri = substr($uri, 1, strlen($uri));
        }
        $array = explode('/', $uri);
        //$array = ['controller', 'action']
        if (isset($array[0]) && $array[0] != '') {
            $this->controllerName = $array[0];
        }

        if (isset($array[1]) && $array[1] != '') {
            $this->method = $array[1];
        }

        if (isset($_GET['url'])) {
            $this->params['url'] = $_GET['url'];
        }
        return [$this->controllerName, $this->method];
    }
}
