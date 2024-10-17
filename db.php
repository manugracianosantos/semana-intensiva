
 
<?php 
 //funcionando como banco de dados

function autenticar() {
    $username = "manu";
    $senha  = "123";

    if(isset($_POST)) {
        if($_POST['user'] == $username && $_POST['passwd'] == $senha) { //se no post o user for igual a variavel username ok
            header("Location:principal.php"); //redirecional para página principal
        }
        else{
            header("Location:login.php"); //redireciona para página de login novamente
        }
    }
    else {
        header("Location:login.php");
    }


    //variavel global post $_post-> array 
    //isset () -> função que verifica se a váriavel foi preenchida
    //pegar a variavel POST e ler o usuário e senha
}
    autenticar(); //chamando a função
?>
