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

        public function logout() {
            session_start();
            session_destroy();
            header('Location: /');
        }

        public function validarLogin() {
            $login = Container::getModel('login');
            $login->__set('login', $_POST['login']);
            $login->__set('senha', md5($_POST['senha']));
            $return = $login->validarLogin();
            if ($return == true) {
                session_start();
                $_SESSION['login'] = true;
                $this->render('home');
            } else if ($return == false) {
                $_SESSION['login'] = true;
                header('Location: /login?error=error');
            }
        }

    }

?>