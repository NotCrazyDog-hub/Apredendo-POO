<?php
// > TESTANDO HERANÇA E VISIBILIDADE 
class _Animal {
    // Visibilidade - public, private & protected
    public string $var = 'Essa é uma string';
    protected string $segredo = 'É segredo';
    public function mostrar() {
        return $this->segredo;
    }
}
// _Cachorro é a Classe Filha de _Animal, para isso usamos o termo >>extends<<
// A Classe Filha herda todos os >>métodos públicos e protegidos<< da Classe Pai
class _Cachorro extends _Animal {
    public function mostrar() {
        return $this->segredo;
    }
}

$animal = new _Animal();
$cachorro = new _Cachorro();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade e Herança</title>
</head>
<body>
    <p><?php echo $animal->var;?></p>
    <p><?php echo $cachorro->mostrar();?></p>
</body>
</html>