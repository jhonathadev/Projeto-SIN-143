<?php
    class Conection {
        //pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
        //'mysql:local=localhost;dbname=php_com_pdo'
        private $host = 'mysql:local=localhost;dbname=tem_vaga_ai';
        private $dbname = 'tem_vaga_ai';
        private $user = 'root';
        private $password = '';

        public function connect() {
            try { 
                $connect = new PDO(
                    $this->host,
                    $this->user,
                    $this->password
                );  
                return $connect;
            } catch(PDOException $e) {
                echo '<pre>';  // <pre> serve para formatar a string abaixo
                print_r($e);
                echo '</pre>';
            }
        }
    }
?>