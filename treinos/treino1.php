<?php
//  if (pergunta) {
//      // roda SE a resposta for sim
//  } else {
//      // roda SE a resposta for não (opcional)
//  }


// $a === $b   // é exatamente igual?
// $a !== $b   // é diferente?
// $a > $b     // é maior?
// $a < $b     // é menor?
// $a >= $b    // é maior ou igual?
// $a <= $b    // é menor ou igual?



// Exercício #1

$idade = 19;
$nota = 10;
$senha = "Abacaxi";
$hora = 23;

if ($idade >= 18) {
    echo "Pode dirigir!<br>";

} else {
    echo "Não pode dirigir<br>";
}

if ($nota >= 7) {
    echo "aprovado<br>";
} else {
    echo "reprovado<br>";
}

if ($senha === "Abacaxi") {
    echo "Pode entrar!<br>" ;
} else {
    echo "Senha errada<br>";
}

if ($hora < 12) {
    echo "Bom dia!<br>";
} else if ($hora <= 17) {
    echo "Boa tarde!<br>";
} else {
    echo "Boa noite!<br>";
}

?>