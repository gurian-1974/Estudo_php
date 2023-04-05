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
<h1>formulario em php</h1>
    <main>
        <div id="img">
          <img src="./phplogo.jpg" alt="">
        </div>
        
       
    </main>
    <?php
    $nome = $_GET["nome"];
    $ano =$_GET["ano"];
    $sexo = $_GET["sexo"];

 $idade =  date("Y") - $ano;

    echo "<br>$nome e $sexo e tem  $idade anos de idade";
    if($idade >= 18 && $idade < 65){
        echo "<br> $nome vc deve votar";
    }elseif($idade < 16){
        echo "<br> $nome vc nao pode votar";
    }

    elseif($idade >= 16 && $idade < 18){
        echo "<br>$nome seu voto e facultativo";
    }else{
        echo "<br>$nome seu voto e facutativo";
    }

    ?>
    <br>
    <a href="./formulario01.html">retorna</a>
</body>

</html>
