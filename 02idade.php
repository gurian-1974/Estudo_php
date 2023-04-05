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

    echo "$nome e $sexo e tem  $idade anos de idade";

    ?>

    <a href="./formulario01.html">retorna</a>
</body>

</html>
