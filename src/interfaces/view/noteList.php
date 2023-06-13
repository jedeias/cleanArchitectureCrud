<?php

require_once ("../../autoload.php");

$session = new Session();

$user = $session->get("user");

$repository = new RepositoryPeopleMid();

$peopleArray = $repository->selectAllPeople();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note List</title>
</head>
<body>

    <a href="UI/register.php">
        <button type="submit">
            Register
        </button>
    </a>

    <table border="1 solid">

        <thead>
            <th>COD</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>SEX</th>
            <th>ACCESS LEVEL</th>
            <th>UPDATE</th>
            <th>DELETE</th>
            
            
        </thead>
        
        <?php

            foreach ($peopleArray as $person){
                echo "<tr>";
                echo "<td>{$person['pkPeople']}</td>";
                echo "<td>{$person['name']}</td>";
                echo "<td>{$person['email']}</td>";
                echo "<td>{$person['password']}</td>";
                echo "<td>{$person['sex']}</td>";
                echo "<td>{$person['fkAccessLevel']}</td>";
                echo "<td>
                        <form method='GET' action='UI/update.php'>
                            <input type='hidden' name='pkPeople' value='{$person['pkPeople']}'>
                            <button type='submit'>UPDATE</button>
                        </form>
                    </td>";
                echo "<td><a href=''><button>DELETE</button></a></td>";
                echo "</tr>";
            }

        ?>

</table>    

</body>
</html>