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
<h1>uso do comando swich</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
      
   
  
    </div>
    <a href="./switchhtml.html">retorna</a>
    <?php

    $n = isset($_GET["num"]) ?$_GET["num"]:0;
    $o = isset($_GET["oper"]) ?$_GET["oper"]:1;
    
    switch ($o){

        case 1:
            $r = $n * 2;
            break;

        case 2:
             $r = $n * $n * $n;
             break;

        case 3:
            $r = sqrt($n) ;    
    }
        echo "resultado  $r";
    ?>


</main>
</body>

</html>
