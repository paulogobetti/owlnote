<?php

    class Connection {

        private $dbHost = 'localhost';
        private $dbName = 'owlnote';
        private $dbUser = 'webmaster';
        private $dbPass = '&mN7du9y9Z*DhLiKKC';

        public function connect() {

            try {
                $dbConnection = new PDO(
                    "mysql:host=$this->dbHost;dbname=$this->dbName",
                    "$this->dbUser",
                    "$this->dbPass"
                );

                return $dbConnection;
            }

            catch(PDOException $error) {
                echo 'Error: ' . $error->getCode() . '<br>Message: ' . $error->getMessage();
            }

        }

    }
