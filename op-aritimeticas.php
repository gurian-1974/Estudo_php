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
<h1>Operaçoes aritimeticas</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
        <?php
        $n1 = 3;
        $n2 = 6;
        $soma = $n1 +$n2;
        echo " <br/>$n1 + $n2 e igual a $soma";
        echo "<br/>";

        $subtracao = $n2 -$n1;

        $mult = $n2 * $n1;
      

        echo "<br/>$n2 - $n1 e $subtracao";
        echo "<br/> $n2 * $n1 e igual $mult";
        
        
        ?>
    </main>
</body>

</html>
