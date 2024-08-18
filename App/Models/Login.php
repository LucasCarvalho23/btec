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
            $query = "SELECT id, login, senha FROM cadastro WHERE login = :login AND senha = :senha";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":login", $_POST['login'], \PDO::PARAM_STR);
            $stmt->bindValue(":senha", md5($_POST['senha']), \PDO::PARAM_STR);
            $stmt->execute();
            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);
            if (isset($usuario['login']) && isset($usuario['senha'])) {
                $usuarioLogado = true;
            } else {
                $usuarioLogado = false;
            }
            return $usuarioLogado;
        }

        public function inserirLogin() {
            $query = "INSERT INTO cadastro(cpf, login, senha) VALUES ('11111111111', :login, :senha)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':login', $this->__get('login'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();
            return true;
        }

    }

?>