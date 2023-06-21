<?php

require_once ("../../../autoload.php");

$session = new Session();

$session->verifySession();

$user = $session->get("user");

if(isset($_POST['note']) && $_POST['note'] !== '') {
    
    $note = new Note($user);

    $repositoryNotes = new RepositoryNotesMid();

    $note->setNotes($_POST["note"]);

    try{
        $repositoryNotes->saveNote($note);
        
        echo"<script>alert('save was a sucessful')</script>";
        
    }catch(Exception $th){
        echo"<script>alert('sorry we cant meke your save')</script>";
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../UX/CSS/note.css" media="screen and (max-width: 601px)">
    <link rel="stylesheet" href="../UX/CSS/noteDesktop.css" media="screen and (min-width: 602px)">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad</title>
</head>
<body>

    <script src="../UX/JS/note.js"></script>

</body>
</html>