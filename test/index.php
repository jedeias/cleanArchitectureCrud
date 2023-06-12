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
            
            $person = new Person(); 
            
            $person->setName("joaquim");

            $person->setEmail("tests@test.com");

            $person->setPassword("0123456789000");

            $person->setSex("M");

            var_dump($person);

            
        ?>
        
    </pre>
    
</body>
</html>