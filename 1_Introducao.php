<?php
// > CRIAÇÃO DE CLASSE
class _Pessoa {
    // > CRIAÇÃO DE PROPRIEDADES (CARACTERÍSTICAS)
    public string $nome;
    public int $idade;
    public string $genero;

    public function __construct(/* Se não definir as variáveis acima, 
        pode-se colocar o tipo de visibilidade aqui = "public string $var" */ string $nome, int $idade, string $genero) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
    }

    // > CRIAÇÃO DE MÉTODOS (COMPORTAMENTOS)
    public function comer() {
        return $this->nome . 'está comendo';
    }
    public function dormir() {
        return $this->nome . ' está dormindo';
    }
    public function falar() {
        return $this->nome . ' está falando';
    }
}

// > CRIAÇÃO DE OBEJTO
$pessoa = new _Pessoa('Pedro Oliveira', 16, 'masculino');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
</head>
<body>
    <p>Nome da pessoa: <?php echo $pessoa->nome; ?>.</p>
    <p>Ele(a) tem <?php echo $pessoa->idade; ?> anos.</p>
    <p>É do sexo <?php echo $pessoa->genero; ?>.</p>
    <p><?php echo $pessoa->dormir(); ?>.</p>
</body>
</html>