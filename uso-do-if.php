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
<h1>Estrutua de repetição if , else  e elese if</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
       
    </main>

<?php
$valor1 = 667;
$valor2 = 101;

if ($valor1 != 100)
{ echo "<br/>correto";

}

else{

    echo "<br/>valor icorreto";
}

print "<br/>segundo exemplo de else dentro de else";

if($valor1 == $valor2){
    echo "<br/>correto sao  iguais";

}else{

    if($valor1 > $valor2){
        echo "<br/>valor 1 e maior";
    }else{
        echo "<br/>valor1 e menor";
    }

}

print "<br/>3 exemplo uso de else if";

if($valor1 == 150){
    echo "<br/>correto sao  iguais";

}else if($valor1 > 699){
    echo " <br/> valor e Maior";
}
else if($valor1 < 150){
    echo " <br/> valor e menor";
}
else if($valor1 == 666){
    echo " <br/> valor e marca da besta";
}
else {
    echo " <br/> cabo opcap";
}




?>


</body>

</html>
