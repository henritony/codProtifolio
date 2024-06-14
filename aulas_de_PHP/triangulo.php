
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío tipos de triângulos</title>
</head>
<body>
    <h1>Exercicío para forma tipos de triângulos:</h1>
    <h2>Crie um programaque após receber 3 valores inteiros;<br>
Valide se os valores fornecidos forma um triângulo;<br>
Após validado imprima qual triângulo foi formado;<br>
    3 lados iguais triângulo equilátero;<br>
    2 lados iguais e um lado diferente triângulo isósceles;<br>
    3 lados diferentes triângulo escaleno;<hr></h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="#">Digite os numeros:</label><br>
    <input type="text" name="lado01" ><br>
    <input type="text" name="lado02" ><br>
    <input type="text" name="lado03" ><br>
    <input type="submit">

</form>
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$lado01 = $_POST['lado01'];
$lado02 = $_POST['lado02'];
$lado03 = $_POST['lado03'];
    if($lado01 == $lado02 && $lado02 == $lado03){
    $resp = "triangulo equilatero";

    }elseif($lado01 == $lado02 && $lado02 != $lado03 ){
        $resp = "triangulo isosceles";
    }else {
        $resp = "triangulo escaleno";
    }
   

}
echo "$resp";







?>