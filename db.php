<?php 
    function conectarDB(){
        //inserir algumas variáveis
        $servername = "localhost"; 
        //preciso do server, nome do usuaria, database e senha.
        $dbname = "aulaaintensiva";
        $username = "admin";
        $password = "123";


        try{
            $con = new PDO ("mysql:host=". $servername ."; dbname=".$dbname, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            if($con){
                return $con;
            } else {
                return null;
            }
        } catch(Exception $e) {
            print_r($e);
        }
        
    //chamar na página que você quer conectar o banco de dados
    }

  /*  function pesquisarDados($con, $tabela) {

        $sql = "SELECT * FROM $tabela;"; //query a ser enviada

        $query->execute();

        
        while ($rs = $query->fetchAll(PDO::FETCH_ASSOC)){
           // echo $rs['id']."<br>";
            echo ($rs['id']."<br>".$rs['nome']."<br>".$rs['matricula']."<br>");
           // print_r($rs);
        } //matrix que recebe todos os dados //recupera os arrays associados

        echo($rs['id']);
    }      */
    function pesquisarDados($con, $tabela){
        $sql = "SELECT * FROM $tabela;"; // Query a ser enviada
    
        $query = $con->prepare($sql); // Prepara a Query

        $query->execute(); // Executa a Query
    
        $rs = $query->fetchAll(PDO::FETCH_ASSOC);
        /*while($rs = $query->fetch(PDO::FETCH_ASSOC)){
            //print_r($rs[0]["id"]."<br>");
            echo($rs['nome']);
        } */
       //var_dump($rs);
       return $rs; /*'  "       "  ' */
    }   /*conexao com a tablea, tabela, campos que ele vai puxar e enviar pro banco como  */                            
    function gravarDados($con, $tabela, array $dados){

        $sql = "INSERT INTO $tabela (matricula, senha, nome, genero, cep) VALUES ('".$dados[0]."', '".$dados[1]."', '".$dados[2]."', '".$dados[3]."', '".$dados[4]."')";
        $query = $con->prepare($sql); // Prepara a Query
        $resultado = $query->execute(); //executa query do banco de dados

        if ($resultado){
            return true;
        }else{
            return false;
        }
    }
    function excluirDados($con, $tabela, $condicao) {
        $sql = "DELETE FROM `usuario` WHERE id = $condicao";

        $query = $con->prepare($sql);
        $resultado = $query->execute();

        if ($resultado){
            return true;
        }else{
            return false;
        }

    }
    function atualizarDados($con, $tabela, $condicao, array $dados) {
        $sql = "UPDATE `usuario` SET 
        matricula='".$dados[0]."',nome=".$dados[1]."',genero='".$dados[2]."',cep='".$dados[3]."' WHERE id = $condicao";
        $query = $con->prepare($sql);
        $resultado = $query->execute();

        if ($resultado){
            return true;
        }else{
            return false;
        }

    }


?>