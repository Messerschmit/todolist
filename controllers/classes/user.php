<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    class User{
        private $user_id;
        private $name;
        private $username;
        private $user_password;
        
        public function getName() {
            return $this->name;
        }
        
        public function getUsername() {
            return $this->username;
        }
        
        public function getUser_password() {
            return $this->user_password;
        }
        
        public function getUser_id() {
            return $this->user_id;
        }
        
        public function setName($name) {
            $this->name = $name;
        }
        
        public function setUsername($username) {
            $this->username = $username;
        }
        
        public function setUser_password($user_password) {
            $this->user_password = $user_password;
        }        
        
        public function setUser_id($user_id) {
            $this->user_id = $user_id;
        }
        
    }
