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

            require_once ("../src/autoload.php");
            
            $person = new Person("joaquim", "test@test.com", "password","sex", 3);
            
            $person->setName("joaquim");

            $person->setEmail("teststest.com");

            $person->setPassword("0123456789000");

            $person->setSex("M");

            print_r($person);

            $personArray =  array("Name" => $person->getName(), 
                            "Email" => $person->getEmail(), 
                            "Password" => $person->getPassword(), 
                            "Sex" => $person->getSex(), 
                            "AccessLevel" => $person->getAccessLevel());
        
            foreach ($personArray as $personCheack => $key) {
                
                if ($key == "invalid"){
                    echo "O elemento". $personCheack. " é ivalido <br>";
                    
                    print_r($personCheack);
                    
                    //die(header("Refresh: 5; ../noteList.php"));
                    die();
                }        
            }

            // $repositoryNotes = new RepositiryNotes();

            // $notes = $repositoryNotes->getById(2);
            
            // print_r($notes);

            // echo "<br><hr><br>";    

            // $person = new Person("test", "test@test.com", "password", "M",2);

            // $note = new Note($person);

            // $note->setNotes("save php test");

            // print_r($note);

            // // $repositoryNotes->save($note);

            // $repositoryNotes->delete(6);

        ?>
        
    </pre>
    
</body>
</html>