<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <!-- Função com  e os tipos de Subrotina:
        * 1) Com instancia
        * 2) Sem instancia-->

        <h2>Calculadora</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Escolha a Operação:<br>
        <input type="radio" name="operacao" value="adicao" checked> Adiçao<br>
        <input type="radio" name="operacao" value="subtracao" > subtração<br>
        <input type="radio" name="operacao" value="multiplicacao" > multiplicação<br>
        <input type="radio" name="operacao" value="divisao" > Divisão<br><br>
        Digite o primeiro número:<br>
        <input type="text" name="num1"><br>
        Digite o segundo número:<br>
        <input type="text" name="num2"><br><br>
        <input type="submit" value="Calculadora">

    </form>
    <?php
    
    // Criando Funções de Matematica //
    //==============================//
    // ANOTAÇÃO: Função são Subrotinas dentro de um algortimo. //
  
    function adicao($a, $b){
        $resp = $a + $b;
        return $resp;
    }
    function subtracao($a, $b){
        $resp = $a - $b;
        return $resp;
    }
    function multiplicacao($a, $b){
        return $a * $b;
    }
    function divisao($a, $b){
        if($b != 0){
            return $a / $b;
        }else{
            return "ERRO: Divisão por zero";
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        
        if((!empty($num1)) && (!empty($num2))){
            switch($operacao){
                case "adicao":
                    $resp = adicao($num1 , $num2);
                    break;
                case "subtracao":
                    $resp = subtracao($num1 , $num2);
                    break;
                case "multiplicacao":
                    $resp = multiplicacao($num1 , $num2);
                    break;
                case "divisao":
                    $resp = divisao($num1 , $num2);
                    break;
            }
        }else{
            $resp = "Por Favor, preencha ambos os números";
        }   
        echo "<h2>$resp</h2>";
    }
    
        
    ?>
       

        
        
    
</body>
</html>