<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor & Matriz</title>
</head>
<body>
    
</body>
</html>

<?php
// Criando vetor //
//==============//

// 1° Modelo de Vetor //
// Vetor Simples //
$vetor1 = array (
    "Antony",
    "10/04/1990",
    34,
    "11 98517-0185",
    true
);

echo $vetor1[0]."<br>".$vetor1[1]."<hr>";


// 2° Modelo de Vetor //
// Vetor sem a palavrea = "array" //
//====================================//

$vetor2 = [
    "Tii-07",
    "Lab-31",
    "Manhã",
    true,
    false
];

echo $vetor2[1]."<hr>";

//===========================================================//

// 3° Modelo de Vetor //
// Vetor com Parâmetro //
//===========================//

$vetor3 = array(
    "nome" => "Antony",
    "Data de Nascimento" => "10/04/1990",
    "tel" => "(11) 96917-0185",
    "ativo" => true
);

echo $vetor3["tel"]."<hr>";

// Loop para vetor com parametro //
// 1° Para imprimir o tipo de parametro e o seu valor//
//======================================================//

foreach($vetor3 as $chave => $valor){
    echo "{$chave}: {$valor}"."<br>";
}
echo "<hr>";

// Loop para vetor com parametro //
// 1° Para imprimir só os valor dos paramêtros//
//=========================================================//
foreach($vetor3 as $chave => $valor){
    echo "{$valor}"."<br>";
}
echo "<hr>";

// Tipos de impressão para Vetor //
//==============================//

// Imprime todas os dados de Vetor.
// Imprime os tipos de imformações e quantidade de caracter usado.
var_dump($vetor3);
echo "<hr>";

// Imprime todo o Vetor de uma só vez.
print_r($vetor3);
echo "<hr>";

// Remove o primeiro item do Vetor "array_shift"
array_shift($vetor3);
print_r($vetor3);
echo "<hr>";

// Remove o último item do Vetor.
array_pop($vetor3);
print_r($vetor3);
echo "<hr><br>";


//=============================================================//

// Ordem dentro do Vetor //
//======================//

$vetor4 = ["Fusca", "Brasilia", "Palio", "Hb20"];
// sort($vetor4); <- é para colocar os valores em ordem crescente //
sort($vetor4);
print_r($vetor4);
echo "<hr>";

$vetor4 = ["Fusca", "Brasilia", "Palio", "Hb20"];
// sort($vetor4); <- é para colocar os valores em ordem decrescente //
rsort($vetor4);
print_r($vetor4);
echo "<hr>";

// Organiza em Ordem Crescente o Vetor com Paramêtro de acordo com os valores
asort($vetor3);
print_r($vetor3);
echo "<hr>";

// Organiza em Ordem decrescente o Vetor com Paramêtro de acordo com os valores
arsort($vetor3);
print_r($vetor3);
echo "<hr>";

// Organiza em Ordem Crescente o vetor com Paramêtro de acordo com a Chave.
ksort($vetor3);
print_r($vetor3);
echo "<hr>";

// Organiza em Ordem Decrescente o vetor com Paramêtro de acordo com a Chave.
krsort($vetor3);
print_r($vetor3);
echo "<hr>";

//==================================================================================//


// Remover Elementos repetidos dentro do Vetor //
//============================================//

$vetor5 = [3,4,6,8,3,4,9,7,3];

// Faz tratamento dentro de um Vetor = "array_unique"//
$vetor5 = array_unique($vetor5);
print_r($vetor5);
echo "<hr>";

//====================================================================================//

// Impressão de Vetor Sem Paramêtro usando Foreach do $vetor4 //

foreach ($vetor4 as $carros){
    echo "$carros <br>";
}
echo "<br>";

//=====================================================================================//

// Imprime a Quantidade de indice dentro de um Vetor usando o "echo count(nome_do_vetor); //
//==================================================//
echo count($vetor4);
echo "<hr>";

//=====================================================================================//

// Imprissão dos Valores do Vetor4 usando o loop "for" //
//====================================================// 
for($i = 0; $i <count($vetor4); $i++){
    echo "$vetor4[$i] <br>";
}
echo "<hr>";




?>