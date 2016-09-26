<?php include("cabecalho.php"); ?>
<?php
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];

  $conexao = mysqli_connect('localhost', 'root', '', 'loja');
  $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";

if(mysqli_query($conexao, $query)) {
?>
<p class="text-success">Produto <?= $nome ?>, de valor R$<?= $preco ?> adicionado.</p>
<?php
}else {
?>
<p class="text-danger">Produto <?= $nome ?> não foi adicionado.</p>
<?php
}
?>

<?php include("rodape.php"); ?>
