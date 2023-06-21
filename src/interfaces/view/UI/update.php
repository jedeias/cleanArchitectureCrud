<?php

require_once ("../../../autoload.php");

$session = new Session();

$session->verifySession();

$user = $session->get("user");

$repository = new RepositoryPeopleMid();

$personUpdate = $repository->getPresonById($_GET['pkPeople']);

if($_POST != null){    

    $person = new Person($_POST["name"], $personUpdate["email"], $_POST["password"], $_POST["sex"], $_POST["accessLevel"]);

    $repository->updatePerson($person);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../UX/css/style.css" media="screen and (max-width: 601px)">
    <link rel="stylesheet" href="../UX/css/styleDesktop.css" media="screen and (min-width: 602px)">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Register new person</title>
</head>
<body>
    
    <section class="conteiner">

        <form action="" method="post" enctype="multipart/form-data">

            <div>

                <input type="text" name="name"  value="<?php echo $personUpdate['name']; ?>" required placeholder="user name" maxlength="100">

            </div>

            <div>

                <input type="password"  value="<?php echo $personUpdate['password']; ?>" name="password" required placeholder="your password (****)" maxlength="12">

            </div>

            <div>

                <label for="sex">Sex</label>

                <select name="sex" id="sex" value="<?php echo $personUpdate['sex']; ?>">
                    <option value="">---</option>
                    <option value="M">Male</option>
                    <option value="F">Famele</option>
                </select> 

            </div>

            <div>
                <label for="accessLevel">AccessLevel</label>

                <select name="accessLevel" id="accessLevel"  value="<?php echo $personUpdate['fkAccessLevel']; ?>">
                    <option value="2">Writer</option>
                    <option value="1">Reader</option>
                </select> 

            </div>

            <div>

                <button type="submit">Update</button>

            </div>

        </form>

    </section>

</body>
</html>

