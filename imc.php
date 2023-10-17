<?php
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

function classificarPeso($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25.0 && $imc <= 29.9) {
        return "Pré-obesidade";
    } elseif ($imc >= 30.0 && $imc <= 34.9) {
        return "Obesidade Grau 1";
    } elseif ($imc >= 35.0 && $imc <= 39.9) {
        return "Obesidade Grau 2";
    } else {
        return "Obesidade Grau 3";
    }
}


$imc = calcularIMC($peso, $altura);
$observacao = classificarPeso($imc);

echo "Nome: $nome\n";
echo "Idade: $idade anos\n";
echo "IMC: $imc\n";
echo "Observação sobre o Peso: $observacao\n";
?>
