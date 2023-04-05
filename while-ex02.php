<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario php com html</title>
    <style>
        body{
            width: 300px;
            height: 300px;
            background-color: blue;
            color: white;

        }

        main{
           
            position: absolute;
            width: 350px;
            height: 200px;
            background-color: gray;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding-bottom: 20px;
        }

        form{
            padding: 20px;
            padding-bottom: 40px;
        }
        #sub{
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <main>
        <form action="while-ex02.php" method="get">
           <?php
           echo "<p>criando imput com php<br>";
            $c= 1;

            while($c <6){
              

              echo "  valor $c:<input type='number' name='v1'  max='100' main='0' value='0'><br>";
              $c++;  
            }

            ?>

          
             
            <input id="sub" type="submit" value="Enviar">
            </fieldset><br>



    </main>
    </form>
</body>
</html>