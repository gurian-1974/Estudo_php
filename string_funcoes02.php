<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
    <style>
        body{
    
    font-family: Arial, Helvetica, sans-serif;

}

#img{
    background: blue url(phplogo.jpg);
    display: block;
    align-self: start;
    padding-bottom: 10px;
    margin-bottom: 10px;


}
    </style>

</head>

<body>
<h1>funçoes string</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
       
    </main>
    <?php
    $nome = "luciano gurian";
    $frase = "Estou aprendendo PHP";
    $frase2 = "Estou aprendendo php com guanaba rei do php";
    $site = "Curso em video";
    $frase3 = "gosto de estudar matematica";
    echo "Seu nome convertido a minusca e primeursa letra maiscula ".ucfirst(strtolower($nome));
    echo "<br>";
    echo "Seu nome convertido a maiscula ".strtoupper($nome);
    echo "<br>";
    echo "Seu primeiro nome com letra maiscula ".ucfirst($nome);
    echo "<br>";
    echo "Seu nome com inicias maisculas ".ucwords($nome);
    echo "<br>";
    echo "Seu nome invertido ".strrev($nome);
    echo "<br>";
    echo "A palavra php aparece na  ".strpos($frase,"PHP")."posicao";
    echo "<br>";
    echo "A palavra php aparece na ".stripos($frase,"php")."posicao";
    echo "<br>";
    echo "A palavra php aparece  ".substr_count($frase2,"php")." vezes";
    echo "<br>";
    echo substr($site,0,5);
    echo "<br>";
    $novafrase3 = str_ireplace("Matematica","python",$frase3);
    echo $novafrase3;

    ?>
</body>

</html>
