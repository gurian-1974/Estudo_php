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
    <pre>
        <?php
        $n = array(2,3,5,8,9);
        
        print_r($n); 
        array_push($n,4); //coloca no final do array
        print_r($n);
        array_pop($n);//deleta do final do array
        print_r($n);
        array_unshift($n,7);//coloca no inicio do array
        print_r($n);
        array_shift($n);//deleta do inicio doarray
        print_r($n);
        sort($n);//coloca em ordem numerica
        print_r($n);
        rsort($n);//coloca em ordem reversa
        print_r($n);



        $nome = array("ana","aline","carla","bruna");
        print_r($nome);
        var_dump($nome);
        echo count($nome);
        echo count($n);
        ?>
    </pre>
</body>

</html>
