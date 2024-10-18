<?php 
    function conectarDB(){
        //inserir algumas variáveis
        $servername = "localhost"; 
        //preciso do server, nome do usuaria, database e senha.
        $dbname = "aulaaintensiva";
        $username = "admin";
        $password = "123";


        try {
            $con = new PDO("mysql:host=".$servername."; dbname =".$dbname,$username, $password, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "sett names utf-8")); /*  */

            if ($con) {
                return $con;
            }else {
                return null;
            }
        } catch (Exception $e) {
            print_r($e);
        }
    //chamar na página que você quer conectar o banco de dados
    }

    function pesquisarDados($con, $tabela) {

        $sql = "SELECT * FROM $tabela;"; //query a ser enviada

        $query->execute();

        
        while ($rs = $query->fetchAll(PDO::FETCH_ASSOC)){
           // echo $rs['id']."<br>";
            echo $rs[0]['nome']."<br>";
            print_r($rs);s
        } //matrix que recebe todos os dados //recupera os arrays associados

        echo($rs['id']);

    }      
?>