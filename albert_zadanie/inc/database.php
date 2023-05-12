<?php

    class Database{
        public $conn;
        function __construct(){
            $this -> conn = new PDO ('mysql:host=localhost;dbname=web;charset=utf8','root','');

            if($this->conn){
                
            } else {
                echo 'Nie sme spojeni s databazou';
            }
        }
    }
?>