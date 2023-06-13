<?php

require_once ("../../../autoload.php");

$session = new Session();

$user = $session->get("user");

echo "<pre>";

// print_r($user); user verification

echo "</pre>";

if($_POST != null){
    
    $repository = new RepositoryPeopleMid();

    $person = new Person($_POST["name"], $_POST["email"], $_POST["password"], $_POST["sex"], $_POST["accessLevel"]);

    $repository->savePerson($person);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Register new person</title>
</head>
<body>
    
    <section>

        <form action="" method="post" enctype="multipart/form-data">

            <div>

                <input type="emial" name="email" required placeholder="exemple@exemple.com" maxlength="80">

            </div>

            <div>

                <input type="text" name="name" required placeholder="user name" maxlength="100">

            </div>

            <div>

                <input type="password" name="password" required placeholder="your password (****)" maxlength="12">

            </div>

            <div>

                <label for="sex">Sex</label>

                <select name="sex" id="sex">
                    <option value="">---</option>
                    <option value="M">Male</option>
                    <option value="F">Famele</option>
                </select> 

            </div>

            <div>
                <label for="accessLevel">AccessLevel</label>

                <select name="accessLevel" id="accessLevel">
                    <option value="2">Writer</option>
                    <option value="1">Reader</option>
                </select> 

            </div>

            <div>

                <button type="submit">Register</button>

            </div>

        </form>

    </section>

</body>
</html>

