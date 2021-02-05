<?php
require_once('./user/userDAO.php');


Class User{
    private $username;
    private $user_id;


    public function getUser($user_id){
        $this->user_id = $user_id;    
        
        $userDAO = new UserDAO();
        $userDAO->getUser($this);
        
        return $this;
    }
    public function getUsername(){
            return $this->username;
    }

    public function setUseername($username){
        $this->username = $username;
    }
    public function getUserId($user_id)
    {
        return $this->user_id;
    }
}

?>