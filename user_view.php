<?php
    require_once('./header.php');
?>

<?php
    require_once('./user/user.php');

    $user = new User();
    $user->getUser(1);

    echo $user->getUsername();

?>
