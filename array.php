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
        <table border="1">
        <?php
        $n = array(3,5,8,2);
        var_dump($n);
        $n[] = 7;
        var_dump($n);
        unset($n[0]);
        var_dump($n);


        $c = range(5,40,5);
        var_dump($c);
        foreach($c as $v){
            echo "$v    ";
        }
        echo "<br>";
        $pessoa = array("nome"=>"Ana","idade"=>23,"peso"=>65.8);
        var_dump($pessoa);
        foreach($pessoa as $a => $b){

            echo "<br>O campo $a possui o conteudo $b";
        }

        ?>
        </table>
    </pre>
</body>

</html>
