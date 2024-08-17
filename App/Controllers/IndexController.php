<?php

    namespace App\Controllers;
    use MF\Controller\Action;
    use MF\Model\Container;

    class IndexController extends Action {

        public function home() {
            //Lógica de autenticação
            if (1 != 1) {
                $this->render('home');
            } else {
                $this->login();
            }
        }

        public function login() {
            $this->render('login');
        }

        public function validarLogin() {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            echo ("<hr>");
            $login = Container::getModel('login');
            $login->__set('login', $_POST['login']);
            $login->__set('senha', $_POST['senha']);
            echo "<pre>";
            print_r($login);
            echo "</pre>";
            //$login->validarLogin();
            //$this->render('login');
        }

    }

?>