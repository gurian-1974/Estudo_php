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
<h1>funcoes string</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>


    </main>
    <?php
     $prod = "leite";
     $preco = 4.7;
     printf("O %s custa R$ %.3f",$prod,$preco);
     echo "<br>";
     $x[0]=4;
     $x[1]=3;
     $x[2]=8;
     print_r($x);

     $x2 = array (1,2,3,4,5,6);
     echo "<br>";
     $x2[]=8;
     $x2[]=11;
     print_r($x2);
     echo "<br >";
     echo "<br>";
     var_dump($x2);
     echo "<br>";
     echo "<br>";
     var_export($x2);
     echo "<br >";
     echo "<br>";
$texto ="luciano de andrade gurian da silva";
    $text = wordwrap($texto,20,"<br>");

    echo $text;
    echo "<br>";
    $lentexto = strlen($texto);
    echo $lentexto;
    echo "<br>";
    $frase = "eu estou estudando php e da hora";
    $cont = str_word_count($frase,1);
    var_dump($cont);
    echo "<br>";
    $site = "curso em video";
    $vetor = explode(" ",$site);
    print_r($vetor);
    echo "<br>";
    $cod = chr(68);
    echo $cod;
    $codigo = ord("D");
    echo $codigo
    ?>
</body>

</html>
