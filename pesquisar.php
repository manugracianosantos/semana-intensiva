<?php
    include("db.php");
    $con = conectarDB();

?>
<div class="container">
    <?php
        $rs = pesquisarDados($con,"usuario");
        foreach ($rs as $key =>$value/*campoda tablea */) {

    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Matrícula</th>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
      <th scope="col">cep</th>

    </tr>
  </thead> 
  <tbody>
    <tr>
      <th scope="row"><?php echo($value['id']); ?>  </th>
      <td><?php echo($value['matricula']); ?></td>
      <td><?php echo($value['nome']); ?></td>
      <td><?php echo($value['genero']); ?></td>
      <td><?php echo($value['cep']); ?></td>

    </tr>
  </tbody>
</table>

<?php  } ?>
</div>