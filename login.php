
<?php 
    $x=1;
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/main.css">


</head>
  <body>
    <div class="container">
        <form action="#" method="post"> <!-- pode usar o metodo ou o db.php-->
            <div id="div-principal">
                <div class="input-group">
                    <label for="exampleFormControlInput1" class="form-label">Usuário</label> &nbsp;
                    <input type="text" name="user" class="form-control" id="inputUsuario" placeholder="Digite seu Usuário"> <!--name="user" usado como referencia para o backend-->
                </div>
                <br>
                <div class="input-group">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label> &nbsp;&nbsp;&nbsp;<!-- for="exampleFormControlInput1" > usado para leitores de tela-->
                    <input type="password" name="passwd" class="form-control" id="inputSenha" placeholder="*********"> <!--Campo de senha é no máximo *******-->
                </div>
            </div>
            <button name="enviar" type="submit" role="" class="btn btn-primary">Enviar</button>
        </form>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
//imprimir dados do array
   


  if(isset($_POST['enviar'])) {
    
        $username = "manu";
        $senha  = "123";

    print_r($_POST); //exibir as informações

      if($_POST['user'] == $username && $_POST['passwd'] == $senha) { //se no post o user for igual a variavel username ok
        header("Location:principal.php"); //redirecional para página principal
      }
      else{
          echo(" 
                  <div class='alert-danger' role='alert'>
                  Usuário e/ou senha incorretos!
                  </div>
          ");
      }
  }


?>