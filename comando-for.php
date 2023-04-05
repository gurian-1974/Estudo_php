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
<h1>Estrutua de contagem com for</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
       
    </main>
    <?php
    for($i =1; $i <= 10; $i ++){

        echo " $i";
    }
    echo "<br>";
    echo "<br>";
    for($i =10; $i >= 1; $i --){

        echo " $i";
    }

    echo "<br>";
    echo "<br>";
    for($i =0; $i <= 60; $i +=5){

        echo " $i";
    }

 
    ?>
</body>

</html>
