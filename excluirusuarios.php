<?php
include("db.php");
$con = conectarDB();

?>
<div class="container">
  <?php
  $rs = pesquisarDados($con, "usuario");

  if(count($rs) > 0) {

  foreach ($rs as $key => $value/*campoda tablea */) {
  ?>

  <?php ?>
    <table class="table">
      <thead>
        <tr>
          <th hidden scope="col">#</th>
          <th scope="col">Matrícula</th>
          <th scope="col">Nome</th>
          <th scope="col">Gênero</th>
          <th scope="col">cep</th>
          <th scope="col">Ação</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <form action="#" method="post">
            <input name="idusuario" type="hidden" scope="row" value="<?php echo ($value['id']); ?>">
            <th scope="row"><?php echo ($value['id']); ?> </th>
            <td><?php echo ($value['matricula']); ?></td>
            <td><?php echo ($value['nome']); ?></td>
            <td><?php echo ($value['genero']); ?></td>
            <td><?php echo ($value['cep']); ?></td>
            <td>
              <button name="excluir" type="submit" value="usuario" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg>
              </button>
            </td>
          </form>

        </tr>
      </tbody>
    </table>

    
    <?php  } 
    }else {
      echo ("<p> Não a nada na lista </p>");
    }

    ?>

  <?php


  if(isset($_POST['excluir'])){


  $con = conectarDB();
  

  if ($_POST['excluir'] == 'usuario') {
    $tabela = "usuario";
  }
  $resultado = excluirDados($con, $tabela, $_POST['idusuario']);


  if ($resultado) {
    echo ("<div class='alert alert-success' role='alert'>
               Sucesso ao remover ao bd
          </div>");
  } else {
    echo ("<div class='alert alert-danger' role='alert'>
              Falha ao remover os dados ao banco.
          </div>");
  }

  print_r($_POST);
}
  ?>


</div>