<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

if(array_key_exists("removido", $_POST) && $_POST["removido"]=="true"){
?>
  <p class="alert-success">Produto apagado com sucesso.</p>
<?php
}
?>

<table class="table table-striped table-bordered">

    <?php
      $produtos = listaProdutos($conexao);
      foreach($produtos as $produto) :
    ?>
    <tr>
      <td><?=$produto['nome'] ?></td>
      <td><?=$produto['preco'] ?></td>
      <td><?= substr($produto['descricao'], 0, 40) ?></td>
      <td>
        <form action="remove-produto.php?id=<?=$produto['id']?>" method="post">
        <button  class="btn btn-danger">remover</button>
      </td>
    </tr>
    <?php
      endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
