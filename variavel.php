<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>primeira aula estudo de variavel</h1>
    <p>No php nao e necessario declara  tipo da variavel</p>
    <P>porem se necessario pode faze por coação como no exemplo a baixo</P>
    <p> $profi = (string) "tecnico";</p>
    <?php
    
    $nome = "luciano";
    $idade = 49;
    $profi = "tecnico";
    
    echo $nome;
    
    echo $idade;
    echo $profi;

    echo "$nome tem $idade sua profissao e $profi";
    
    ?>
</body>

</html>
