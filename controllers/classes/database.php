<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

    class Database{
        
        private $hostname = "localhost";
        private $username = "root";
        private $password = "root";
        private $dbname = "todo_list";
        
        public function getHostname() {
            return $this->hostname;
        }
        public function getUsername() {
            return $this->hostname;
        }
        public function getPassword() {
            return $this->hostname;
        }
        public function getDBname() {
            return $this->hostname;
        }
        
        public function ConnectedToDB() {
            try {
                return new PDO("mysql:host=$this->hostname; dbname=$this->dbname", $this->username, $this->password);
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
                }
    }