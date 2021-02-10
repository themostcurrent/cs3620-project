

<?php

    require_once('./user/user.php');

        $user = new user();
        $user->setUsername($_POST["username"]);
        $user->setFirstname($_POST["firstname"]);
        $user->setLastname($_POST["lastname"]);
        $user->setPassword($_POST["password"]);

        $user->createUser();
?>