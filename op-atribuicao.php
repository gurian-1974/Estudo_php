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
<h1>Operadores de Atribuição </h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
      <p>

        <br>$a = $a + $b ---> $a += $b
        <br>$a = $a - $b ---> $a -= $b
        <br>$a = $a * $b ---> $a *= $b
        <br>$a = $a / $b ---> $a /= $b
        <br>$a = $a % $b ---> $a %= $b

      </p> 

      <?php

            $a = 3;
            $b = &$a;
            $b += 5;

            echo "<br/>A variavel a vale $a";
            echo "<br/>A variavel b vale $b";

            $site = "cursoemvideo";
            $$site = "cursophp";

            echo "<br/>$site";
            echo "<br/>$cursoemvideo";

            $preco = $_GET["p"];
            echo "<br/> O preco do produto e $preco ";
           $preco += $preco*10/100;
            echo "<br/>preco com aumento $preco";

            $preco -= $preco*10/100;
            echo "<br/>preco com aumento r$ ".number_format( $preco,3);
            
            echo "<P>operador encremento<p/>";

            $anoatual = 2023;
            $anoatual2 = 2023;
            $anoatual3 = 2023;
            echo "<br/>ano atual e $anoatual o anterior " .--$anoatual;
            echo "<br/>ano atual e $anoatual2 o proximo " .++$anoatual2;
            echo "<br/>ano atual e $anoatual3 o proximo " .$anoatual3--;

    ?>



    </main>
</body>

</html>
