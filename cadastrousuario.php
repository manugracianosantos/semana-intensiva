<?php 
    include "db.php";
?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cadastro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!--ele renomeou essa página para letra minuscula-->
<body>
    <div class="container-fluid">
        <form action="#" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Matricula</label>
                <input name="matricula" type="text" class="form-control" id="inputText4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input name="senha" type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Gênero</label>
                <select name="genero" id="inputState" class="form-select" required>
                    <option value="" selected>Selecione...</option> <!--o value vazio faz: quando o usuario tentar envair com esse valor vazio ele nao deixa-->
                    <option value="feminino" >Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="outro" >Prefiro não informar</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">CEP</label>
                <input name="cep" type="text" class="form-control" id="inputZip"> <!--value vazio pra deixar que o usuario digite, se não ele vai pensar -->
            </div>
            <div class="col-12">
                <button name="gravar" value="usuario" class="btn btn-success">Gravar</button> <!--value="usuario" nome da tabela-->
            </div>
        </form>
        <?php 
            if(isset($_POST['gravar'])) {
                $con = conectarDB();
                if($_POST['gravar'] == 'usuario'){
                    $tabela = "usuario";
                }
                print_r($_POST);
                
                $dados = array($_POST['matricula'],$_POST['senha'],$_POST['nome'],$_POST['genero'],$_POST['cep']);

                $resultado = gravarDados($con, $tabela,$dados);

                if($resultado){
                    echo("<div class='alert alert-success' role='alert'>
                             Sucesso ao enviar ao bd
                        </div>");
                }else {
                    echo("<div class='alert alert-danger' role='alert'>
                            Falha ao enviar os dados ao banco.
                        </div>");
                }
            }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>