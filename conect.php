<?php
    class Conexao{
        //pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
        //'mysql:local=localhost;dbname=php_com_pdo'
        private $host= 'mysql:local=localhost;dbname=tem_vaga_ai';
        private $dbname='tem_vaga_ai';
        private $usuario='root';
        private $senha='';

        public function conectar() {
            try{ 
                $conexao = new PDO(
                    $this->host,
                    $this->usuario,
                    $this->senha
                );  
                return $conexao;
            } catch(PDOException $e){
                echo '<pre>';  // <pre> serve para formatar a string abaixo
                print_r($e);
                echo '</pre>';
            }
        }
    }
?>