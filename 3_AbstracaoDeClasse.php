<?php
// > CLASSES ABSTRATAS NÃO PODEM SER INSTANCIADAS, NÃO É POSSÍVEL CRIAR UM OBJETO
// Se um método for abstrato, a classe também deve ser
// Não ha implementação dos métodos, apenas a assinatura (nome, parâmetros e tipo de retorno)
abstract class _ClasseAbstrata {
    abstract protected function pegarValor();
}

class _ClasseConcreta extends _ClasseAbstrata {
    public function pegarValor():string {
        return 'Hello World';
    }
}

$concreta = new _ClasseConcreta();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstração de Classes</title>
</head>
<body>
    <p><?php echo $concreta->pegarValor(); ?></p>
</body>
</html>