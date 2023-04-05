!DOCTYPE html>

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
    <button><a href="./switch-ex01.html">retorna</a></button>
    <?php

    $dia = isset($_GET["dia"]) ?$_GET["dia"]:1;
  
    
    switch ($dia){

        case 1:
        case 2:
        case 3:    
        case 4:
        case 5:
            echo "hoje  e dia de ir a escola";
            break;

        case 6:
        case 7:
             echo "hoje nao e dia de ir a escola";

       
    }
        
    ?>


</main>
</body>

</html>
