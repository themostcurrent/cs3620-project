

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    echo $_POST["username"];
    echo $_POST["firstname"];
    echo $_POST["lastname"];
    echo $_POST["password"];



    require_once('./user/user.php');

        $user = new user();
        $user->setUsername($_POST["username"]);
        $user->setFirstname($_POST["firstname"]);
        $user->setLastname($_POST["lastname"]);
        $user->setPassword($_POST["password"]);

        $user->createUser();
?>