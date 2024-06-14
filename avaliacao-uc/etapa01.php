<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador 03</title>
</head>
<body>
    <h1> Projeto Integrador 03</h1>

    <h2> Descrição: <br> Crie um sistema em etapas usando formulario de HTML com PHP</h2><br>
===============================================================================================================================================
===============================================================================================================================================

    <h2> 1° Etapa:
         <br> Captura os Seguintes Dados:
         <br> Nome, E-mail, Senha.<br> <Strong>Porem a Senha com confirmação Logo os dois campos deve conter a mesma senha.</Strong></h2><br>
===============================================================================================================================================
    <h2> 2° Etapa: 
        <br> Captura os Dados Bancarios do Cartão de Credito Contendo este Dados.<br>
         Nome do Cartão, Número do Cartão, 
         Código de Validação, Mês e Ano de Vencimento, 
         Cpf do User, Tipo de Plano Selecionado pelo User. </h2><br>
===============================================================================================================================================

    <h2> 3° Etapa: <br> Perfil do User Master Capitura os Seguintes Dados. 
        <br> Estilo de Categoria que o User Gosta para Criar uma Lista de opções para no Futuro, <br> nome do perfil</h2><br>
===============================================================================================================================================

    <h2> 4° Etapa: <br> <strong>COM TODOS OS DADOS ACIMA FAÇA:
         <br> ORGANIZA OS DADOS EM UMA MATRIZ MULTIDIMENCIONAL.</strong></h2><br>
===============================================================================================================================================

    <h2> 5° Etapa: 
        <br> <strong> IMPRIMA EM UMA TABELA EM HTML TODA A MATRIZ.</strong></h2>
===============================================================================================================================================
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° Etapa</title>
</head>
<body>
        <h1>Catrastor de Novo Usuário</h1><br>
    <form action="etapa02.php" method="post">
        <label for="#">Nome de Usuário</label>
        <input type="text" name="user" id="user" ><br>

        <label for="#">E-mail Cadastrado</label>
        <input type="email" name="email" id="email" ><br>

        <label for="#">Senha</label>
        <input type="text" name="senha" id="senha" ><br>
        <label for="#"> Confirmação de Senha</label>
        <input type="text" name="senhaC" id="senhaC" ><br>
        <button type="submit" onclick="verificarSenha()">Cadastra-se</button>
    </form>

    <script src="projeto-pii.js" language="javaScript" type="text/javaScript" charset="UTF-8"></script>

    
</body>
</html>