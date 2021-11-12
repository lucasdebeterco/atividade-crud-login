<?php
include('conn/verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2><br><br>

<a href="crud/inserir.php">Cadastrar Produto</a><br>
<a href="crud/listar.php">Listar Produtos</a><br>
<a href="crud/alterar.php">Alterar Produto</a><br>
<a href="crud/remover.php">Remover Produto</a><br><br>

<h2><a href="conn/logout.php">Sair</a></h2> 