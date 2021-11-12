<?php
require('../conn/conexao.php');
if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $marca = $_POST['marca'];
  $valor = $_POST['valor'];
  $quantidade = $_POST['quantidade'];
  $stmt = $conexao -> prepare('INSERT INTO produtos(id, nome, marca, valor, quantidade) VALUES(?,?,?,?,?)');
  $stmt -> bind_param('issii', $id, $nome, $marca, $valor, $quantidade);
  $stmt -> execute();
}
?>
<b>CADASTRAR NOVO PRODUTO</b>
<form action="#" method="POST">
    <div class="field">
        <input name="id" name="text" placeholder="ID do produto" required>
    </div>

    <div class="field">
        <input name="nome" name="text" placeholder="Nome">
    </div>

    <div class="field">
        <input name="marca" name="text" placeholder="Marca">
    </div>

    <div class="field">
        <input name="valor" name="number" placeholder="Valor">
    </div>

    <div class="field">
        <input name="quantidade" name="number" placeholder="Quantidade">
    </div>

    <button type="submit" class="button">Cadastrar</button>
</form>

<a href="../painel.php">voltar</a>