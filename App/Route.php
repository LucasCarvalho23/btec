<?php

    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap {

        protected function initRoutes() {
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );
            $routes['apps'] = array(
                'route' => '/apps',
                'controller' => 'IndexController',
                'action' => 'apps' 
            );

            $this->setRoutes($routes);
            
        }

    }

?>