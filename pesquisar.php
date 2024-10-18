<?php
    include "db.php"; //tirar depois pra nao dar conflito com o include da outra página

?>


<div class="container">
    <?php 
        $con = conectarDB();
        pesquisarDados($con, "usuarios");
    ?>
</div>