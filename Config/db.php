<?php

include_once ('../Config/core.php');

class DB {

    private $PDOInstance = null;
    private static $instance = null;

    private function __construct() {
        $dsn = 'mysql:dbname=php_rush_mvc;host=localhost';
        $user = 'root';
        $password = 'root';
        $this->PDOInstance = new PDO($dsn, $user, $password);   

        try {
            $this->PDOInstance = new PDO($dsn, $user, $password); 
            $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            } catch (PDOException $e) {
            echo "<b>Error PDO:</b> ".$e->getMessage()."<br />\n";
            }

    }
        

    public static function getInstance() {
        if (is_null(self::$instance))
            self::$instance = new DB();
        return self::$instance;
    }

    public function prepare($query) {
        return $this->PDOInstance->query($query);
    }

    public function fetchAll($query) {
        $stm = $this->PDOInstance->query($query);
        $stm->fetchObject();
        return $stm2 = $stm->fetchObject();;
    }
}