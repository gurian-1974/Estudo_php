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
<h1>O peradores relacionais</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        <br>
        <p>
           <br>maior $a > $b
           <br>
           <br>menor $a < $b
           <br>
           <br>maior ou igual $a >= $b
           <br>
           <br>menor ou igual $a <= $b
           <br>
           <br>diferente $a != $b 
           <br>
           <br>igual $a == $b
           <br>
           <br>identico $a === $b igual e do emsmo tipo
            <br>
        </p>

        <h1>Operador unario</h1>

        $maior = $a > $b ? $a : $b;

        <?php
        $a =9;
        $b = 8;

        $maior = $a > $b ? $a : $b;
        echo "<br>";
        echo $maior;
        echo "<br> mesmo coisa";

        if($a>$b){
            $maior = $a;
            echo "<br>$maior e o valor";

        }else{
            $maior = $b;
            echo"<br>$maior e o valor";
        }
        //$maior = "s";
        $r = ($maior == "s") ? $a + $b : $a * $b;

        echo "<br>O valor de R e $r"

        ?>
       
    </main>
</body>

</html>
