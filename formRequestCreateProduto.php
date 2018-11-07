<?php
// comentários.
require_once('helperCabecalho.php');
// comentários.
require_once('configuracao.php');
require_once('modeloProduto.php');

// comentários.
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
// comentários.
if(array_key_exists('situacao', $_POST['situacao'])){
    $situacao = "TRUE";
}else{
    $situacao = "FALSE";
}

// comentários.
if(salvarProduto($conn, $nome,$preco,$situacao,$descricao,$categoria_id)){
    echo "<p class='text-success principal'> O produto {$nome} foi cadastrada com sucesso.</p>";
}else{
    $msg = mysqli_error($conn);
    echo "<p class='text-danger principal'> O produto {$nome} não foi cadastrada com sucesso. Favor verificar:{$msg}</p>";
}

// comentários.
require_once('helperRodape.php');