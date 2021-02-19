  
<?php
    require_once('./session/session.php');

    $session = new session();
    $session->login("Joey", "12345");
?>  