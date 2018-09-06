<?php

    //require_once '../Src/session.php';

    class Request{

        public  $url;
        public  $posts;
        private $session;

        function __construct(){
            $this->url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
            // recupère les posts s'il y en a
            if (!empty($_POST)){
                $this->posts = $_POST;
            }
            //$this->session = new Session();
        }

        public function getSession() {
            return $this->session;
        }
    }

?>
