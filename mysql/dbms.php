<?php

defined ("DB_SERVER") or define ("DB_SERVER", "localhost");
defined ("DB_USERNAME") or define ("DB_USERNAME", "root");
defined ("DB_PASSWORD") or define ("DB_PASSWORD", "");
defined ("DB_DATABASE") or define ("DB_DATABASE", "deepsmoke");


class DBMS {
    
    private static $instance = NULL;    
    private $mysqli = NULL;

    private function __construct() {}

    private function connect_mysqli() {
        $this->mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            die ('DBMS initialization error occurred..');
        }
    }

    private function close_mysqli() {
        $this->getConnection()->close();
    }

    public function getConnection() {
        if ($this->mysqli == NULL) {
            $this->connect_mysqli();
        }
        return $this->mysqli;
    }

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}