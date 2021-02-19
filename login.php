  
<?php
    session_start();

    require_once('./session/session.php');

    $session = new session();

    $session->login($_POST["username"],$_POST["password"]);
?>  