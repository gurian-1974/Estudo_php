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
        function soma(){


            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i= 0; $i < $t; $i++){

                $s = $s + $p[$i];
            }
            return$s;
        }

        $r = soma(6,4,5,2,7,9);
        echo $r;

        echo "<br>";
        echo "<br>";

        function teste($x){
            $x += 2;
            echo "O valor de x e $x<br>";
        }

        $a = 3 ;
        teste($a);
        echo " o valor de A e$a<br>";

        function teste1(&$x){
            $x += 2;
            echo "O valor de x e $x<br>";
        }

        $a = 3 ;
        teste1($a);
        echo " o valor de A e$a<br>";
    ?>
</body>

</html>
