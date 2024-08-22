<?php

    namespace App\Controllers;
    use MF\Controller\Action;
    use MF\Model\Container;

    class AppController extends Action {
        
        public function oficina() {
            echo "Chegamos até aqui";
            $this->render('oficina');
            //header('Location: /oficina');
        }

    }

?>