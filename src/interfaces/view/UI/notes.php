<?php

require_once ("../../../autoload.php");

$session = new Session();

$session->verifySession();

$user = $session->get("user");

$repositoryNotes = new RepositoryNotesMid();

$userNote = $repositoryNotes->getUserNotes($user);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../UX/CSS/userList.css" media="screen and (max-width: 601px)">
    <link rel="stylesheet" href="../UX/CSS/userListDesktop.css" media="screen and (min-width: 602px)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad list</title>
</head>
<body>

    <script src="../UX/JS/notepad.js"></script>

    <section>

        <table>

            <thead>
                <th>Notation</th>
                <th>Date</th>
            </thead>

            <?php

                foreach ($userNote as $note){
                    echo "<tr>";
                    echo "<td> {$note['notes']}</td>";
                    echo "<td> {$note['date']}</td>";
                    echo "<tr>";
                }
            
            ?>
        </table>

    </section>

    <footer>
        <article class="menuBar" id="trigger" onclick="trigger()">
            <a href="../noteList.php">

                <img class="homeSvg" src="../UX/img/home.svg" alt="home">
            </a>
            
        </article>
    </footer>
</body>
</html>