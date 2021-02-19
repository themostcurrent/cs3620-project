  
<?php
class UserDAO {
  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, user_id FROM user WHERE user_id =" . $user->getUserId();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function checkLogin($passedInUsername, $password){
    require_once('./utilities/connection.php');
    $user_id = 0;

    $sql = "SELECT user_id FROM user WHERE username = '".$passedInUsername."' AND password = '".hash("sha256",$password)."';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      user_id = $row["user_id"];
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    return $user_id;
  }

  function createUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "INSERT INTO user_table.user
    (
    `Username`,
    `FirstName`,
    `LastName`,
    `Password`)
    VALUES
    ('".$USER->getUsername()."',
     '".$USER->getFirstname()."',
     '".$USER->getLastName()."',
     '".$USER->getPassword()."',
    );
    ";
    $result = $conn->query($sql);

    
    $conn->close();

    echo"user created";
  }

  function deleteUser($u){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM testdb.user WHERE username = '".$u."';";
    $result = $conn->query($sql);

    
    $conn->close();
       echo"user deleted";

  }
}
?>