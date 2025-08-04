<?php
class _Person {
    public string $nome = "pasdopdas";
    public static int $idade = 24000;
    public static string $reino = "Animal";
    
    public function dormir() {
        return $this->nome . ' está dormindo.';
    }
}

$pessoa = new _Person();
echo $pessoa::$idade;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propriedades e Métodos Estatísticos</title>
</head>
<body>
    <p><?php echo $pessoa->idade;?></p>
</body>
</html>