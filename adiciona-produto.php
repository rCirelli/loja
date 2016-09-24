<?php include("cabecalho.php"); ?>
<?php
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];

  $conexao = mysqli_connect('localhost', 'root', '', 'loja');
  $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";

if(mysqli_query($conexao, $query)) {
?>
<p class="alert-success">Produto <?= $nome; ?>, de valor R$<?= $preco; ?> adicionado com sucesso!</p>
<?php
}else {
?>
<p class="alert-danger">Produto <?= $nome; ?> não foi adicionado.</p>
<?php
}
?>
<?php include("rodape.php") ?>
