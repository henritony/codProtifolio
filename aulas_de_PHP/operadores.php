 <!-- Tag de código em PHP -->

 <?php

echo "Olá Mundo!!!<br><br><hr>";
/*
*Comentario 
*em
*bloco
*/

// pular linha <br>
echo "Antony Henrique01<br>";

// criando variavel em php
$nome = "Antony H.R Oliveira";

// Saida Concatenando Constante e Variavel

// 1° metodo
echo "Bem-Vindo $nome<br>";
// 2° metodo
echo "Bem-Vindo",$nome, "<br>";
// 3° metodo
echo " Bem-Vindo " . $nome . " ao sistema <hr>";

// Formas "ERRADAS DE NOMEAR UMA VARIAVEL" //

// echo "Bem-Vindo $Nome<br>";
// echo "Bem-Vindo $NOME<br>";

/*
   Operadores Aritiméticos
==============================

* -> multiplicação
/ -> divisão
+ -> adiçaõ
- -> subtração
% -> módulo (resto da divisão)
** -> exponencial

   Operadores lógicos
================================

E -> &&
OU -> ||
NÃO -> ! 

*/
// Exemplo Módulo //
echo "<p>".(3%2)."</p>";
// Exemplo Exponenciação //
echo "<p>".(3**2)."</p>";

// Outra forma de impressão de tela //
//=================================//
print "<h1> Eu sou PHP </h1>";

// Anotação: para impressão pode usar o "echo" ou o "print" mas para as boas práticas só use um para todo o código //

/* TIPOS DE VARIAVEIS 
======================

string = Conjunto de caracteres
integer = números inteiros
float = números decímais
boolean = valores lógicos
array = vetor ou matriz
object = objetos (classe)

As variaveis podem ser :
=========================

Global = para todo o código
Local = para um local do código
Static (Constante) = uma var que tem o seu valor fixo



*/








?>