<?php 
// 1) Primeiro script
// Crie um arquivo PHP que mostre na tela:
// Olá, mundo!

// echo "Olá, mundo!"
// ?>

<?php 
// // 2) Variáveis
// // Crie duas variáveis:
// // nome
// // idade
// // Mostre a frase:
// // Meu nome é ___ e tenho ___ anos.

// echo "Digite seu nome:";
// $nome = readline();

// echo "Digite sua idade:";
// $idade = readline();

// echo "Meu nome é $nome e tenho $idade anos.";
// ?>

<?php 
// 3) Soma simples
// Peça dois números e mostre a soma deles.
// Exemplo de saída:
// A soma é: 15

// echo "Digite o primeiro numero:";
// $n1 = readline();

// echo "Digite o segundo numero:";
// $n2 = readline();

// $soma = $n1 + $n2;
// echo "A soma é:" .$soma;
?>

<?php 
// 4️⃣ Número par ou ímpar
// Peça um número e mostre:
// Número PAR
// Número ÍMPAR

// echo "Digite um numero flofloca:";
// $numero = readline();

// if ( $numero % 2 == 0) {
//     echo "O numero $numero é par";
// } 
// else {
//     echo " O numero $numero é ímpar";
// }
// ?> 

<?php 
// 5️⃣ Maior número
// Peça dois números e mostre qual é o maior.

// echo "Digite o primeiro numero flor:";
// $n1 = readline();

// echo "Digite o segundo numero flor:";
// $n2 = readline();

// if ($n1 > $n2) {
//     echo "O numero $n1 é maior que $n2";
// }
// elseif ($n2 > $n1) {
//     echo "O numero $n2 é maior que $n1";
// }
// else {
//     echo "Os numeros são iguais.";
// }
?>

<?php 
// 6️⃣ Calculadora simples
// Peça:
// número 1
// número 2
// operação (+ − × ÷)
// Mostre o resultado.

// echo "Digite o primeiro numero:";
// $n1 = readline();

// echo "Digite o segundo numero:";
// $n2 = readline();

// echo "Digite uma das operações (+, -, *, /):";
// $operacao = readline();

// if ($operacao == "+") {
//     $resultado = $n1 + $n2;
//     echo "Resultado da soma é:$resultado";
// }
// elseif ($operacao == "-") {
//     $resultado = $n1 - $n2;
//     echo "Resultado da subtração é:$resultado";
// }

// elseif ($operacao == "*") {
//     $resultado = $n1 * $n2;
//     echo "Resultado da multiplicação é:$resultado";
// }

// elseif ($operacao == "/") {
//     if ($n2 == 0) {
//         echo "Não é possivel dividir por zero.";
//     } else {
//     $resultado = $n1 / $n2;
//     echo "O resultado da divisão é: $resultado";
//     }
// }    

// else {
//     echo "Operação inválida.";
// }
?>

<?php 
// 7️⃣ Média do aluno
// Peça 3 notas e mostre:
// Aprovado (≥7)
// Recuperação (≥5 e <7)
// Reprovado (<5)

// $soma = 0;

// for ($i = 1; $i <= 3; $i++ ) {
//     $nota = (float)readline("Digite a ". $i ."ª nota:");
// $soma = $soma + $nota;
// }

// $media = $soma/3;
// echo "A media das notas é: $media\n";

// if ($media >= 7) {
//     echo "APROVADO!!!";
// }

// elseif ($media >= 5 && $media < 7) {
//     echo "Recuperação..";
// }

// else {
//     echo "Reprovado..... :(";
// }
?>

<?php 
// 8️⃣ Tabuada
// Peça um número e mostre a tabuada de 1 a 10.

// $numero = (int)readline("Digite o numero:");
// for ($i = 1; $i <= 10; $i ++) {  
//     $resultado = $numero * $i; 
//     echo "$numero X $i = $resultado\n";
// }
?>

<?php 
// 9️⃣ Números pares de 1 a 100
// Mostre todos os números pares de 1 até 100 na página.

// for ($i = 1; $i <=100; $i++) {
//     if ($i % 2 == 0) {
//         echo "Os pares são:$i\n";
//     }
// }
?>

<?php 
// 🔟 Login simples
// Usuário correto
// admin
// $usuario_correto = "admin";

// while (true) {
//     $usuario = readline("Digite o seu usuário:"); 
//         if ($usuario == $usuario_correto) { 
//             echo "Acesso liberado!!\n";
//             break;   
//         } else {
//             echo "Senha incorreta, tente novamente.\n";
//         }
//     }
?>

<?php 
// 1️⃣1️⃣ Sistema IMC
// Peça peso e altura e mostre a classificação.

// $peso = readline("Digite o seu peso:");
// $altura = readline("Digite a sua altura:");

// $imc = $peso / ($altura*$altura);

//   echo "Seu IMC é: $imc\n";

// if ($imc < 18.5) {
//     echo "Abaixo do peso";
// }

// elseif ($imc >= 18.5 && $imc <= 24.9) {
//     echo "Peso normal";
// }

// elseif ($imc >= 25 && $imc <= 29.9) {
//     echo "Sobrepeso";
// }

// elseif ($imc >= 30) {
//     echo "Obesidade";
// }
?>

<?php 
// 1️⃣2️⃣ Contador de vogais
// Peça uma palavra e conte quantas vogais ela possui.

// $contador = 0;
// $vogais = "AEIOUaeiou";

// $palavra = readline("Digite uma palavra:");

// for ($i = 0; $i < strlen($palavra); $i ++) {
//     $letra = $palavra[$i];


// if (strpos($vogais, $letra) !== false) {
//     $contador ++;
//     }
// }
// echo " A quantidade de vogais é: $contador";
// ?>