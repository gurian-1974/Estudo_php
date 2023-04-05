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
<h1>Estrutua de repetição if</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
       
    </main>
    <?php
    function soma($a,$b){
        $s = $a + $b;
        echo $s;
    }
    soma(9,7);
    echo"<br>";
    function subt($a,$b){
        $s = $a - $b;
        echo "<br>A subtracao vale $s";
    }
  
    subt(9,7);
    echo"<br>";

    function soma2($a,$b){
       
        return $a + $b;
    }

    $x = 3;
    $y = 4;

    echo soma2($x,$y);
    echo"<br>";

    function soma3($a,$b){
            $soo =$a + $b;
        return $soo;
    }

    $x = 13;
    $y = 14;

    echo soma3($x,$y);


    ?>
</body>

</html>
