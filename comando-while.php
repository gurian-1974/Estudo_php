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

    $c = 1;

    while ($c <=10){

        echo " <br> ---> $c";
        $c++ ;
    }

    $b = 10;

    while ($b >=1){

        echo " <br> ---> $b";
        $b--;

    }


   
    ?>
</body>

</html>
