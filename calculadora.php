<?php
class _Calculadora {
    public function __construct(public float $numero1, public float $numero2) {}

    public function somar():float {
        return $this->numero1 + $this->numero2;
    }
    public function menos():float {
        return $this->numero1 - $this->numero2;
    }
    public function vezes():float {
        return $this->numero1 * $this->numero2;
    }
    public function dividir():float {
        return $this->numero1 / $this->numero2;
    }
}

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['n1']) and isset($_POST['n2'])) {
        $n1 = floatval(trim($_POST['n1']));
        $n2 = floatval(trim($_POST['n2']));
        $operacao = $_POST['operacao'];
        $calculadora = new _Calculadora($n1, $n2);
        if ($operacao == 'somar') {
            $mensagem = 'A soma entre eles é: ' . $calculadora->somar();
        }
        else if ($operacao == 'menos') {
            $mensagem = 'A subtração entre eles é: ' . $calculadora->menos();
        }
        else if ($operacao == 'vezes') {
            $mensagem = 'A multiplicação entre eles é: ' . $calculadora->vezes();
        }
        else {
            if ($n2 == 0) {
                $mensagem = 'Não é possível dividir por zero';
            }
            else {
                $mensagem = 'A divisão entre eles é: ' . $calculadora->dividir();
            }
        }
    }
    else {
        $mensagem = 'Você precisa preencher os dois';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora com POO no PHP</h1>
    <form method="POST">
        <input type="number" name="n1">
        <br>
        <input type="number" name="n2">
        <div>
            <input type="submit" name="operacao" value="somar">
            <input type="submit" name="operacao" value="menos">
            <input type="submit" name="operacao" value="vezes">
            <input type="submit" name="operacao" value="dividir">
        </div>
        <p> <?php echo $mensagem; ?> </p>
    </form>
</body>
</html>