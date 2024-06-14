<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Trabalhando com Matrizes</h1>
    
    <?php

    // Criando Matriz Bidimencional //
    //=============================//
        $matriz = array(
            ["0,1","0,2","0,3","0,4"],
            ["1,1","1,2","1,3","1,4"],
        );
        echo "1° forma de criar uma matriz<br>";
        echo $matriz[0][1];
        echo "<hr>";

     // Outra forma de criar Matriz Bidimencional // 
    //==========================================//

        $matriz2 = array(
            array("a0","b1","c2"),
            array("d0","e1","f2")
        );
        echo "2° forma de criar uma matriz<br>";
        echo $matriz2[1][2];
        echo "<hr>";



    // Criando Matriz Bidimencional Simples para Objeto//
    //================================================//
    $agenda2 = [
        'Antony' =>[
            'telefone'              => '11 9 6917-0185',
            'email'                 => 'henritony73@gmail.com',
            'data de nascimento'    => '10/04/1990'
        ],
    ];
    echo "3° forma de criar uma matriz<br>";
    echo $agenda2['Antony']['email'];
    echo "<hr>";


    // Criando Matriz Bidimencional Composta para Objeto//
    //=================================================//
    $agenda2 = [
        'Antony' =>[
            'telefone'              => ['11 9 6917-0185','11 9 6585-7185'],
            'email'                 => 'henritony73@gmail.com',
            'data de nascimento'    => '10/04/1990'
        ],
    ];
    echo "4° forma de criar uma matriz<br>";
    echo $agenda2['Antony']['email'],"<br>";
    echo $agenda2['Antony']['telefone'][1];
    echo "<hr>";

     // Criando Matriz Tridimencional Composta para Objeto//
    //==================================================//
    $agenda2 = [
        'Antony' =>[
            'telefone'              => [
                'whatsapp'          => ['11 9 6917-0185','11 9 6585-7185'],
                'fixo'              => "11 3333-7777"
            ],
            'email'                 => 'henritony73@gmail.com',
            'data de nascimento'    => '10/04/1990'
        ],
    ];
    echo "5° forma de criar uma matriz<br>";
    echo $agenda2['Antony']['telefone']['whatsapp'][1],"<br>";
    echo $agenda2['Antony']['telefone']['fixo'];
    echo "<hr>";


   
    // Criando Matriz Tridimencional para Objeto //
    //==========================================//
        $agenda = [
                'Antony' =>[
                    'telefone'          =>["11 - 00000-0000", "11 - 00000-0000"],
                    'email'             =>["antonu.hroliveira@senacsp.edu.br","henritony73@gmail.com"],
                    'data-nascimento '  =>['10/04/1990']
                ],
                'fulano' =>[
                    'telefone'          =>["11 - 00000-0000", "11 - 00000-0000"],
                    'email'             =>["fulano.fulano@senacsp.edu.br","fulano25@gmail.com"],
                    'data-nascimento'   =>['01/01/2000']
                ],
            ];
            echo "6° forma de criar uma matriz<br>";
            echo $agenda['fulano']['data-nascimento'][0];
            echo "<hr>";



        // Outra forma de Criar matriz Tridimencional //
        //===========================================//
        $matriz3 = [
            [
                ["0",1],// Coluna 0
                [2], // Coluna 1
                [3,4], //Coluna 2
            ], // Linha 0
        ];
        echo "7° forma de criar uma matriz<br>";
        echo $matriz3[0][2][1];
        echo "<hr>";


        // Outra forma de Criar matriz Tridimencional //
        //===========================================//
        $matriz4 = [
            [
                [["0","1"],12],// Coluna 0
                [2], // Coluna 1
                [3,4], //Coluna 2
            ], // Linha 0
        ];
        echo "8° forma de criar uma matriz<br>";
        echo $matriz4[0][0][0][1],"<br>";
        echo $matriz4[0][0][1];

        

        
   
    ?>
   
</body>
</html>