<?php

    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap {

        protected function initRoutes() {
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'home'
            );
            $routes['login'] = array(
                'route' => '/login',
                'controller' => 'IndexController',
                'action' => 'login' 
            );
            $routes['validarLogin'] = array(
                'route' => '/validarLogin',
                'controller' => 'IndexController',
                'action' => 'validarLogin' 
            );
            $routes['oficina'] = array(
                'route' => '/oficina',
                'controller' => 'AppController',
                'action' => 'oficina' 
            );
            $routes['logout'] = array(
                'route' => '/logout',
                'controller' => 'IndexController',
                'action' => 'logout' 
            );

            $this->setRoutes($routes);
            
        }

    }

?>