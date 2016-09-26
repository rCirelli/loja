<?php include("cabecalho.php"); ?>
<?php
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];
  $conexao = mysqli_connect('localhost', 'root', '', 'loja');

  function insereProduto($conexao, $nome, $preco){
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
  }

if(insereProduto($conexao, $nome, $preco)) {
?>
<p class="text-success">Produto <?= $nome; ?>, de valor R$<?= $preco; ?> adicionado.</p>
<?php
}else {
  $msg = mysqli_error($conexao);
?>
<p class="text-danger">Produto <?= $nome; ?> não foi adicionado. <?= $msg; ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
