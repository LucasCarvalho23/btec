<?php

    namespace App\Models;
    use MF\Model\Model;

    class Login extends Model {

        private $login;
        private $senha;

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }

        public function validarLogin() {
            echo "Vasco";
        }

    }

?>