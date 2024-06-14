<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h1>verificador de números primos</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="#">digite um numero</label>
        <input type="text" name="primo">
        <input type="submit" value="enviar">

</form>

    
</body>
</html>


<?php

// Diferença entre os methd="GET"; && methd="POST"; //
//=================================================//

/* methd="GET"; -> transfere os dados para o serviço através da URL, e a quantidade de caracteres é limitado.
 * method="POST"; -> você pode realizar envios mais seguros, e não há limite para transmissão de informações.
 * 
 * ANOTAÇÃO: A diferença principal entre os dois métodos, é basicamente, o envio de informações para o servidor.
 */

 // Diferença entre PE & POO //
 //=========================//

 /* Qual a diferença de programação estruturada e orientada a objetos?
  *==================================================================*
  * POO = Programação Orientada à Objetos.
  * PE = Programação Estruturada.
  * Quando programamos em POO pensamos mais em como manipular e conectar os objetos estabelecendo relações entre eles.
  * Já a Programação Estruturada possui um código estruturado com um começo e um fim, onde os eventos vão ocorrendo em uma ordem pré-determinada, seguindo a sintaxe da linguagem escolhida.
  */

?>
