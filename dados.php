
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

        <?php
$valor = $_GET["v"];
$rq = sqrt($valor);
$valor *=$valor;
echo "<br>O valor elevado ao quadrado e   $valor";
echo "<br>O valor da rais quadrade e $rq";

?>
      <a href="./formulario.html">retorna</a>  
       
    </main>
</body>

</html>



