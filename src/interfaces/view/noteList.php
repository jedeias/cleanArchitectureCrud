<?php

require_once ("../../autoload.php");

$session = new Session();

$session->verifySession();

$user = $session->get("user");

$repository = new RepositoryPeopleMid();

$peopleArray = $repository->selectAllPeople();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="UX/CSS/userList.css" media="screen and (max-width: 601px)">
    <link rel="stylesheet" href="UX/CSS/userListDesktop.css" media="screen and (min-width: 602px)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Note List</title>
</head>
<body>

    <section class="container">

        
        <table>
            
            <thead>
                <th>COD</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th class="optinal">PASSWORD</th>
                <th class="optinal">SEX</th>
                <th class="optinal">ACCESS LEVEL</th>
                <th>UPDATE</th>
                <th>DELETE</th>
                
            </thead>
            
            <?php

                foreach ($peopleArray as $person){
                    echo "<tr>";
                    echo "<td>{$person['pkPeople']}</td>";
                    echo "<td>{$person['name']}</td>";
                    echo "<td>{$person['email']}</td>";
                    echo "<td class='optinal'>{$person['password']}</td>";
                    echo "<td class='optinal'>{$person['sex']}</td>";
                    echo "<td class='optinal'>{$person['fkAccessLevel']}</td>";
                    echo "<td>
                    <form method='GET' action='UI/update.php'>
                    <input type='hidden' name='pkPeople' value='{$person['pkPeople']}'>
                    <button type='submit'>UPDATE</button>
                    </form>
                    </td>";
                    echo "<td><a href='UI/delete.php?pkPeople=$person[pkPeople] ' onclick='return confirm(\"This action wants to remove this user. Are you right?\")'><button>DELETE</button></a></td>";
                    echo "</tr>";
                }

            ?>
        </table>    
    </section>


    <footer>
        <article class="menuBar" id="trigger" onclick="trigger()">

            <img class="homeSvg" src="UX/img/home.svg" alt="home">
            <div class="inner"></div>
        </article>
    </footer>

    <script src="UX/JS/menuBar.js"></script>
    <script src="UX/JS/resposen.js"></script>

</body>
</html>