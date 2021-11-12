<?php
include('../conn/verifica_login.php');

require_once("../conn/conexao.php");
if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $marca = $_POST['marca'];
  $valor = $_POST['valor'];
  $quantidade = $_POST['quantidade'];
  $result = $conexao->query("UPDATE produtos SET nome='$nome', marca='$marca', valor='$valor', quantidade='$quantidade' WHERE id='$id'");
}
?>
<b>ALTERAR PRODUTO</b>
<form action="#" method="POST">
    <div class="field">
        <input name="id" name="text" placeholder="ID do produto" required>
    </div>

    <div class="field">
        <input name="nome" name="text" placeholder="Novo nome">
    </div>

    <div class="field">
        <input name="marca" name="text" placeholder="Nova marca">
    </div>

    <div class="field">
        <input name="valor" name="number" placeholder="Novo valor">
    </div>

    <div class="field">
        <input name="quantidade" name="number" placeholder="Nova quantidade">
    </div>

    <button type="submit" class="button">Alterar</button>
</form>

<a href="../painel.php">voltar</a>