<?php

    namespace App\Controllers;
    use MF\Controller\Action;
    use MF\Model\Container;

    class IndexController extends Action {

        public function home() {
            //Lógica de autenticação
            if (1 == 1) {
                $this->render('home');
            } else {
                $this->render('login');
            }
        }

        public function login() {
            $this->render('login');
        }

    }

?>