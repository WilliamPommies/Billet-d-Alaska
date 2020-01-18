<?php

class Router{

    private $ctrlr;
    private $view;

    public function routePath(){
        try {
            spl_autoload_register(function($class){
                require_once('model/' . $class . '.php');
            });

            $url = '';
            if (isset($_GET['url'])){
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));

                $controllerClass = "Controller" . $controller;

                $controllerFile = "controller/" . $controllerClass . '.php';

                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->$ctrlr = new $controllerClass($url); 
                } else {
                    throw new Exception("Page introuvable", 1);
                }
            } else {
                require_once('Controller/HomeController.php');
                $this->ctrlr = new HomeController($url);
            }

        } catch (Exception $e){
            $error_msg = $e->getMessage();
            require_once('View/ErrorView.php');
        }
    }

}