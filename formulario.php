<?php
//modelando formulário
//inserir | pesquisar | atuar | excluir
// abrem painel de formulário
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Formuláriooo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <form action="" method="get">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a id="1" type="submit" class="nav-link active" aria-current="page" href="formulario.php?id=1">Inserir</a><!-- id=1 é o codigo da pagina-->
                            </li>
                            <li class="nav-item">
                                <a id="2" class="nav-link"  href="formulario.php?id=2">Pesquisar</a>
                            </li>
                            <li class="nav-item">
                                <a id="3" class="nav-link"  href="formulario.php?id=3">Atualizar</a>
                            </li>
                            <li class="nav-item">
                                <a id="4"  class="nav-link"  href="formulario.php?id=4">Excluir</a>
                            </li>
                        </ul>
                </form>

                
            </div>
            </div>
        </nav>
    </div>


    <?php
    //print_r($_GET);
    if(isset(($_GET['id']))){
        if($_GET['id'] == "1"){
            include "cadastroUsuario.php";
        }else if($_GET['id'] == "2"){
            include "pesquisar.php";
        } else if($_GET['id'] == "3"){
            include "atualizarusuarios.php";
        }else if($_GET['id'] == "4"){
            include "excluirusuarios.php";
        }

    }
    ?>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>