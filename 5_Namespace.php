<?php
require "classes/produto.class.php";
require "models/produto.class.php";

use Models as produtoModels;

$produto = new Classe\_Produto();
echo $produto->mostrarProduto();
echo "<br>";
$models = new produtoModels\_Produto();
echo $models->mostrarProduto(); 