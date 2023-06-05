<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to my test ROOM</title>
</head>
<body>
    
    <pre>

        <?php
         
            require_once ("../src/autoload.php");
    
            class Preson extends People{

            }
            
            $preson = new Preson(); 
            
            $preson->setName("joaquim");

            $preson->setEmail("test@asdasdasda.com");

            $preson->setPassword("0123456789000");

            $preson->setSex("O");

            var_dump($preson);

        ?>
        
    </pre>
    
</body>
</html>